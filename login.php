<?php
    session_start();

    include "includes/functions.php";
    require 'filters/guest_filter.php';
    include "config/database.php";
    include "includes/constant.php";
    // include "partials/success.php";

    if(isset($_POST['login'])){
        if(not_empty(['identifiant', 'password'])){
            extract($_POST);
            
            $q = $db->prepare("SELECT user_id, pseudo, password AS hashed_password, email FROM 
                                users WHERE (pseudo = :identifiant OR email = :identifiant)");
            $q->execute([
                'identifiant' => $identifiant,
            ]);

            $user = $q->fetch(PDO::FETCH_OBJ);

            if($user && bcrypt_verify_password($password, $user->hashed_password)){

                //Get databse element sous forme d'obejts
                
                $_SESSION['user_id'] = $user->user_id;
                $_SESSION['pseudo'] = $user->pseudo;
                $_SESSION['email'] = $user->email;

                redirect('profile.php?id='.$user->user_id);
            }else{
                set_flash('Wrong user name or Password','danger');
                save_input_data();
            }
        }
            
    }else{
        clear_input_data();
    }

    require 'views/login.views.php';
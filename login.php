<?php
    session_start(); 

    require 'filters/guest_filter.php';
    include "config/database.php";
    include "includes/functions.php";
    include "includes/constant.php";
    // include "partials/success.php";

    if(isset($_POST['login'])){
        if(not_empty(['identifiant', 'password'])){
            extract($_POST);
            
            $q = $db->prepare('SELECT id, pseudo, password AS hashed_password email FROM 
                                users WHERE (pseudo = :identifiant OR email = :identifiant) AND active = : "1"');
            $q->execute([
                'identifiant' => $identifiant,
            ]);

            $user = $q->fetch(PDO::FETCH_OBJ);

            if($user && bcrypt_verify_password($password, $user->hashed_password)){

                //Get databse element sous forme d'obejts
                $_SESSION['user_id'] = $user->id;
                $_SESSION['pseudo'] = $user->pseudo;
                $_SESSION['email'] = $user->email;

                redirect('profile.php?id='.$user->id);
            }else{
                set_flash('Wrong user name or Password','danger');
                save_input_data();
            }
        }
            
    }else{
        clear_input_data();
    }

    require 'views/login.views.php';
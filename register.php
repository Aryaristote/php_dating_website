<?php
    session_start(); 

    // require 'filters/auth_filter.php';
    include "config/database.php";
    include "includes/functions.php";
    include "includes/constant.php";
    // include "partials/success.php";

    if(isset($_POST['register'])){
        if(not_empty(['name', 'pseudo', 'email', 'password', 'password_confirm'])){
            $errors = [];
            extract($_POST);

            //Check if the input and fill out
            if(mb_strlen($name) < 4){
                $errors[] = "User name too short";
            }
            if(mb_strlen($pseudo) < 4){
                $errors[] = "User pseudo too short";
            }
            if(! filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errors[] = "Wrong email address";
            }
            if(mb_strlen($password) < 6){
                $errors[] = "Put a strong Password";
            }else{
                if($password_confirm != $password_confirm){
                    $errors[] = "Password does not mach";
                }
            }

            // Check if the value is not already used
            if(is_already_in_use('pseudo', '$pseudo', 'users')){
                $errors[] = "pseudo already used";
            }
            if(is_already_in_use('email', '$email', 'users')){
                $errors[] = "Email already used";
            }

            //Incase the login succed
            if(count($errors) == 0){
                $to = $email;
                $subject = WEBSITE_NAME." - ACCOUNT ACTIVATION";
                $password = bcrypt_hash_password($password);
                $token = sha1($pseudo.$email.$password);

                ob_start();
                require('templates/emails/activation.tmpl.php');
                $content = ob_get_clean();

                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                // mail($to, $subject, $content, $headers);
                set_flash("The confirmation mail has been sent!", 'success');

                //Send data in database
                $q = $db->prepare('INSERT INTO users(name, pseudo, email, password) VALUES (:name, :pseudo, :email, :password)');
                $q->execute([
                    'name' => $name,
                    'pseudo' => $pseudo,
                    'email' => $email,
                    'password' => $password,
                ]);

                redirect("index.php");
            }else{
                save_input_data();
            }
        }else{
            $errors[] = "Please, Fill out all input";
            save_input_data();
        }
    }else{
        clear_input_data();
    }

    require 'views/register.views.php';
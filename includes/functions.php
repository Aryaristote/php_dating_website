<?php
    require './partials/_flash.php';

    //Remove special characters in input user record
    if(!function_exists('e')){
        function e($string){
            if($string){
                return htmlspecialchars($string);
            }
        }
    } 

    // Function to get session'data
    if(!function_exists('get_session')){
        function get_session($key){
            if($key){
                return !empty($_SESSION[$key]) ? e($_SESSION[$key]) : null;
                // If the session is not empty return session key else return null;
            }
        }
    }

    //Check is the user has logged in, to change menu option show up
    // if(!function_exists('is_logged_in')){
    //     function is_logged_in(){
    //          if(isset($_SESSION['user_id']) || isset($_SESSION['pseudo']));
    //     }
    // }

    // Hashing the user password
    if(!function_exists('bcrypt_hash_password')){
        function bcrypt_hash_password($value, $options = array()){
            $cost = isset($options['rounds']) ? $options['rounds']: 10;
            $hash = password_hash($value, PASSWORD_BCRYPT, array('cost' => $cost));

            if($hash === false){
                throw new Exception("BCrypt Hashing is not supported");
            }
            return $hash;
        }
    }

    // Verify the password
    if(!function_exists('bcrypt_verify_password')){
        function bcrypt_verify_password($value, $hashedgValue){
            return password_verify($value, $hashedgValue);
        }
    }

    // Create avatar for user and link to the user email
    if(!function_exists('get_avatar_url')){
        function get_avatar_url($email, $size = 50){
            return "https://www.gravatar.com/avatar/".md5(strtolower(trim(e($email))))."?s=".$size;
        }
    }

    if(!function_exists('find_user_by_id')){
        function find_user_by_id($id){
            global $db;
            $q = $db->prepare("SELECT name, pseudo, email, city, country, twitter, github, sex, bio FROM users WHERE id= ?");
            $q->execute([$id]);
            $data = $q->fetch(PDO::FETCH_OBJ);
            $q->closeCursor();
            return $data;
        }
    }

    //Check if the input are not empty and remove space character
    if(!function_exists('not_empty')){
        function not_empty($fields = []){
            if(count($fields) != 0){
                foreach($fields as $field){
                    if(empty($_POST[$field]) || trim($_POST[$field]) == ""){
                        return false;
                    }
                }
                return true;
            }
        }
    }

    //Check if the name does not already exist into the database
    if(!function_exists('is_already_in_use')){
        function is_already_in_use($field, $values, $table){
            global $db;
            $q = $db->prepare("SELECT id FROM $table WHERE $field = ?");
            $q->execute([$values]);
            $count = $q->rowCount();
            $q->closeCursor();
            return $count;
        }
    }

    //Activate the flash message for wrong of success notification
    if(!function_exists('set_flash')){
        function set_flash($message, $type = 'info'){
            $_SESSION['notification']['message'] = $message;
            $_SESSION['notification']['type'] = $type;
        }
    }

    //After input record, redirecte the user
    if(!function_exists('redirect')){
        function redirect($page){
            header('Location: '. $page);
            exit();
        }
    }

    //Save input data into session 
    if(!function_exists('save_input_data')){
        function save_input_data(){
            foreach($_POST as $key => $value){
                if(strpos($key, 'password') === false){
                    $_SESSION['input'][$key] = $value;
                }
            }
        }
    }

    //Get input records from session
    if(!function_exists('get_input')){
        function get_input($key){
            if(!empty($_SESSION['input'][$key])){
                return e($_SESSION['input'][$key]);
            }else{
                return null;
            }
            //Terner way
            //return !empty($_SESSION['input'][$key]) ? e($_SESSION['input'][$key]) : null;
        }
    }

    //Clear all data inside input 
    if(!function_exists('clear_input_data')){
        function clear_input_data(){
            if(isset($_SESSION['input'])){
                $_SESSION['input'] = [];
            }
        }
    }

    //Check if the login email exist
    if(!function_exists('email_exist')){
        function email_exist($field, $values, $table){
            global $db;
            $q = $db->prepare("SELECT id FROM $table WHERE $field = ?");
            $q->execute([$values]);
            $count = $q->rowCount();
            $q->closeCursor();
            return $count;
        }
    }
    
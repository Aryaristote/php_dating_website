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
    
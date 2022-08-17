<?php
    session_start();

    require 'includes/functions.php';
    require 'filters/auth_filter.php';
    require 'config/database.php';
    require 'includes/constant.php';

    if(!empty($_GET['id']) && $_GET['id'] === $_SESSION['user_id']){
        $user = find_user_by_id($_GET['id']);

        if(!$user){
            redirect('index.php');
        }
    }else{
        redirect('user_setting.php?id='.$_SESSION['user_id']);
    }

    if(isset($_POST['update'])){
        $errors = [];


        if(not_empty(['pseudo', 'name', 'city', 'country', 'sex', 'twitter', 'github', 'available_for_date', 'bio'])){
            extract($_POST);

            if(!empty($_FILES)){
                $file_name = $_FILES['file']['name'];
                $file_extension = strtolower(strrchr($file_name, "."));
        
                $file_tmp_name = $_FILES['file']['tmp_name'];
                $file_name = md5(uniqid(rand())).$file_extension;
                $file_dest = 'files/'.$file_name;
        
                $allow_extension = array('.jpg', '.jpeg', '.gif', '.png'); 

                if(in_array($file_extension, $allow_extension)){
                    if(move_uploaded_file($file_tmp_name, $file_dest)){
    
                    }
                }else{
                    $errors [] = "Wrong formate of the file";
                }
            }else{
                  $errors [] = "Select a given file";
            }

            $q = $db->prepare('UPDATE users SET files_name = :files_name, files_url = :files_url, pseudo = :pseudo, name = :name, city = :city, 
                country = :country, sex = :sex, twitter = :twitter, github = :github, available_for_date = :available_for_date, bio = :bio
                WHERE id = :id');
            $q->execute([
                'files_name' => $file_name,
                'files_url' => $file_dest,
                'pseudo' => $pseudo,
                'name' => $name,
                'city' => $city,
                'country' => $country,
                'sex' => $sex,
                'twitter' => $twitter,
                'github' => $github,
                'available_for_date' => !empty($available_for_date) ? '1' : '0',
                'bio' => $bio,
                'id' => $_GET['id'],
            ]); 

            redirect('profile.php?id='.$_SESSION['user_id']);
        }else{
            $errors [] = "Please, Fill out all input required filds";
            // set_flash("Please, Fill out all input required filds", "danger");
            save_input_data();   
        }
    }else{
        clear_input_data();
    }

    require 'views/user_setting.views.php';
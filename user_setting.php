<?php
    session_start();

    require 'filters/auth_filter.php';
    require 'config/database.php';
    require 'includes/functions.php';
    require 'includes/constant.php';

    if(!empty($_GET['id']) && $_GET['id'] === get_session('user_id')){
        $user = find_user_by_id($_GET['id']);

        if(!$user){
            redirect('index.php');
        }
    }else{
        redirect('profile.php?id='.get_session('user_id'));
    }

    if(isset($_POST['update'])){
        $errors = [];


        if(not_empty(['pseudo', 'name', 'sex','twitter', 'github', 'available_for_date', 'bio'])){
            extract($_POST);

            $q = $db->prepare('UPDATE users SET pseudo = :pseudo, name = :name, city = :city, country = :country,  
                sex = :sex, twitter = :twitter, github = :github, available_for_date = :available_for_date, bio = :bio
            WHERE id = :id');
            $q->execute([
                'pseudo' => $pseudo,
                'name' => $name,
                'city' => $city,
                'country' => $country,
                'twitter' => $twitter,
                'github' => $github,
                'sex' => $sex,
                'available_for_date' => !empty($available_for_date) ? '1' : '0',
                'bio' => $bio,
                'id' => get_session('user_id'),
            ]);

            // set_flash("Your profile has been updated"); To set flash on edit profile page (it's sould be imported to profile if succeded)
            redirect('profile.php?id='.get_session('user_id'));
        }else{
            set_flash("Please, Fill out all input required filds", "danger");
            // $errors[] = "Please, Fill out all input required filds"; Normally this should work at the place of set_flash
            save_input_data();   
        }
    }else{
        clear_input_data();
    }

    require 'views/user_setting.views.php';
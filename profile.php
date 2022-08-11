<?php 
    session_start();

    require 'includes/functions.php';
    require 'filters/auth_filter.php';
    require 'config/database.php';
    require 'includes/constant.php';

    if(!empty($_GET['id'])){
        $user = find_user_by_id($_GET['id']);

        if(!$user){
            redirect('index.php');
        }else{
            $q = $db->prepare('SELECT content, created_at FROM microposts WHERE user_id = :user_id ORDER BY created_at DESC');
            $q->execute([
                'user_id' => $_GET['id']
            ]);
            $microposts = $q->fetchAll(PDO::FETCH_OBJ);
        }

    }else{
        redirect('profile.php?id='.get_session('user_id'));
    }

    $q = $db->query("SELECT email FROM users ORDER BY pseudo ");
    $users = $q->fetchAll(PDO::FETCH_OBJ);

    require 'views/profile.views.php';
<?php 
    session_start();
    require 'filters/auth_filter.php';
    require 'includes/functions.php';
    require 'config/database.php';
    require 'includes/constant.php';

    if(isset($_POST['publish'])){
        if(!empty($_POST['content'])){
            extract($_POST);

            if(mb_strlen($content) < 5){
                $error = "The characters is too short";
            }elseif(mb_strlen($content) > 140){
                $error = "The characters is too long";
            }else{
            
                $q = $db->prepare("INSERT INTO microposts (user_id, content, created_at) VALUE (:user_id, :content, NOW())");
                $q->execute([
                    'user_id' => get_session('user_id'),
                    'content' => $content,
                ]);

                $success = "Your story has been updated";
            }
        }else{
            $error = "Your story's update has failled";
        }     
    }

    if(!empty($_GET['id'])){
        $user = find_user_by_id($_GET['id']);

        if(!$user){
            redirect('index.php');
            
        }else{
            $q = $db->prepare("SELECT content, created_at FROM microposts WHERE user_id = :user_id ");
            $q->execute([
                'user_id' => $_GET['id'],
            ]);

            $microposts = $q->fetchAll(PDO::FETCH_OBJ);
            // var_dump($microposts);
            // die();
            
            if(count($microposts) == 0){
                $vide_post = "This user has not a post yet";
            }
        }

    }else{
        redirect('profile.php?id='.get_session('user_id'));
    }

    $q = $db->query("SELECT email FROM users ORDER BY pseudo ");
    $users = $q->fetchAll(PDO::FETCH_OBJ);

    require 'views/profile.views.php';
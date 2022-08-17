<?php
    // session_start();

    require 'filters/guest_filter.php';
    include "includes/functions.php";
    include "config/database.php";
    

    if(isset($_POST['publish'])){
        if(!empty($_POST['content'])){
            extract($_POST);
            $errors =  [];
            
            $q = $db->prepare("INSERT INTO microposts(content, user_id, created_at) VALUE(:content, :user_id, NOW())");
            $q->execute([
                'content' => $content,
                'user_id' => $_SESSION['user_id'],
            ]);
            // set_flash("Your story has been updated", "success");
            $success = "Your story has been updated";
            var_dump("1");
            die();
        }else{
            $error [] = "Your story's update has failled";
            var_dump("0");
            die();
            // set_flash("Your story's update has failled", "danger");
        }     
    }
    // redirect("profile.php?id=".$_SESSION['user_id']);
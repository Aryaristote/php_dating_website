<?php
    session_start();

    include "includes/functions.php";
    require 'filters/auth_filter.php';
    include "config/database.php";

    if(isset($_POST['publish'])){
        if(!empty($_POST['content'])){
            extract($_POST);
            
            $q = $db->prepare("INSERT INTO microposts(content, user_id, created_at) VALUE(:content, :user_id, NOW())");
            $q->execute([
                'content' => $content,
                'user_id' => get_session('user_id'),
            ]);
            set_flash("Your story has been updated", "success");
        }else{
            set_flash("Your story's update has failled", "danger");
        }     
    }
    redirect("profile.php?id=".get_session('user_id'));
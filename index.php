<?php
    session_start();
    require 'includes/functions.php';
    require 'config/database.php';


    $q = $db->query("SELECT user_id, pseudo, name, country FROM users ORDER BY pseudo");
    $users = $q->fetchAll(PDO::FETCH_OBJ);
    

    require 'views/index.views.php';
<?php
    if(!isset($_SESSION['user_id']) || !isset($_SESSION['pseudo'])){
        $_SESSION['forwarding_url'] = $_SERVER['REQUEST_URI']; //Saving the url the user wanted to access to before he logged

        $_SESSION['notification']['message'] = "You must be logged in first";
        $_SESSION['notification']['type'] = "danger"; 

        header('Location: login.php');
        exit();
    }
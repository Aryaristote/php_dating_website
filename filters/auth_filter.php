<?php
    require './partials/_flash.php';
    include "includes/functions.php";
    
    if(!isset($_SESSION['user_id']) || !isset($_SESSION['pseudo'])){
        $_SESSION['forwarding_url'] = $_SERVER['REQUEST_URI']; //Saving the url the user wanted to access to before he logged

        set_flash("You must log in to access this page", "danger");
        //OR this give the result
        // $_SESSION['notification']['message'] = "You must be logged in first";
        // $_SESSION['notification']['type'] = "danger"; 

        header('Location: login.php');
        exit();
    }
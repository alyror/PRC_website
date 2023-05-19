<?php
session_start();

if(!isset($_SESSION['authenticated']))
{
    $_SESSION['status'] = "Please Login to access to dashboard";
    header('Location: login.php');
    exit(0);
}


?>
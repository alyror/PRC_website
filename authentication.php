<?php
session_start();

if(!isset($_SESSION['authenticated']))
{
    $_SESSION['status'] = "Please Login to connect to your branch.";
    header('Location: login.php');
    exit(0);
}


?>
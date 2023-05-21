<?php
session_start();
include('dbcon.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


function sendemail_verify($name,$email,$verify_token)
{
    $mail = new PHPMailer(true);
    // $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'vergarajhoncarljanauary12002@gmail.com';
    $mail->Password = 'gsnbkrgbbrfjmcti';

    $mail->SMTPSecure = "tls"; 
    $mail->Port = 587;

    $mail->setFrom('vergarajhoncarljanauary12002@gmail.com', "Bohemian Cafe Verification");
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'Email Verification from The Bohemian Cafe';

    $email_template = "
    <h2>You have Registered with The Bohemian Cafe</h2>
    <h5>Verify your email address to Login with the below given link</h5>
    <br/><br/>
    <a href = 'http://localhost/final/verify-email.php?token=$verify_token'>Click Me </a>
    ";

    $mail->Body = $email_template;
    $mail->send();
    // echo 'Message has been sent';
}

if(isset($_POST['register_btn']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $verify_token = md5(rand());

    //Email exists or not
    $check_email_query = "SELECT email FROM tbl_user WHERE email = '$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Address is already exists";
        header("Location: register.php");
    }
    else
    {
        //insert user
        $query = "INSERT INTO tbl_user (name,email,username,password,verify_token) VALUES ('$name', '$email', '$username', '$password', '$verify_token')";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            sendemail_verify("$name", "$email", "$verify_token");
            $_SESSION['status'] = "Successfully registered! please verify your email.";
            header("Location: register.php");
        }
        else
        {
            $_SESSION['status'] = "Registration Failed";
            header("Location: register.php");
        }
    }
}

?>
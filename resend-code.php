<?php
session_start();
include('dbcon.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function resend_email_verify($name, $email, $verify_token)
{
    $mail = new PHPMailer(true);
    // $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'amasangkay15@gmail.com';
    $mail->Password = 'rxsdyqcvybilyaso';

    $mail->SMTPSecure = "tls"; 
    $mail->Port = 587;

    $mail->setFrom('amasangkay15@gmail.com', "PRC CODE Verify");
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'Resend - Email Verification from PRC batangas chapter';

    $email_template = "
    <h2>You have Registered with Philippine Red Cross Batangas Chapter System</h2>
    <h5>Verify your email address to Login with the below given link</h5>
    <br/><br/>
    <a href = 'http://localhost/PRC_website/verify-email.php?token=$verify_token'>Click Me </a>
    ";

    $mail->Body = $email_template;
    $mail->send();
}

if(isset($_POST['resend_btn']))
{
    if(!empty(trim($_POST['email'])))
    {
        $email = mysqli_real_escape_string($con, $_POST['email']);

        $checkemail_query = "SELECT * FROM tbl_user WHERE email = '$email' LIMIT 1";
        $checkemail_query_run = mysqli_query($con, $checkemail_query);

        if(mysqli_num_rows($checkemail_query_run) > 0)
        {
            $row = mysqli_fetch_array($checkemail_query_run);
            if($row['verify_status'] == "0")
            {

                $name = $row['name'];
                $email = $row['email'];
                $verify_token = $row['verify_token'];

                resend_email_verify($name, $email, $verify_token);
                $_SESSION['status'] = "Verification link has been sent to your email!";
                header("Location: login.php");
                exit(0);
            }
            else
            {
                $_SESSION['status'] = "Email already verified.";
                header("Location: resend-email-verification.php");
                exit(0);
            }

        }
        else
        {
            $_SESSION['status'] = "Email is not registered.";
            header("Location: register.php");
            exit(0);
        }
    }
    else
    {
        $_SESSION['status'] = "Fill up the field";
        header("Location: resend-email-verification.php");
        exit(0);
    }
}
else
{

}


?>
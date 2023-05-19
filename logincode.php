<?php
session_start();
include('dbcon.php');

if(isset($_POST['login_btn']))
{
    if(!empty(trim($_POST['email'])) && !empty(trim($_POST['email'])))
    {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        $login_query = "SELECT * FROM tbl_user WHERE email = '$email' AND password = '$password' LIMIT 1";
        $login_query_run = mysqli_query($con, $login_query);

        if(mysqli_num_rows($login_query_run) > 0)
        {
            $row = mysqli_fetch_array($login_query_run);
           
            if($row['verify_status'] == "1")
            {
                $_SESSION['authenticated'] = TRUE;
                $_SESSION['auth_user'] = [
                    'username' => $row['username'],
                    'email' => $row['email']
                ];
                $_SESSION['status'] = "Logged in successfully!";
                header("Location: dashboard.php");
                exit(0);

            }
            else
            {
                $_SESSION['status'] = "Verify your email address first to login.";
                header("Location: login.php");
                exit(0);
            }

        }
        else
        {
            $_SESSION['status'] = "Invalid email or password!";
            header("Location: login.php");
            exit(0);
        }

    }
    else
    {
        $_SESSION['status'] = "Field should not be empty!";
        header("Location: login.php");
        exit(0);
    }
}

?>
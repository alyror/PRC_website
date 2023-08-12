<?php 
session_start();

if(isset($_SESSION['authenticated']))
{
    $_SESSION['status'] = "You are already logged in";
    header('Location: dashboard.php');
    exit(0);
}

$page_title = "Login Form";
include('includes/header.php');
// include('includes/navbar.php'); 
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="card shadow">
                    <div class="card-header">
                        <div class="d-flex justify-content-center p-2">
                            <img src="images/prc-logo.png" alt="PRC" width="150" height="150" class="img-fluid max-size-image"></a>
                        </div>
                        <h5 class="text-center pt-2" style = "font-family:poppins">SIGN IN</h5>
                        
                        <?php
                            if(isset($_SESSION['status']))
                            {
                                ?>
                                <div class="alert alert-success">
                                    <h9><?= $_SESSION['status']; ?></h9>
                                </div>
                                <?php
                                unset($_SESSION['status']);
                            }
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="logincode.php" method = "POST">

                            <div class="form-group mb-2">
                                <label for="">Email Address</label>
                                <input type="email" class = "bubble-input" name = "email" class="form-control" required>
                                
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" class = "bubble-input" minlength="8" name = "password" class="form-control" required>
                            </div>
                            <div class="form-group pb-4" style= "font-family:poppins;">
                            <a href="password-reset.php" class= float-end> Forgot Password?</a>
                            
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <button type = "submit" name = "login_btn" class = "btn btn-primary" aria-pressed="true">SIGN IN</button>
                            </div>
                        </form>
                        <hr>
                        
                        <h6 style = "font-family:poppins; font-size: 0.8rem; text-align= center;">Create an account? <a href="register.php">Sign up</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    label{
        font-family: "poppins";
        font-size: 0.9rem;
    }
    .btn{
        background-color: #030154;
    }
    .float-end
    {
        font-size: 0.7rem;
    }
    body{
        background-image: url("images/prc-bg.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .bubble-input {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 20px;
            background-color: #f0f0f0;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            margin-bottom: 10px;
        }

        .bubble-input:focus {
            outline: none;
            background-color: #d3e9ff;
            box-shadow: 0px 0px 8px rgba(0, 123, 255, 0.5);
        }

        .alert-success {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
        }
    

</style>


<?php include('includes/footer.php'); ?>
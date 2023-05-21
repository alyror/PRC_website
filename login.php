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
include('includes/navbar.php'); 
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">

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

                <div class="card shadow">
                    <div class="card-header">
                        <div class="d-flex justify-content-center p-2">
                          </a>
                        </div>
                        <h5 class='text-center pt-2'style = "font-family:poppins">SIGN IN</h5>
                    </div>
                    <div class="card-body">
                        <form action="logincode.php" method = "POST">

                            <div class="form-group mb-2">
                                <label for="">Email Address</label>
                                <input type="text" name = "email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name = "password" class="form-control">
                            </div>
                        
                            <div class="form-group d-flex justify-content-center">
                                <button type = "submit" name = "login_btn" class = "btn btn-primary" aria-pressed="true">SIGN IN</button>
                            </div>
                        </form>
                        <hr>
                        
                        <h6>did not receive verification email? 
                        <a href="resend-email-verification.php">Resend</a></h6>
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
    h6{
        font-size: 0.7rem;
    }
    .btn{
        background-color: black;
    }
    .float-end
    {
        font-size: 0.7rem;
    }
    body{
        background-image: url("images/bohe.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    

</style>


<?php include('includes/footer.php'); ?>
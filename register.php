<?php 
session_start();
$page_title = "Registration Form";
include('includes/header.php');
include('includes/navbar.php'); 
?>

<div class="py-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="alert">
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
                <div class="card shadow">
                    <div class="card-header">
                        <div class="d-flex justify-content-center p-2">
                            <img src="images/prc-logo.png" alt="PRC" width="150" height="150"></a>
                        </div>
                        <h5 class='text-center pt-2'style = "font-family:poppins">Registration Form</h5>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method = "POST">
                            <div class="form-group mb-3">
                                <label for="">Full Name</label>
                                <input type="text" name = "name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email Address</label>
                                <input type="text" name = "email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Username</label>
                                <input type="text" name = "username" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="text" name = "password" class="form-control">
                            </div>
                            <!-- <div class="form-group mb-4">
                                <label for="">Confirm Password</label>
                                <input type="text" name = "repassword" class="form-control">
                            </div> -->
                            <div class="form-group d-flex justify-content-center">
                                <button type = "submit" name = "register_btn" class = "btn btn-primary">SIGN UP</button>
                            </div>
                        </form>
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
    body{
        background-image: url("images/prc-bg.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

</style>


<?php include('includes/footer.php'); ?>
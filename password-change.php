<?php 
session_start();
$page_title = "Password Change Update";
include('includes/header.php');
include('includes/navbar.php'); 
?>

<div class="py-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
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
                
                <div class="card shadow">
                    <div class="card-header">
                        <h5 style = "font-family:poppins">Change Password</h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="password-reset-code.php" method = "POST">
                            <input type="hidden" name = "password_token" value = "<?php if(isset($_GET['token'])){echo $_GET['token'];} ?>">

                            <div class="form-group mb-3">
                                <label for="">Email Address</label>
                                <input type="text" name = "email" value = "<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">New Password</label>
                                <input type="text" name = "new_password" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Confirm Password</label>
                                <input type="text" name = "repassword" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type = "submit" name = "password_update_btn" class = "btn btn-primary w-100">Update Password</button>
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

</style>


<?php include('includes/footer.php'); ?>   
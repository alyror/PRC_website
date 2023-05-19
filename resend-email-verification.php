<?php 
session_start();

$page_title = "Login Form";
include('includes/header.php');
include('includes/navbar.php'); 
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

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
                        <h5 style = "font-family:poppins">Resend Email Verification</h5>
                    </div>
                    <div class="card-body">
                        <form action="resend-code.php" method = "POST">
                            <div class="form-group mb-3">
                                <label for="">Email Address</label>
                                <input type="text" name = "email" class="form-control" placeholder = "Enter Email Address">
                            </div>
                            <div class="form-group mb-3">
                                <button type = "submit" name = "resend_btn" class = "btn btn-primary">SUBMIT</button>
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
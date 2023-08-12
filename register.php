<?php 
session_start();
$page_title = "Registration Form";
include('includes/header.php');
// include('includes/navbar.php'); 
?>

<div class="py-3">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-md-8">
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
                    <div class="d-flex flex-row ">
                        <div class="container1">
                            <img src="images/prc-logo.png" alt="PRC" width="150" height="150" class ="prcLogo"></a>
                        </div>   

                    <div class="card-body">
                    <h5 class='text-center pt-2'style = "font-family:poppins">Registration Form</h5> 
                        <form action="code.php" method = "POST">
                            <div class="form-group mb-3">
                                <label for="">Full Name</label>
                                <input type="text" name = "name" pattern="^[a-zA-Z0-9\s]+$" class="form-control" title="Fullname can only contain letters and spaces" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email Address</label>
                                <input type="email" name = "email" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Username</label>
                                <input type="text" name = "username" pattern="^[a-zA-Z0-9\s]+$" class="form-control" title="This field cannot accept any special characters" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="text" name = "password" minlength="8" class="form-control" required>
                            </div>
                            <!-- <div class="form-group mb-4">
                                <label for="">Confirm Password</label>
                                <input type="text" name = "repassword" class="form-control">
                            </div> -->
                            <div class="form-group d-flex justify-content-center">
                                <button type = "submit" name = "register_btn" class = "btn btn-primary">SIGN UP</button>
                            </div>
                        </form>
                        <h6 style = "font-family:poppins; font-size: 0.8rem; text-align= center;">Back to  <a href="login.php">Sign in</a></h6>
                        </div>
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
    .container1 {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        padding: 70px;
}

@media (max-width: 992px) {
    .container1{
        padding: 30px;
    }
}


@media (max-width: 768px) {
  .prcLogo {
    display: none;
  }
  .container1 {
    display: block;
    align-items: initial;
    flex-wrap: nowrap;
    padding: 0;
  }
}

</style>


<?php include('includes/footer.php'); ?>
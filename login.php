<?php 
session_start();

if(isset($_SESSION['authenticated']))
{
    $_SESSION['status'] = "You are already logged in";
    header('Location: branches.php');
    exit(0);
}

$page_title = "Login Form";
include('includes/header.php');
include('includes/navbar.php'); 
?>

<div class="py-5">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="card shadow">
                    <div class="card-header">
                        <div class="d-flex justify-content-center pt-5">
                            <img src="images/prc-logo.png" alt="PRC" width="120" height="120" class="img-fluid max-size-image"></a>
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
                                <label class="labels" for="">Email Address</label>
                                <input type="text" class = "bubble-input" name = "text" class="form-control" required>
                                
                            </div>
                            <div class="form-group mb-3">
                                <label class="labels" for="">Password</label>
                                <input type="password" id="passwordInput" class = "bubble-input" minlength="8" name = "password" class="form-control" required>
                            </div>
                            <div class="form-group pb-4" style= "font-family:poppins;">
                            <input type="checkbox" id="showPasswordToggle">
                            <label class="form-check-label" for="showPasswordToggle">Show Password</label>
                            <a href="password-reset.php" class= float-end> Forgot Password?</a>
                            
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <button type = "submit" name = "login_btn" class = "btn btn-primary" aria-pressed="true">SIGN IN</button>
                            </div>
                        </form>

                        
                        <!-- <h6 style = "font-family:poppins; font-size: 0.8rem; text-align= center;">Create an account? <a href="register.php">Sign up</a></h6> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .form-check-label{
        font-family: "poppins";
        font-size: 0.8rem;
    }

    .labels{
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

    body {
        margin: 0;
        padding: 0;
        background: url('images/background.png') center/cover no-repeat;
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

        .card{
            border-radius: 20px;
        }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('passwordInput');
    const showPasswordToggle = document.getElementById('showPasswordToggle');

    showPasswordToggle.addEventListener('change', function() {
        if (this.checked) {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });
});
</script>


<?php include('includes/footer.php'); ?>
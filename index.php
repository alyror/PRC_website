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
include_once 'submit.php';
include('includes/navbar.php'); 
?>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="container d-flex justify-content-center align-items-center mx-auto" style="min-height: 60vh;">
                            <div class="text-center">
                                <img src="images/prc-logo.png" alt="PRC" width="150" height="150" class="img-fluid">
                                <p class="py-3 mb-0" style="font-family: poppins; font-size: 14px">
                                    Welcome to PRC Batangas! <br>
                                    Click the access website to continue.
                                </p>
                                <form action="login.php" method="POST" class="text-center" onsubmit="return validateForm();">
                                  <div class="g-recaptcha mx-auto" data-sitekey="6LcKX54nAAAAABJwWOcEj18569ue0RqMJAC6M8G5"></div>
                                  <button type="submit" class="btn btn-primary mt-3 px-4 py-2" name="btnLogin" id="loginButton">Access website</button>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Add this script within the <head> section or before the closing </body> tag -->
    <script>
        function validateForm() {
            var recaptchaResponse = grecaptcha.getResponse();
            
            if (recaptchaResponse.length === 0) {
                alert("Please complete the reCAPTCHA.");
                return false;
            }
            
            return true;
        }
    </script>

<?php include('includes/footer.php'); ?>
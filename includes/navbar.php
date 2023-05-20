<div class="a" style="background-color: #800020;">
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #800020;">
            <div class="container-fluid">

                <a class="navbar-brand" href="#"><img src="images/prc-logo.png" alt="PRC" width="60" height="60"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mx-auto mb-3 mb-lg-0">
                        <li class="nav-item col-md-5">
                            <a class="nav-link active" href="index.php" style ="font-family:poppins">Home</a>
                        </li>
                        <li class="nav-item col-lg-7">
                            <a class="nav-link " href="dashboard.php" style ="font-family:poppins">Dashboard</a>
                        </li>
                        <?php if(!isset($_SESSION['authenticated'])) : ?>
                        <li class="nav-item col-lg-7">
                            <a class="nav-link" href="register.php" style ="font-family:poppins">Register</a>
                        </li>
                        <li class="nav-item d-flex justify-content-end">
                            <a class="nav-link" href="login.php" style ="font-family:poppins">Login</a>
                        </li>
                        <?php endif ?>
                        
                        <?php if(isset($_SESSION['authenticated'])) : ?>
                        <div class="d-flex align-items-end flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php"><img src="images/logout-logo.png" alt="logout" width="20" height="20"></a>
                        </li></div>
                        <?php endif ?>
                    </ul>

                </div>
            </div>
            </nav>
        </div>
    </div>
</div>
</div>
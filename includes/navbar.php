<div class="header">
        <div class="container m-auto">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f2f2f2;">
                        <div class="container-fluid">
                            <div class="col-sm-1 logo">
                                <a class="navbar-brand" href="#"><img src="images/prc-logo.png" class="img-fluid" alt="PRC Logo"></a>
                            </div>
                            <div class="col-sm-4 containertext">
                                <div class="logo-text">
                                    PHILIPPINE RED CROSS
                                </div>
                                <div class="chapter-text">
                                    BATANGAS CHAPTER
                                </div>
                            </div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse pt-auto" id="navbarSupportedContent">
                                <ul class="navbar-nav mx-auto mb-3 mb-lg-0 p-auto">
                                    <?php
                                    $currentPage = basename($_SERVER['PHP_SELF']);
                                    if ($currentPage !== 'index.php') {
                                ?>
                                    <!-- <?php
                                            $currentPage = basename($_SERVER['PHP_SELF']);
                                            if ($currentPage !== 'login.php' && $currentPage !=='register.php' && $currentPage !=='branches.php' ) {
                                        ?>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="index.php" style="font-family:poppins">Home</a>
                                    </li>
                                    <?php } ?> -->
                                    <?php if ($currentPage === 'branches.php') { ?>                    
                                    <li class="nav-item">
                                        <a class="nav-link active" href="branches.php" style="font-family:poppins">Branches</a>
                                    </li>
                                    
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard.php" style="font-family:poppins">Dashboard</a>
                                    </li>

                                    <?php } else { ?>
                                            <li class="nav-item">
                                                <a class="nav-link" href="branches.php" style="font-family:poppins">Branches</a>
                                            </li><?php } ?>
                                    
                                    <?php if (!isset($_SESSION['authenticated'])) : ?>
                                        <?php if ($currentPage === 'login.php') { ?>
                                            <li class="nav-item ">
                                                <a class="nav-link active" href="login.php" style="font-family:poppins">Login</a>
                                            </li>
                                        <?php } else { ?>
                                            <li class="nav-item">
                                                <a class="nav-link" href="login.php" style="font-family:poppins">Login</a>
                                            </li><?php } ?>

                                        <!-- <?php if ($currentPage === 'register.php') { ?>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="register.php" style="font-family:poppins">Register</a>
                                            </li>
                                        <?php } else { ?>
                                            <li class="nav-item">
                                                <a class="nav-link" href="register.php" style="font-family:poppins">Register</a>
                                            </li><?php } ?> -->
                                        
                                    <?php endif ?>
                                    <?php if (isset($_SESSION['authenticated'])) : ?>
                                        <div class = "d-flex "><!-- justify-content-end -->
                                            <li class = "nav-item ml-auto">
                                                <a class = "nav-link" href="logout.php"><img src="images/logout-logo.png" alt="logout" width="20" height="20"></a>
                                            </li>
                                        </div>
                                    <?php endif ?>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

 <style>

.header {
    background-color: #f2f2f2;
    padding: 1px 5px;
    display: flex;
    align-items: center;
}

.navbar-brand img {
    max-width: 50px;
    height: auto;
    margin-right: 10px;
}

.logo-text {
    font-size: 15px;
    font-weight: bold;
    margin-bottom: 1px;
    color: #030154;
    font-family: "Poppins", sans-serif;
}

.chapter-text {
    font-size: 15px;
    font-weight: bold;
    color: #CF0006;
    font-family: "Poppins", sans-serif;
}

@media (max-width: 575.98px) {
        .navbar-brand img {
            max-width: 40px;
            margin-right: 5px;
        }

        .logo-text, .chapter-text {
            font-size: 12px;
        }
    }

    @media (min-width: 576px) and (max-width: 991.98px) {
        .logo img {
            max-width: 50px;
        }

        .logo-text, .chapter-text {
            font-size: 12px;
        }
    }
    .navbar-nav .nav-item .nav-link.active {
        border-bottom: 3px solid red;
    }
    
    .navbar-nav .nav-link {
      font-family: 'Poppins', sans-serif;
      font-weight: bold;
      padding: 0.5rem 1rem;
      margin-right: 30px; 
      font-size: 0.8rem;
    }

</style>

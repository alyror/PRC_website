<div class="header">
        <div class="container p-0 m-0">
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
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mx-auto mb-3 mb-lg-0">
                                    <?php
                                    $currentPage = basename($_SERVER['PHP_SELF']);
                                    if ($currentPage !== 'index.php') {
                                ?>
                                    <?php
                                            $currentPage = basename($_SERVER['PHP_SELF']);
                                            if ($currentPage !== 'login.php' && $currentPage !=='register.php') {
                                        ?>
                                    <li class="nav-item col-md-5">
                                        <a class="nav-link active" href="index.php" style="font-family:poppins">Home</a>
                                    </li>
                                    <?php } ?>
                                    <li class="nav-item col-lg-7">
                                        <a class="nav-link" href="dashboard.php" style="font-family:poppins">Dashboard</a>
                                    </li>
                                    <?php if (!isset($_SESSION['authenticated'])) : ?>
                                        <li class="nav-item col-lg-7">
                                            <a class="nav-link" href="register.php" style="font-family:poppins">Register</a>
                                        </li>
                                        <li class="nav-item col-lg-7">
                                            <a class="nav-link" href="login.php" style="font-family:poppins">Login</a>
                                        </li>
                                    <?php endif ?>
                                    <?php if (isset($_SESSION['authenticated'])) : ?>
                                        <div class="d-flex align-items-end flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="logout.php"><img src="images/logout-logo.png" alt="logout" width="20" height="20"></a>
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
    padding: 10px 20px;
    display: flex;
    align-items: center;
}

.navbar-brand img {
    max-width: 60px;
    height: auto;
    margin-right: 10px;
}

.logo-text {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 2px;
    color: #030154;
    font-family: "Poppins", sans-serif;
}

.chapter-text {
    font-size: 18px;
    font-weight: bold;
    color: #CF0006;
    font-family: "Poppins", sans-serif;
}


</style>

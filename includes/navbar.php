<div class="a" >
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-dark" >
            <div class="container-fluid">

                <a class="navbar-brand" href="#"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mx-1 mb-3 mb-lg-0 ">
                        <li class="nav-item col-md-5">
                            <a class="nav-link active text-white" href="index.php" style ="font-family:poppins font-weight:bold">Home</a>
                        </li>
                        <li class="nav-item col-lg-7">
                            <a class="nav-link text-white " href="dashboard.php" style ="font-family:poppins font-weight:bold">Dashboard</a>
                        </li>
                        <?php if(!isset($_SESSION['authenticated'])) : ?>
                        <li class="nav-item col-lg-7 ">
                            <a class="nav-link text-white" href="register.php" style ="font-family:poppins font-weight:bold">Register</a>
                        </li>
                        <li class="nav-item d-flex justify-content-end ">
                            <a class="nav-link text-white" href="login.php" style ="font-family:poppins  font-weight:bold">Login</a>
                        </li>
                        <?php endif ?>
                        
                        <?php if(isset($_SESSION['authenticated'])) : ?>
                        <div class="d-flex align-items-end flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="logout.php">Logout</a>
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

    
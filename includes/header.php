<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if(isset($page_title)){echo "$page_title";} ?> - Philippine Red Cross
    </title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

 

    
</head>


<body>

<<<<<<< HEAD
<!-- <header >
<div class="container p-0 m-0">
    <div class="row  d-flex flex-row ">
        <div class="col-sm-1 logo">
            <img src="images/prc-logo.png" class="img-fluid" alt="PRC Logo">
        </div>
        <div class="col-sm-4 containertext">
            <div class="logo-text">
                PHILIPPINE RED CROSS
            </div>
            <div class="chapter-text">
                BATANGAS CHAPTER
            </div>
        </div>

        <div class="col-sm-5">
        <nav class="navbar navbar-expand-lg navbar-dark" >
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mx-auto mb-3 mb-lg-0">
                        <li class="nav-item col-md-5">
                            <a class="nav-link active" href="index.php" style ="font-family:poppins;color:#030154">Home</a>
                        </li>
                        <li class="nav-item col-lg-7">
                            <a class="nav-link " href="dashboard.php" style ="font-family:poppins; color:#030154">Dashboard</a>
                        </li>
                        <?php if(!isset($_SESSION['authenticated'])) : ?>
                        <li class="nav-item col-lg-7">
                            <a class="nav-link" href="register.php" style ="font-family:poppins;color:#030154">Register</a>
                        </li>
                        <li class="nav-item d-flex justify-content-end">
                            <a class="nav-link" href="login.php" style ="font-family:poppins;color:#030154">Login</a>
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
  </header>

<style>
       header {
            background-color: #f2f2f2; /* Header background color */
            padding: 10px 20px; /* Adjust padding for top and bottom */
            display: flex; /* Use flexbox for layout */
            align-items: center; /* Center vertically */
        }
    
        .logo img {
            max-width: 60px; /* Adjust the max-width for the logo */
            height: auto; /* Maintain aspect ratio */
            margin-right: 10px; /* Add space between logo and text */
        }
     
        .logo-text {
            font-size: 18px; /* Adjust font size */
            font-weight: bold; /* Apply bold styling */
            margin-bottom: 2px; /* Add space between texts */
            color: #030154;
            font-family: "Poppins", sans-serif; 
        }
        .chapter-text {
            font-size: 18px; /* Adjust font size for chapter text */
            font-weight: bold;
            color: #CF0006;font-family: "Poppins", sans-serif; 
        }

    @media (max-width: 575.98px) {
        .logo img {
            max-width: 40px;
            margin-right: 5px;
        }

        .logo-text, .chapter-text {
            font-size: 16px;
        }
    }

    @media (min-width: 576px) and (max-width: 991.98px) {
        .logo img {
            max-width: 50px;
        }

        .logo-text, .chapter-text {
            font-size: 16px;
        }
    }

</style> -->

=======
>>>>>>> 1d7d3bb424314ed561e1826eefb9cc10f2660272


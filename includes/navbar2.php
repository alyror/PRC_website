<div class="header">
        <div class="container m-auto custom-container ">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f2f2f2;">
                        <div class="container-fluid header-container">
                            <div class="col-sm-1 logo">
                                <a class="navbar-brand" href="#"><img src="images/prc-logo.png" class="img-fluid" alt="PRC Logo"></a>
                            </div>
                            <div class="col-sm-3 container-text">
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
                            <div class="collapse navbar-collapse p-auto " id="navbarSupportedContent">
                             <ul class="navbar-nav">
                                <li class="nav-item active">
                                <a class="nav-link" href="#">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Transaction Logs</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Dispense Log</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Track</a>
                                </li>
                          
                                      
                                            <li class="nav-item">
                                                <a class="nav-link" href="logout.php"><img src="images/logout-logo.png" alt="logout" width="20" height="20"></a>
                                            </li>
                            
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
    padding: 10px 20px ;
  
    display: flex;
    align-items:center;

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

    .navbar-nav .nav-item.active .nav-link {
      border-bottom: 3px solid red;

    
    }
    .navbar-nav .nav-link {
      font-family: 'Poppins', sans-serif;
      font-weight: bold;
      padding: 0.5rem 1rem; /* Add padding to the links */
      margin-right: 30px; /* Add margin between the links */
    }



</style>

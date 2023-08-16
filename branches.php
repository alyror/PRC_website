<?php 
session_start();

if(isset($_SESSION['authenticated']))
{
    $_SESSION['status'] = "You are already logged in";
    header('Location: dashboard.php');
    exit(0);
}

$page_title = "branches";
include('includes/header.php');
include('includes/navbar.php'); 
?>
      <style>
  

    /* Additional Bootstrap classes */
    .card {
      background-color: white;
      padding: 20px;
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      margin: 10px;
    
    }
    
   
    .card-header {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
      background-color: #030154;
      color:white;
    }
    .btn{

   background-color: #030154;;
    }


    @media (max-width: 991px) {
      .parent {
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: auto;
      }
    }

    @media (max-width: 767px) {
    
      .parent {
        grid-template-columns: 1fr;
        grid-template-rows: auto;
      }

   
    }
  </style>

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="card  text-center">
				<h5 class="card-header">
					PRC Batangas
				</h5>
				<div class="card-body">
        <button class="btn btn-primary">Connect</button> <!-- Add the button element -->
				</div>
				
			</div>
			<div class="card text-center">
				<h5 class="card-header">
				PRC Lipa
				</h5>
				<div class="card-body">
        <button class="btn btn-primary">Connect</button> <!-- Add the button element -->
				</div>
			
			</div>
		</div>
		<div class="col-md-4">
			<div class="card text-center">
				<h5 class="card-header">
				PRC Nasugbu
				</h5>
				<div class="card-body">
        <button class="btn btn-primary">Connect</button> <!-- Add the button element -->
				</div>
			
			</div>
			<div class="card text-center">
				<h5 class="card-header">
		PRC Tanauan
				</h5>
				<div class="card-body">
        <button class="btn btn-primary">Connect</button> <!-- Add the button element -->
				</div>
			
			</div>
		</div>
		<div class="col-md-4">
			<div class="card text-center">
				<h5 class="card-header">
				
				</h5>
				<div class="card-body">
					tite
				</div>
			
			</div>
		</div>
	</div>
</div>
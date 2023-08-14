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
include('includes/navbar.php'); 
?>
 <div class="container mt-5">
  <div class="row">
    
    <div class="col-md-6 d-flex justify-content-center">
      <div class="card custom-card">
        <div class="card-header">
         
        </div>
        <div class="card-body">
          <h5 class="card-title">PRC Lipa</h5>
          <p class="card-text">.</p>
          <a href="#" class="btn btn-primary">Connect</a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card custom-card">
        <div class="card-header">
         
        </div>
        <div class="card-body">
          <h5 class="card-title">PRC Lipa</h5>
          <p class="card-text">.</p>
          <a href="#" class="btn btn-primary">Connect</a>
        </div>
      </div>
    </div>





  </div>
</div>  
 






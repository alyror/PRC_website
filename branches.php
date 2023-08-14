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
      <style>
    /* Your custom grid CSS */
    .parent {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: repeat(2, 1fr);
      grid-column-gap: 0px;
      grid-row-gap: 0px;
    }

    .div1 { grid-area: 1 / 1 / 2/ 2; }
    .div2 { grid-area: 1 / 2 / 2 / 3; }
    .div3 { grid-area: 2 / 1 / 3 / 2; }
    .div4 { grid-area: 2 / 2 / 3 / 3; }
    .div5 { grid-area: 1 / 3 / 3 / 4; }

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
  </style>
  <title>Card Layout</title>
</head>
<body>
<div class="container">
  <div class="parent">
    <div class="div1 card text-center rounded">
      <div class="card-header">
        PRC Batangas
      </div>
      <div class="card-body">
        <button class="btn btn-primary mt-3">Connect</button>
      </div>
    </div>
    <div class="div2 card text-center rounded">
      <div class="card-header">
        PRC Lipa
      </div>
      <div class="card-body">
        <button class="btn btn-primary mt-3">Connect</button>
      </div>
    </div>
    <div class="div3 card text-center rounded">
      <div class="card-header">
        PRC Nasugbu
      </div>
      <div class="card-body">
        <button class="btn btn-primary mt-3">Connect</button>
      </div>
    </div>
    <div class="div4 card text-center rounded">
      <div class="card-header">
        PRC Tanauan
      </div>
      <div class="card-body">
        <button class="btn btn-primary mt-3">Connect</button>
      </div>
    </div>
    <div class="div5 card text-center rounded">
      <div class="card-header">
   


      </div>
      <div class="card-body">
      <img src = "images/prc-logo.png">
      </div>
    </div>
  </div>
</div>

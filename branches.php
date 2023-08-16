<?php 
$page_title = "branches";
include('authentication.php');
include('includes/header.php');
include('includes/navbar.php'); 
?>

<div class="background-overlay"></div>
<?php
  if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-success">
                                <h9><?= $_SESSION['status']; ?></h9>
                            </div>
                            <?php
                            unset($_SESSION['status']);
                        }
                    ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="card text-center">
				<h5 class="card-header">
					PRC Batangas
				</h5>
				<div class="card-body">
        <button class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Connect</button> 
				</div>
			</div>
			<div class="card text-center">
				<h5 class="card-header">
				PRC Lipa
				</h5>
				<div class="card-body">
        <button class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Connect</button> 
				</div>
			
			</div>
		</div>
		<div class="col-md-4">
			<div class="card text-center">
				<h5 class="card-header">
				PRC Nasugbu
				</h5>
				<div class="card-body">
        <button class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Connect</button> 
				</div>
			
			</div>
			<div class="card text-center">
				<h5 class="card-header">
		PRC Tanauan
				</h5>
				<div class="card-body">
        <button class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Connect</button> 
				</div>
			
			</div>
		</div>
		<div class="col-md-4">
			<div class="card text-center">
				<h5 class="card-header">
				
				</h5>
				<div class="card-body">
					Philippine Red Cross
					</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter your username">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>

<style>
	.background-overlay {
		background: url('images/background.png') center/cover no-repeat;
        position: fixed;
        top: auto;
        left: 0;
        width: 100%;
        height: 100%;
		opacity: 0.5;
    }
    .card {
      background-color: white;
      padding: 20px;
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      margin: 10px;
	  border-radius: 50px;
    
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <?php include('includes/footer.php'); ?>
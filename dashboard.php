<?php 
$page_title = "Dashboard Page";
include('authentication.php');
include('includes/header.php');
include('includes/navbar.php'); 
?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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

                <div class="card">
                    <div class="card-header">
                        <h4>Dashboard</h4>
                    </div>
                    <div class="card-body">
                        <h2>Welcome to Philippine Red Cross</h2>
                        <h4>Batangas Chapter</h4>
                        <hr>
                        <h8>Username: <?= $_SESSION['auth_user']['username']; ?></h8>
                        <br>
                        <h8>Email Address: <?= $_SESSION['auth_user']['email']; ?></h8>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
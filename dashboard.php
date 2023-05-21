<style>
    h1,h2,h3,h4,h5,h6{
        font-family: "poppins";
        text-align: center;
    }
    .h8{
        font-family: "poppins";
        text-align: center;


    }



</style>



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
                    <h2>Welcome to Philippine Red Cross</h2>
                    <h4>Batangas Chapter</h4>
                    </div>
                    <div class="card-body">
                        <p class = "h8">Hello! <?= $_SESSION['auth_user']['username']; ?> Do you want to learn more about your blood type compatibility?</h8>
                        <br>
                        <!-- <h8 class = "h8">Email Address: <?= $_SESSION['auth_user']['email']; ?></h8> -->
                        <hr>
                        <h2>Different types of bloods</h2>
                        <img src="images/bloodtype.jpg" class="rounded mx-auto d-block" width = "799" height = "193" usemap="#image_map">
                        <map name="image_map">
                        <area alt="bloodtype-AB" title="bloodtype-AB" href="https://www.redcrossblood.org/donate-blood/blood-types/ab-blood-type.html" coords="138,104,88" shape="circle">
                        <area alt="bloodtype-B" title="bloodtype-B" href="https://www.redcrossblood.org/donate-blood/blood-types/b-blood-type.html" coords="311,104,83" shape="circle">
                        <area alt="bloodtype-A" title="bloodtype-A" href="https://www.redcrossblood.org/donate-blood/blood-types/a-blood-type.html" coords="489,104,88" shape="circle">
                        <area alt="bloodtype-O" title="bloodtype-O" href="https://www.redcrossblood.org/donate-blood/blood-types/o-blood-type.html" coords="663,104,84" shape="circle">
                        </map>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>

<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "135798353938391");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v16.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
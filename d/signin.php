<?php
session_start();
require_once("../function/controllers/include.php");
require_once("../function/controllers/constant.php");
form();
$uri=25;
include_once 'dbconnect.php';

?>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="favicon.ico">

<div class="row slider-text align-items-center justify-content-center">
        <div class="col-lg-12 text-center col-sm-12">
          <div class="login-page">
  <div class="form">
    
    <form class="login-form" method="POST" action="login.php">
      <div class="row">
      <?php
        if(isset($_SESSION['error'])){
          echo
          "
          <div class='alert alert-danger text-center'>
            <button class='close'>&times;</button>
            ".$_SESSION['error']."
          </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo
          "
          <div class='alert alert-success text-center'>
            <button class='close'>&times;</button>
            ".$_SESSION['success']."
          </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      </div>
       <strong> Accounts || Sign In</strong><br>
      <input type="text" name="email" placeholder="Email"/>
      <input type="password" name="password" placeholder="password"/>
      <button name="login">login</button>
      <p class="message">Not registered? <a href="<?php echo'signup.php?mode=users/accounts/register='.md5($uri); ?>" >Sign Up</a></p>
    </form>
  </div>
</div>
</div>
</div>
<script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../jquery.fancybox.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/main.js"></script>
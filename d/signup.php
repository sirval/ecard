<?php
session_start();
require_once("../function/controllers/include.php");
require_once("../function/controllers/constant.php");
form();
$uri=25;

 if (isset($_GET['error_id']) && $_GET['error_id'] !=='') 
{
        $errmsg = $_GET['error_id'];
        $msgerror ='';
        $msgsucc = '';
        if ($errmsg == '1') {
            $msgerror ='Name field must not be empty or less than 4';
        
        }
        elseif ($errmsg == '2') {
            $msgerror ='Only letters and white space are allowed in name field';
        }
        
        elseif ($errmsg == '3') {
            $msgerror = 'Email field cannot be empty';
          }
          elseif ($errmsg == '4') {
            $msgerror = 'Invalid email format';
          }
         
          elseif ($errmsg == '5') {
            $msgerror = 'School or College name cannot be empty or less than 4';
  
          }
          elseif ($errmsg == '6') {
            $msgerror ='Please Password must be 4 characters above';
          }
          elseif ($errmsg == '7') {
            $msgerror ='Confirmation Password must not be empty';
      
          }
           elseif ($errmsg == '8') {
            $msgerror ='Confirmation Password is not matching';
      
          }
          elseif ($errmsg == '9') {
            $msgerror ='Oops! Email and Password already exist.'; 
    
          }
           elseif ($errmsg == '10') {
            $msgerror ='Something went wrong while trying to process your data. Please retry later.'; 
    
          }

            if (isset($_GET['succ_id']) && $_GET['succ_id'] =='0')
            {
              $msgsucc ='Registration Successful!';
            }
}
?>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="favicon.ico">

<div class="row slider-text align-items-center justify-content-center">
        <div class="col-lg-12 text-center col-sm-12">
          <div class="row">
      
      </div>
          <div class="login-page">
  <div class="form">
    <div class="row">
      <?php
        if (isset($_GET['$userinfor']) && $_GET['$userinfor'] !=='') {
           $message = $_GET['$userinfor'];
           echo "$message";
        }
            if (isset($errmsg) && $errmsg !=='') {
              ?>
                  <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                    </button>
                    <?php echo $msgerror; ?>
                  </div>
              <?php
            }
            elseif (isset($msgsucc) && $msgsucc !=='') 
            {
        ?>
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
            </button>
                <?php echo $msgsucc; ?></div>
        <?php
            }
         ?>
                                     
      
      </div>
    <form class="login-form" method="POST" action="register.php">
       <strong> Accounts || Sign Up</strong><br>
      <input type="text" name="name" id="name" placeholder="Name"/>
      <input type="text" name="college" placeholder="School or College name"/>
      <input type="text" name="email" placeholder="Email"/>
      <input type="password" name="password" placeholder="Password"/>
      <input type="password" name="cpassword" placeholder="Compare Password"/>
      
      <button name="reg">Register</button>
      <p class="message">Registered Already? <a href="<?php echo 'signin.php?mode=users/accounts/login='.md5($uri); ?>">Sign In</a></p>
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
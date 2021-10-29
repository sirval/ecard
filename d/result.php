<?php
require_once("../function/controllers/constant.php");

include_once 'dbconnect.php';
$uri=45;
$var1 = $_SERVER['REQUEST_URI'];
if(strlen($var1) < 25){
?>
      <script type="text/javascript">
          window.location.href="http://localhost/ecard/";
      </script>
      <script language="javascript">
        function printpage()
            {
                window.print();
            }
        </script>

<?php
    }
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>eCard || Home </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <link rel="stylesheet" href="../assets/css/slick/slick.css"> 
        <link rel="stylesheet" href="../assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/iconfont.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/magnific-popup.css">
        <link rel="stylesheet" href="../assets/css/bootsnav.css">

        <!-- xsslider slider css -->


        <!--<link rel="stylesheet" href="assets/css/xsslider.css">-->




        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="../assets/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="../assets/css/responsive.css" />

        <script src="../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <div class="navbar-top bg-grey fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="navbar-callus text-left sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-phone"></i>Call: +234 9095639302</a></li>
                                        <li><a href=""><i class="fa fa-envelope-o"></i> Contact us: ecard@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="navbar-socail text-right sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href=""><i class="fa fa-behance"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

                <div class="container"> 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="<?php BASE_URL ?>"><strong>eCard Easier</strong>
                            <img src="assets/images/logo.png" class="logo" alt="">
                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo 'http://localhost/ecard/' ?>">Home</a></li>                    
                            <li>
                                <div class="home_btns m-top-10 text-rights">
                                    <a style="color: #000000;" class="btn btn-primary m-top-5" href="<?php $uri=40; echo 'index.php?mode=multiple_view+id='.md5($uri); ?>">Back</a>
                                    <a style="color: #000000;" class="btn btn-default m-top-5" href="<?php  echo 'signin.php?mode=multiple_view+id='.md5($uri); ?>">Logout</a>
                                </div>
                            </li>
                            
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

            </nav>
        </div><br><br><br><br><br><br><br><br><br>

        
    </head>
   <style>
   #card{
	   float:left;
	   width:360px;
	   height:230px;
	   margin:5px;
	   border:1px solid black;
	   background-image: url("images/id_temp.jpg");
	   background-repeat: no-repeat;
	   background-size: 360px 230px;
	   -webkit-print-color-adjust: exact;
   }
   #c_left{
	   margin-top:65px;
	   margin-left:5px;
	   float:left;
	   width:80px;
	   height:120px;

	   
   }
   #c_box{
	  width:80px; 
	  height:20px;
	  padding:5px;

   }
  #c_right{
	   
	   margin-left:100px;
	   width:220px;
	   height:200px;

   }
   td{
	   font-size:12px;
   }

   </style>

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript">
            function generateBarCode()
            {
                var cus_mobile = $('#code').val();
                var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + cus_mobile + '&amp;size=50x50';
                $('#barcode').attr('src', url);
            }
        </script>
   <?php

       $i=0;
		$get_costumers="SELECT * FROM customer ORDER BY 1 ASC;";
		
		$run_costumers=mysqli_query($con, $get_costumers);
		
		while ($row_costumers=mysqli_fetch_array($run_costumers)){
			
			
			$st_id = $row_costumers['customer_id'];
			$img = $row_costumers['profile'];
			$st_name = $row_costumers['name'];
			$f_name = $row_costumers['f_name'];
			$m_name = $row_costumers['m_name'];
			$mob = $row_costumers['mobile'];
			$level = $row_costumers['level'];
			$st_id = $row_costumers['u_id'];
			$category  = $row_costumers['category'];
			$sex  = $row_costumers['sex'];
			$dept = $row_costumers['dept'];
			$confirm = $row_costumers['d_confirm'];
			$Issued = $row_costumers['issued_date'];
			$exp = $row_costumers['exp_date'];
			
			$i++;
		
		?>
   
   
   
     <body>
        
	 <div id="card">
	  <div id="c_left">
	  <img src="student_images/<?php echo $img; ?>"width="80px"height="100px"style="border:1px solid black;"><br>

	  <div id="c_box">
	   <?php echo $level; ?>
	  </div>
	  </div>
	  <div id="c_right">
	  
	  <div style="margin-top:2px;margin-left:160px;color:#000;font-weight: bolder; font-size: 20px"><?php echo $category; ?>  <br></div>

	  <table style="margin-top:40px;">
	  <tr>
	  <td><b>Surname</b> <?php echo $st_name; ?></td>
	  </tr>
	  <tr>
	  <td><b>Othername</b> <?php echo $f_name." " ."." .$m_name; ?> <br> <b>Sex: </b> <?php echo $sex; ?></td>
	  </tr>
	  
	  <tr>
	  <td><b>Phone No</b> <?php echo $mob; ?></b></td>
	  </tr>
	  <tr>
	  <td><b>Issued</b> <?php echo $Issued; ?><b>
	   Expire </b><?php echo $exp; ?></td>
	  </tr>
	  <tr>
	  	<td><b>Reg No</b> <?php echo $Issued."/".$level.'/' . $st_id .'/'. $dept; ?>  </td>
        
        
	  </tr>
	  <tr>
	  	<td style="font-size: 15px; font-weight: bolder;"><?php echo $confirm; ?></td>
	  </tr>
	  <tr>
	  	<td>
	  		<input style="display: none; " id="code" type="text" 
            value="<?php echo($mob) ?>" style="Width:20%"
            onsubmit ='generateBarCode();' /> 

      <img style="margin-left: 170px; margin-top: -185px" id='barcode' 
            src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo 'This Card belongs to ' .$f_name." " .".". $m_name.$mob; ?>&amp;size=100x100" 
            alt="<?php echo($mob); ?>" 
            title="<?php echo $st_name." " . $f_name." " . $m_name; ?>" 
            width="80" 
            height="80" readonly />
            </td>
            
	  
	  </table>
	  <div id="c_left"></div>
	  </div>
      <tr>
   
	   <div style="margin-top:10px;margin-left:50px;color:#fff;font-size:12px;"> AKANU IBIAM FED. POLY </div>
	 </div>
	 <?php } ?>
	 	 <script src="../assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="../assets/js/vendor/bootstrap.min.js"></script>

        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/jquery.magnific-popup.js"></script>
        <script src="../assets/js/jquery.easing.1.3.js"></script>
        <script src="../assets/css/slick/slick.js"></script>
        <script src="../assets/css/slick/slick.min.js"></script>
        <script src="../assets/js/jquery.collapse.js"></script>
        <script src="../assets/js/bootsnav.js"></script>



        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>

	 </body>
   </head>
</html

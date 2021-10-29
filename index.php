<?php
require_once("function/controllers/include.php");
require_once("function/controllers/constant.php");
$uri=20;

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


        <link rel="stylesheet" href="assets/css/slick/slick.css"> 
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">

        <!-- xsslider slider css -->


        <!--<link rel="stylesheet" href="assets/css/xsslider.css">-->




        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
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

                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->


                <div class="container"> 
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div> 

                    <!-- Start Header Navigation -->
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
                            <li><a href="<?php BASE_URL ?>">Home</a></li>                    
                            <li>
                                <div class="home_btns m-top-10 text-rights">
                                    <a style="color: #000000;" class="btn btn-primary m-top-5" href="<?php echo 'd/signin.php?mode=users/accounts/login='.md5($uri); ?>">Sign In</a>
                                    <a style="color: #000000;" class="btn btn-default m-top-5" href="<?php echo'd/signup.php?mode=users/accounts/register='.md5($uri); ?>">Sign Up</a>
                                </div>
                            </li>
                            
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

            </nav>

            <!--Home Sections-->

            <section id="home" class="home bg-black fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="col-md-12">
                                <div class="hello_slid">
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">Welcome to eCard Easier Made</h2>
                                            <h1 class="text-white">We help you create both Students and Staff ID Cards at Ease...</h1>
                                            <h3 class="text-white">- We Create a <strong>Concept</strong> into The Market -</h3>
                                        </div>

                                        <div class="home_btns m-top-40">
                                            <a href="<?php BASE_URL?>d/signin.php" class="btn btn-primary m-top-20">Get Started</a>
                                            <a href="<?php BASE_URL?>d/signup.php" class="btn btn-default m-top-20">Take a Tour</a>
                                        </div>
                                    </div><!-- End off slid item -->
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">Create Staff and Students ID Card at Ease...</h2>
                                            <h1 class="text-white">We got all it takes</h1>
                                            <h3 class="text-white">- We Create a <strong>Concept</strong> into The Market -</h3>
                                        </div>

                                        <div class="home_btns m-top-40">
                                            <a href="<?php BASE_URL?>d/signin.php" class="btn btn-primary m-top-20">Get Started</a>
                                            <a href="<?php BASE_URL?>d/signup.php" class="btn btn-default m-top-20">Take a Tour</a>
                                        </div>
                                    </div>
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">We help you keep records of all your ID Card</h2>
                                            <h1 class="text-white">We also Authenticate your ID Card to avoid fakes</h1>
                                            <h3 class="text-white">- We Create a <strong>Concept</strong> into The Market -</h3>
                                        </div>

                                        <div class="home_btns m-top-40">
                                            <a href="<?php BASE_URL?>d/signin.php" class="btn btn-primary m-top-20">Get Started</a>
                                            <a href="<?php BASE_URL?>d/signup.php" class="btn btn-default m-top-20">Take a Tour</a>
                                        </div>
                                    </div><!-- End off slid item -->
                                </div>
                            </div>
                        
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->



            <!--Featured Section-->
            <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        <div class="main_features fix roomy-70">
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-thumbs-o-up"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Best Quality Design</h3>
                                        <p>We generate ID cards with professional touch and concept.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-book"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Accurate Record Keepping</h3>
                                        <p>All generated ID cards are kept to make sure that you have 24/7 access to your ID cards</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>ID Card Authentication</h3>
                                        <p>We make sure we get rid of card falsification using Bar Codes attached to users email address</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->

            <!--product section-->
            <section id="product" class="product">
                <div class="container">
                    <div class="main_product roomy-80">
                        <div class="head_title text-center fix">
                            <h2 class="text-uppercase">What Client Say</h2>
                            <h5>Clean and Modern ID Card design is our best specialist</h5>
                        </div>

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/work-img1.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/work-img1.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>ID CARD CREAION/AUTHENTICATION</h5>
                                                        <h6>- Student/Staff ID Cards</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/work-img2.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/work-img2.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>ID CARD CREAION/AUTHENTICATION</h5>
                                                        <h6>- Student/Staff ID Cards</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/work-img3.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/work-img3.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                       <h5>ID CARD CREAION/AUTHENTICATION</h5>
                                                        <h6>- Student/Staff ID Cards</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/work-img4.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/work-img4.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                       <h5>ID CARD CREAION/AUTHENTICATION</h5>
                                                        <h6>- Student/Staff ID Cards</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/work-img1.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/work-img1.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>ID CARD CREAION/AUTHENTICATION</h5>
                                                        <h6>- Student/Staff ID Cards</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/work-img2.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/work-img2.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>ID CARD CREAION/AUTHENTICATION</h5>
                                                        <h6>- Student/Staff ID Cards</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/work-img3.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/work-img3.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>ID CARD CREAION/AUTHENTICATION</h5>
                                                        <h6>- Student/Staff ID Cards</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/work-img4.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/work-img4.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>ID CARD CREAION/AUTHENTICATION</h5>
                                                        <h6>- Student/Staff ID Cards</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/work-img1.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/work-img1.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>ID CARD CREAION/AUTHENTICATION</h5>
                                                        <h6>- Student/Staff ID Cards</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/work-img2.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/work-img2.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>ID CARD CREAION/AUTHENTICATION</h5>
                                                        <h6>- Student/Staff ID Cards</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/work-img3.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/work-img3.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>ID CARD CREAION/AUTHENTICATION</h5>
                                                        <h6>- Student/Staff ID Cards</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/work-img4.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/work-img4.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>ID CARD CREAION/AUTHENTICATION</h5>
                                                        <h6>- Student/Staff ID Cards</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>

                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Product section -->



            <!--Test section-->
            <section id="test" class="test bg-grey roomy-60 fix">
                <div class="container">
                    <div class="row">                        
                        <div class="main_test fix">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="head_title text-center fix">
                                    <h2 class="text-uppercase">Additional Quotes by Our Client Say</h2>
                                    <h5>Clean and Modern design is our best specialist</h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="test_item fix">
                                    <div class="item_img">
                                        <img class="img-circle" src="assets/images/test-img1.jpg" alt="" />
                                        <i class="fa fa-quote-left"></i>
                                    </div>

                                    <div class="item_text">
                                        <h5>Sarah Smith</h5>
                                        <h6>sarahsmith@gmail.com</h6>

                                        <p>Using this app in my school is the best thing that has ever happened to my school. The Id Card generated using Card Easier Made is superb with profesional touch.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="test_item fix sm-m-top-30">
                                    <div class="item_img">
                                        <img class="img-circle" src="assets/images/test-img2.jpg" alt="" />
                                        <i class="fa fa-quote-left"></i>
                                    </div>

                                    <div class="item_text">
                                        <h5>Okeke Chinedu</h5>
                                        <h6>Harvestinternationalschool@gmail.com</h6>

                                        <p>These app is cool, I waisted resources in designing ID cards but now I just use this site to design all my staff and students ID cards at ease.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off test section -->


            <!--Brand Section-->
            <section id="brand" class="brand fix roomy-80">
                <div class="container">
                    <div class="row">
                        <div class="main_brand text-center">
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/cbrand-img1.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/cbrand-img2.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/cbrand-img3.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/cbrand-img4.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/cbrand-img5.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/cbrand-img6.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off Brand section -->


            <!--Call to  action section-->
            <section id="action" class="action bg-primary roomy-40">
                <div class="container">
                    <div class="row">
                        <div class="maine_action">
                            <div class="col-md-8">
                                <div class="action_item text-center">
                                    <h2 class="text-white text-uppercase">Get 15% Allowance of all your ID Cards Created Here</h2>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="action_btn text-left sm-text-center">
                                    <a href="<?php echo 'd/signin.php?mode=user/accounts/login='.md5($uri); ?>" class="btn btn-default">Create Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




            <footer id="contact" class="footer action-lage bg-black p-top-80">
                <!--<div class="action-lage"></div>-->
                <div class="container">
                    <div class="row">
                        <div class="widget_area">
                            <div class="col-md-3">
                                <div class="widget_item widget_about">
                                    <h5 class="text-white">About Us</h5>
                                    <p class="m-top-20">We Help you create ID cards with Bar Code, Authenticate and Keep proper records of all your Id cards.</p>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Location</h6>
                                            <p>
                                                Department of Computer Science, Akanu Ibiam Federal Polytechnic Unwana, Ebonyi State, Nigeria</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-phone"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Phone :</h6>
                                            <p>+234 9095 6393 02</p>
                                            <p>+234 8082 6467 18</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Email Address :</h6>
                                            <p>ecard@gmail.com</p>
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_latest sm-m-top-50">
                                    <h5 class="text-white">Latest News</h5>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="item_icon"><img src="assets/images/ltst-img-1.jpg" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                            <p>We've added bar code to our professional ID cards</p>
                                            <a href="">2<sup>nd</sup> Nov. 2019</a>
                                        </div>
                                    </div>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="item_icon"><img src="assets/images/ltst-img-2.jpg" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                            <p>We've added colours that're even visible to people with eye problem</p>
                                            <a href="">21<sup>th</sup> Nov 2019</a>
                                        </div>
                                    </div>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="item_icon"><img src="assets/images/ltst-img-3.jpg" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                            <p>Our system can be used even with mobile phones at maintains a perfect look.</p>
                                            <a href="">21<sup>th</sup> Nov 2019</a>
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_service sm-m-top-50">
                                    <h5 class="text-white">Latest News</h5>
                                    <ul class="m-top-20">
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Web Design</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> User Interface Design</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> E- Commerce</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Web Hosting</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Themes</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Support Forums</a></li>
                                    </ul>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_newsletter sm-m-top-50">
                                    <h5 class="text-white">Newsletter</h5>
                                    <form class="form-inline m-top-30">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter you Email">
                                            <button type="submit" class="btn text-center"><i class="fa fa-arrow-right"></i></button>
                                        </div>

                                    </form>
                                    <div class="widget_brand m-top-40">
                                        <a class="navbar-brand" href="<?php BASE_URL ?>"><strong>eCard Easier</strong>
                            <img src="assets/images/logo.png" class="logo" alt="">
                                        
                                    </a>
                                </div>
                                <!-- End off widget item -->
                            </div><!-- End off col-md-3 -->
                        </div>
                    </div>
                </div>
                <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                    <div class="col-md-12">
                        <p class="wow fadeInRight" data-wow-duration="1s">
                            Card Easier Made Designed By
                             
                            <a target="_blank" href="https://fb.com/ohuka.ikennavalentine">Onuigbo Priscilla Ogochukwu</a> 
                            2019. All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>
                
    </div>
</section>
</div>

<!-- JS includes -->

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/css/slick/slick.js"></script>
        <script src="assets/css/slick/slick.min.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>



        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
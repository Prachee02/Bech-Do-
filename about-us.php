<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from templatecycle.com/demo/bootclassified-6/dist/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:07:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title>Buy, Sell or Exchange anything at BECH DO!</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">


    <link href="assets/css/style.css" rel="stylesheet">

    <!-- styles needed for carousel slider -->
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

    <!-- bxSlider CSS file -->
    <link href="assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet"/>

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->
    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="assets/js/pace.min.js"></script>
    <script src="assets/plugins/modernizr/modernizr-custom.js"></script>


</head>
<body>
<div id="wrapper">
        <div class="header">
            <nav class="navbar  fixed-top navbar-site navbar-light bg-light navbar-expand-md"
                 role="navigation">
                <div class="container">

                    <div class="navbar-identity">


                        <a href="index.html" class="navbar-brand logo logo-title">
        			<span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo"></i>
        			</span>BECH<span>DO!!! </span> </a>

                        <button class="navbar-toggler -toggler pull-right" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30"
                                 focusable="false"><title>Menu</title>
                                <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10"
                                      d="M4 7h22M4 15h22M4 23h22"/>
                            </svg>
                        </button>


                        

                    </div>


                    <div class="navbar-collapse collapse" id="navbarsDefault">
                        <ul class="nav navbar-nav me-md-auto navbar-left">
                            
                        </ul>
                        <ul class="nav navbar-nav ml-auto navbar-right">
                            <li class="nav-item"><a href="category.php" class="nav-link"><i class="icon-th-thumb"></i> All Ads</a>
                            </li>
                            <li class="dropdown no-arrow nav-item"><a href="#" class="nav-link dropdown-toggle" href="#"
                                                                      id="dropdown-nav-01" data-bs-toggle="dropdown"
                                                                      aria-expanded="false">

																	  <span>  
																		<?php 
																		  if (isset($_SESSION['sess_uid'])==true){
																			echo $fname;
																		  }
																		  else{
																			echo "Login/Register";
																		  }
																		?>
																		 </span> <i class="icon-user fa"></i> <i class=" icon-down-open-big fa"></i></a>
																		<ul
																				class="dropdown-menu user-menu dropdown-menu-right" aria-labelledby="dropdown01">
											
											
																				<?php 
																		  if (isset($_SESSION['sess_uid'])==true){?>
																			<li class="active dropdown-item"><a href="account-home.html"><i class="icon-home"></i>
																			Personal Home
																			</a>
																			</li>
																			<?php
																		  }
																		  else{ ?>
																			  <li class="active dropdown-item"><a href="login.php"><i class="icon-left-open-big"></i>Login</a>
																			  </li>
																			  <?php
																			  }?>
																		
																		<?php 
																		  if (isset($_SESSION['sess_uid'])==true){?>
																			<li class="dropdown-item"><a href="account-myads.html"><i class="icon-th-thumb"></i> My ads
																			</a>
																			</li>
																			<?php
																		  }
																		  else{ ?>
																			  <li class="active dropdown-item"><a href="signup.php"><i class="icon-left-open-big"></i>Register</a>
																			  </li>
																			  <?php
																			  }?>
											
											
																		 <?php 
																		  if (isset($_SESSION['sess_uid'])==true){?>
																			<li class="dropdown-item"><a href="account-favourite-ads.html"><i class="icon-heart"></i>
																				Favourite ads </a>
																			</li>
																			<?php
																		  }
																		  else{ 
											
																			  }?>
																		 
																		 
											
																			<?php 
																		  if (isset($_SESSION['sess_uid'])==true){?>
																			<li class="dropdown-item"><a href="logout.php"><i class=" icon-logout "></i> Log out </a>
																			</li>
																			<?php
																		  }
																		  else{ 
											
																			  }?>
																			
																		</ul>
																	</li>
																	<li class="postadd nav-item"><a class="btn btn-block   btn-border btn-post btn-danger nav-link"
																									href="post-ads.php">Post Free Ad</a>
                            </li>
                            
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
        <!-- /.header -->

       


    <div class="intro-inner">
        <div class="about-intro" style="
    background:url(images/bg2.jpg) no-repeat center;
	background-size:cover;">
            <div class="dtable hw100">
                <div class="dtable-cell hw100">
                    <div class="container text-center">
                        <h1 class="intro-title animated fadeInDown"> Building a customer focus </h1>
                    </div>
                </div>
            </div>
        </div>
        <!--/.about-intro -->

    </div>
    <!-- /.intro-inner -->

    <div class="main-container inner-page">
        <div class="container">
            <div class="section-content">
                <div class="row ">
                    <div class="col-xl-12">
                        <h1 class="text-center title-1"> What Makes Us Special </h1>
                        <hr class="center-block small text-hr">
                    </div>

                    <div class="col-sm-6">
                        <div class="text-content has-lead-para text-left">
                            <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                consectetur sit amet ante nec vulputate. Nulla aliquam, justo auctor consequat
                                tincidunt, arcu erat mattis lorem, lacinia lacinia dui enim at eros. Pellentesque ut
                                gravida augue. Duis ac dictum tellus </p>

                            <p class="lead"> Pellentesque in mauris placerat, porttitor lorem id, ornare nisl.
                                Pellentesque rhoncus convallis felis, in egestas libero. Donec et nibh dapibus, sodales
                                nisi quis, fringilla augue. Donec dui quam, egestas in varius ut, tincidunt quis ipsum.
                                Nulla nec odio eu nisi imperdiet dictum. </p>

                            <p class="lead"> Curabitur sed leo dictum, convallis lorem eu, suscipit mi. Mauris viverra
                                blandit varius. Proin non sem turpis. Etiam fringilla hendrerit nunc at accumsan. Duis
                                mollis auctor lobortis. </p>

                            <p class="lead"> Etiam elementum nulla non erat blandit, sed porttitor urna malesuada. Cras
                                euismod a nulla sed ornare. Vestibulum id molestie nulla. Phasellus sodales, sapien
                                vitae auctor rhoncus </p>
                        </div>
                    </div>
                    <div class="col-sm-6"><img src="images/info.png" alt="imfo" class="img-responsive"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.main-container -->
    <div class="parallaxbox about-parallax-bottom">
        <div class="container">
            <div class="row text-center featuredbox">
                <div class="col-sm-4 xs-gap">
                    <div class="inner">
                        <div class="icon-box-wrap"><i class="icon-book-open ln-shadow-box shape-3"></i></div>
                        <h3 class="title-4">Customer service</h3>

                        <p>Ein herausragendes Beispiel für Story-Telling im modernen Webdesign. et suscipit sapien
                            posuere quis. Maecenas ut iaculis nunc, eget efficitur ipsum. Nam vitae hendrerit
                            tortor.</p>
                    </div>
                </div>
                <div class="col-sm-4 xs-gap">
                    <div class="inner">
                        <div class="icon-box-wrap"><i class=" icon-lightbulb ln-shadow-box shape-6"></i></div>
                        <h3 class="title-4">Seller satisfaction</h3>

                        <p>Ein herausragendes Beispiel für Story-Telling im modernen Webdesign. et suscipit sapien
                            posuere quis. Maecenas ut iaculis nunc, eget efficitur ipsum. Nam vitae hendrerit tortor.
                            .</p>
                    </div>
                </div>
                <div class="col-sm-4 xs-gap">
                    <div class="inner">
                        <div class="icon-box-wrap"><i class="icon-megaphone ln-shadow-box shape-5"></i></div>
                        <h3 class="title-4">Best Offers </h3>

                        <p>Ein herausragendes Beispiel für Story-Telling im modernen Webdesign. et suscipit sapien
                            posuere quis. Maecenas ut iaculis nunc, eget efficitur ipsum. Nam vitae hendrerit
                            tortor. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
    	<div class="footer-content">
    		<div class="container">
    			<div class="row">

    				<div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
    					<div class="footer-col">
    						<h4 class="footer-title">About us</h4>
    						<ul class="list-unstyled footer-nav">
    							<li><a href="#">About Company</a></li>
    							<li><a href="#">For Business</a></li>
    							<li><a href="#">Our Partners</a></li>
    							<li><a href="#">Press Contact</a></li>
    							<li><a href="#">Careers</a></li>
    							<li><a href="event-home.html">Events</a></li>
    						</ul>
    					</div>
    				</div>

    				<div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
    					<div class="footer-col">
    						<h4 class="footer-title">Help & Contact</h4>
    						<ul class="list-unstyled footer-nav">
    							<li><a href="#">
    								Stay Safe Online
    							</a></li>
    							<li><a href="#">
    								How to Sell</a></li>
    							<li><a href="#">
    								How to Buy
    							</a></li>
    							<li><a href="#">Posting Rules
    							</a></li>

    							<li><a href="#">
    								Promote Your Ad
    							</a></li>

    						</ul>
    					</div>
    				</div>

    				<div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
    					<div class="footer-col">
    						<h4 class="footer-title">More From Us</h4>
    						<ul class="list-unstyled footer-nav">
    							<li><a href="faq.php">FAQ
    							</a></li>
    							<li><a href="blogs.php">Blog
    							</a></li>
    							<li><a href="#">
    								Popular Searches
    							</a></li>
    							<li><a href="#"> Site Map
    							</a></li>
    							<li><a href="#"> Customer Reviews
    						</a></li>


    						</ul>
    					</div>
    				</div>
    				<div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
    					<div class="footer-col">
    						<h4 class="footer-title">Account</h4>
    						<ul class="list-unstyled footer-nav">
    							<li><a href="account-home.php"> Manage Account
    							</a></li>
    							<li><a href="login.php">Login
    							</a></li>
    							<li><a href="signup.php">Register
    							</a></li>
    							<li><a href="account-myads.php"> My ads
    							</a></li>
    							<li><a href="seller-profile.php"> Profile
    							</a></li>
    						</ul>
    					</div>
    				</div>
    				<div class=" col-xl-4 col-xl-4 col-md-4 col-12">
    					<div class="footer-col row">

    						<div class="col-sm-12 col-xs-6 col-xxs-12 no-padding-lg">
    							<div class="mobile-app-content">
    								<h4 class="footer-title">Mobile Apps</h4>
    								<div class="row ">
    									<div class="col-6  ">
    										<a class="app-icon" target="_blank"  href="https://itunes.apple.com/">
    											<span class="hide-visually">iOS app</span>
    											<img src="images/site/app_store_badge.svg" alt="Available on the App Store">
    										</a>
    									</div>
    									<div class="col-6  ">
    										<a class="app-icon"  target="_blank" href="https://play.google.com/store/">
    											<span class="hide-visually">Android App</span>
    											<img src="images/site/google-play-badge.svg" alt="Available on the App Store">
    										</a>
    									</div>
    								</div>
    							</div>
    						</div>

    						<div class="col-sm-12 col-xs-6 col-xxs-12 no-padding-lg">
    							<div class="hero-subscribe">
    								<h4 class="footer-title no-margin">Follow us on</h4>
    								<ul class="list-unstyled list-inline footer-nav social-list-footer social-list-color footer-nav-inline">
    									<li><a class="icon-color fb" title="Facebook" data-placement="top" data-toggle="tooltip" href="#"><i class="fab fa-facebook-f"></i> </a></li>
    									<li><a class="icon-color tw" title="Twitter" data-placement="top" data-toggle="tooltip" href="#"><i class="fab fa-twitter"></i> </a></li>
    									<li><a class="icon-color gp" title="Google+" data-placement="top" data-toggle="tooltip" href="#"><i class="fab fa-google-plus-g"></i> </a></li>
    									<li><a class="icon-color lin" title="Linkedin" data-placement="top" data-toggle="tooltip" href="#"><i class="fab fa-linkedin"></i> </a></li>
    									<li><a class="icon-color pin" title="Linkedin" data-placement="top" data-toggle="tooltip" href="#"><i class="fab fa-pinterest-p"></i> </a></li>
    								</ul>
    							</div>

    						</div>
    					</div>
    				</div>
    				<div style="clear: both"></div>

    				<div class="col-xl-12">
    					<div class=" text-center paymanet-method-logo">

    						<img src="images/site/payment/master_card.png" alt="img">
    						<img alt="img" src="images/site/payment/visa_card.png">
    						<img alt="img" src="images/site/payment/paypal.png">
    						<img alt="img" src="images/site/payment/american_express_card.png"> <img alt="img" src="images/site/payment/discover_network_card.png">
    						<img alt="img" src="images/site/payment/google_wallet.png">
    					</div>

    					<div class="copy-info text-center">
    						&copy;  All Rights Reserved.
    					</div>

    				</div>

    			</div>
    		</div>
    	</div>
    </footer>
</div>
<!-- /.wrapper -->






<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="../../../../cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/jquery/jquery-3.3.1.min.js">\x3C/script>')</script>
<script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/js/vendors.min.js"></script>

<!-- include custom script for site  -->
<script src="assets/js/main.min.js"></script>

</body>

<!-- Mirrored from templatecycle.com/demo/bootclassified-6/dist/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:07:50 GMT -->
</html>

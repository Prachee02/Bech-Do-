<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from templatecycle.com/demo/bootclassified-6/dist/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:13:02 GMT -->
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
        			<span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo "></i>
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
                           
                            <li class="dropdown no-arrow nav-item"><a href="#" class="nav-link dropdown-toggle" href="#"
                                                                      id="dropdown-nav-01" data-bs-toggle="dropdown"
                                                                      aria-expanded="false">

                                <span><?php 
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
								<li class="dropdown-item"><a href="account-saved-search.html"><i
                                        class="icon-star-circled"></i> Saved search

                                </a>
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
                            
                            
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
        


    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 page-content">
                    <div class="inner-box category-content">
                        <h2 class="title-2"><i class="icon-user-add"></i> Create your account, Its free </h2>

                        <div class="row">
                            <div class="col-sm-12">
                                <form class="form-horizontal" method="post" action="userdata.php">
                                    <fieldset>
                                        
                                        <!-- Text input-->
                                        <div class="form-group  row required">
                                            <label class="col-md-4 control-label">First Name <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input name="fname" placeholder="First Name" class="form-control input-md"
                                                       required="" type="text">
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Last Name <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input name="lname" placeholder="Last Name"
                                                       class="form-control input-md" type="text" required>
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Phone Number <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input name="phone" placeholder="Phone Number" maxlength="10" pattern="\d{10}"
                                                       class="form-control input-md" type="text">

                                                
                                            </div>
                                        </div>

                                        <!-- Multiple Radios -->
                                        <div class="form-group row">
                                            <label class="col-md-4 control-label">Gender</label>

                                            <div class="col-md-6">
                                                <div class="radio">
                                                    <label for="Gender-0">
                                                        <input name="gender" id="M" value="Male" checked="checked"
                                                               type="radio">
                                                        Male </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="Gender-1">
                                                        <input name="gender" id="F" value="Female" type="radio">
                                                        Female </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Textarea -->
                                        <div class="form-group row">
                                            <label class="col-md-4 control-label" for="textarea">About Yourself</label>

                                            <div class="col-md-6">
                                                <textarea class="form-control" id="textarea" name="about" required placeholder="About Yourself"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group  row required">
                                            <label for="inputEmail3" class="col-md-4 control-label">Email
                                                <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input type="email" class="form-control" id="inputEmail3"
                                                       placeholder="Email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group  row required">
                                            <label for="inputPassword3" class="col-md-4 control-label">Password </label>

                                            <div class="col-md-6">
                                                <input type="password" class="form-control" id="inputPassword3"
                                                       placeholder="Password" name="password" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 control-label"></label>

                                            <div class="col-md-8">
                                                <div class="termbox mb10">
                                                    <div class="col-auto my-1 no-padding">
                                                        <div class="custom-control custom-checkbox mr-sm-2">
                                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing" required>
                                                            <label class="custom-control-label" for="customControlAutosizing">  <span class="custom-control-description"> I have read and agree to the <a href="terms-conditions.html">Terms
                                                        & Conditions</a> </span></label>
                                                        
                                                        </div>
                                                    </div>

                                                </div>
                                                <div style="clear:both"></div>
                                                <input type="submit" id="regbtn" class="btn btn-primary" value="Register" href="account-home.php"></div>
                                                <label class="custom-control-label">  <span class="custom-control-description"> Already have an account? <a href="login.php">Login</a> </span></label>

                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.page-content -->

                <div class="col-md-4 reg-sidebar">
                    <div class="reg-sidebar-inner text-center">
                        <div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>

                            <h3><strong>Post a Free Classified</strong></h3>

                            <p> Post your free online classified ads with us. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. </p>
                        </div>
                        <div class="promo-text-box"><i class=" icon-pencil-circled fa fa-4x icon-color-2"></i>

                            <h3><strong>Create and Manage Items</strong></h3>

                            <p> Nam sit amet dui vel orci venenatis ullamcorper eget in lacus.
                                Praesent tristique elit pharetra magna efficitur laoreet.</p>
                        </div>
                        <div class="promo-text-box"><i class="  icon-heart-2 fa fa-4x icon-color-3"></i>

                            <h3><strong>Create your Favorite ads list.</strong></h3>

                            <p> PostNullam quis orci ut ipsum mollis malesuada varius eget metus.
                                Nulla aliquet dui sed quam iaculis, ut finibus massa tincidunt.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main-container -->

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
    							<li><a href="faq.html">FAQ
    							</a></li>
    							<li><a href="blogs.html">Blog
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
    							<li><a href="account-home.html"> Manage Account
    							</a></li>
    							<li><a href="login.html">Login
    							</a></li>
    							<li><a href="signup.html">Register
    							</a></li>
    							<li><a href="account-myads.html"> My ads
    							</a></li>
    							<li><a href="seller-profile.html"> Profile
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
    <!--/.footer-->

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

<!-- Modal Change City -->

<!-- <div class="modal fade modalHasList" id="select-country" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title uppercase font-weight-bold" id="exampleModalLabel"><i class=" icon-map"></i> Select your region </h4>

				<button type="button" class="close modal-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span><span
						class="sr-only">Close</span></button>
			</div>
			
		</div>
	</div>
</div> -->

<!-- /.modal -->

<!-- Modal Change City -->

<!-- <div class="modal fade modalHasList" id="selectRegion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel"><i class=" icon-map"></i> Select your region </h4>

				<button type="button" class="close modal-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span><span
						class="sr-only">Close</span></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12">

						<p>Popular cities in <strong>New York</strong>
						</p>

						<div style="clear:both"></div>
						<div class="col-sm-6 no-padding">
							<select class="form-control selecter  " id="region-state" name="region-state">
								<option value="">All States/Provinces</option>
								<option value="Alabama">Alabama</option>
								<option value="Alaska">Alaska</option>
								<option value="Arizona">Arizona</option>
								<option value="Arkansas">Arkansas</option>
								<option value="California">California</option>
								<option value="Colorado">Colorado</option>
								<option value="Connecticut">Connecticut</option>
								<option value="Delaware">Delaware</option>
								<option value="District of Columbia">District of Columbia</option>
								<option value="Florida">Florida</option>
								<option value="Georgia">Georgia</option>
								<option value="Hawaii">Hawaii</option>
								<option value="Idaho">Idaho</option>
								<option value="Illinois">Illinois</option>
								<option value="Indiana">Indiana</option>
								<option value="Iowa">Iowa</option>
								<option value="Kansas">Kansas</option>
								<option value="Kentucky">Kentucky</option>
								<option value="Louisiana">Louisiana</option>
								<option value="Maine">Maine</option>
								<option value="Maryland">Maryland</option>
								<option value="Massachusetts">Massachusetts</option>
								<option value="Michigan">Michigan</option>
								<option value="Minnesota">Minnesota</option>
								<option value="Mississippi">Mississippi</option>
								<option value="Missouri">Missouri</option>
								<option value="Montana">Montana</option>
								<option value="Nebraska">Nebraska</option>
								<option value="Nevada">Nevada</option>
								<option value="New Hampshire">New Hampshire</option>
								<option value="New Jersey">New Jersey</option>
								<option value="New Mexico">New Mexico</option>
								<option selected value="New York">New York</option>
								<option value="North Carolina">North Carolina</option>
								<option value="North Dakota">North Dakota</option>
								<option value="Ohio">Ohio</option>
								<option value="Oklahoma">Oklahoma</option>
								<option value="Oregon">Oregon</option>
								<option value="Pennsylvania">Pennsylvania</option>
								<option value="Rhode Island">Rhode Island</option>
								<option value="South Carolina">South Carolina</option>
								<option value="South Dakota">South Dakota</option>
								<option value="Tennessee">Tennessee</option>
								<option value="Texas">Texas</option>
								<option value="Utah">Utah</option>
								<option value="Vermont">Vermont</option>
								<option value="Virgin Islands">Virgin Islands</option>
								<option value="Virginia">Virginia</option>
								<option value="Washington">Washington</option>
								<option value="West Virginia">West Virginia</option>
								<option value="Wisconsin">Wisconsin</option>
								<option value="Wyoming">Wyoming</option>
							</select>
						</div>
						<div style="clear:both"></div>

						<hr class="hr-thin">
					</div>
					<div class="col-md-4">
						<ul class="list-link list-unstyled">
							<li><a href="#" title="">All Cities</a></li>
							<li><a href="#" title="Albany">Albany</a></li>
							<li><a href="#" title="Altamont">Altamont</a></li>
							<li><a href="#" title="Amagansett">Amagansett</a></li>
							<li><a href="#" title="Amawalk">Amawalk</a></li>
							<li><a href="#" title="Bellport">Bellport</a></li>
							<li><a href="#" title="Centereach">Centereach</a></li>
							<li><a href="#" title="Chappaqua">Chappaqua</a></li>
							<li><a href="#" title="East Elmhurst">East Elmhurst</a></li>
							<li><a href="#" title="East Greenbush">East Greenbush</a></li>
							<li><a href="#" title="East Meadow">East Meadow</a></li>

						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-link list-unstyled">
							<li><a href="#" title="Elmont">Elmont</a></li>
							<li><a href="#" title="Elmsford">Elmsford</a></li>
							<li><a href="#" title="Farmingville">Farmingville</a></li>
							<li><a href="#" title="Floral Park">Floral Park</a></li>
							<li><a href="#" title="Flushing">Flushing</a></li>
							<li><a href="#" title="Fonda">Fonda</a></li>
							<li><a href="#" title="Freeport">Freeport</a></li>
							<li><a href="#" title="Fresh Meadows">Fresh Meadows</a></li>
							<li><a href="#" title="Fultonville">Fultonville</a></li>
							<li><a href="#" title="Gansevoort">Gansevoort</a></li>
							<li><a href="#" title="Garden City">Garden City</a></li>


						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-link list-unstyled">
							<li><a href="#" title="Oceanside">Oceanside</a></li>
							<li><a href="#" title="Orangeburg">Orangeburg</a></li>
							<li><a href="#" title="Orient">Orient</a></li>
							<li><a href="#" title="Ozone Park">Ozone Park</a></li>
							<li><a href="#" title="Palatine Bridge">Palatine Bridge</a></li>
							<li><a href="#" title="Patterson">Patterson</a></li>
							<li><a href="#" title="Pearl River">Pearl River</a></li>
							<li><a href="#" title="Peekskill">Peekskill</a></li>
							<li><a href="#" title="Pelham">Pelham</a></li>
							<li><a href="#" title="Penn Yan">Penn Yan</a></li>
							<li><a href="#" title="Peru">Peru</a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->


</body>

<!-- Mirrored from templatecycle.com/demo/bootclassified-6/dist/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:13:02 GMT -->
</html>

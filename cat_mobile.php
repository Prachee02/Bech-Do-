<?php

session_start();

if(!isset($_SESSION['sess_uid']))
{
	
}

// get the session
$fname=$_SESSION['sess_fname'];


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from templatecycle.com/demo/bootclassified-6/dist/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:12:53 GMT -->
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
                    <a href="" class="navbar-brand logo logo-title">
    			  <span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo "></i>
    			  </span>BECH  <span>DO!!! </span> </a>

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
                                                        href="post-ads.html">Post Free Ad</a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- /.header -->

    <div class="search-row-wrapper" style="background-image: url(images/bg.jpg)">
    	<div class="inner">
    	<div class="container ">
    		<form action="#" method="GET">
    			<div class="row">


    				<!-- <div class="col-md-3">
    					<input class="form-control keyword" type="text" placeholder="e.g. Mobile Sale">
    				</div> -->
    				<div class="col-md-3">
    					<select class="form-control selecter" name="category" id="search-category">
    						<option selected="selected" disabled="disabled" value="">All Categories</option>
    						                    <option value="Automobile"> Automobiles</option>
                                                <option value="Laptop"> Laptops and Computers</option>
                                                <option value="Mobile"> Mobiles</option>
                                                <option value="Electronics"> Electronics</option>
                                                <option value="Books"> Books</option>
                                                <option value="Realestate"> Real Estate</option>
                                                <option value="Homeappliance"> Home Appliances </option>
                                                <option value="Pets"> Pets</option>
                                                <option value="Fashion"> Fashion and Beauty</option>
                                                <option value="Sports"> Sports and Hobbies</option>
                                                <option value="Furniture"> Home and Furniture</option>
                                                <option value="Other"> Other</option>
    					</select>
    				</div>
    				<div class="col-md-3">
    					<select class="form-control selecter" name="location" id="id-location">
    						<option selected="selected" disabled="disabled" value="">All Locations</option>
    						<option value="AP">Andhra Pradesh</option>
    						<option value="AS">Arunanchal Pradesh</option>
    						<option value="BR">Bihar</option>
    						<option value="CG">Chhattisgarh</option>
    						<option value="GA">Goa</option>
    						<option value="GJ">Gujarat</option>
    						<option value="HR">Haryana</option>
    						<option value="HP">Himachal Pradesh</option>
    						<option value="JK">Jammu and Kashmir</option>
    						<option value="JH">Jharkkhand</option>
    						<option value="KA">Karnataka</option>
    						<option value="KL">Kerala</option>
    						<option value="MP">Madhya Pradesh</option>
    						<option value="MH">Maharashtra</option>
    						<option value="MN">Manipur</option>
    						<option value="ML">Meghalaya</option>
    						<option value="MZ">Mizoram</option>
    						<option value="NL">Nagaland</option>
    						<option value="OR">Orissa</option>
    						<option value="PB">Punjab</option>
    						<option value="RJ">Rajasthan</option>
    						<option value="SK">Sikkim</option>
    						<option value="TN">Tamil Nadu</option>
    						<option value="TR">Tripura</option>
    						<option value="Uk">Uttarakhand</option>
    						<option value="UP">Uttar Pradesh</option>
    						<option value="WB">West Bengal</option>
    						<option value="AN">Andaman and Nicobar Islands</option>
    						<option value="CH">Chandigarh</option>
    						<option value="DH">Dadra and Nagar Haveli</option>
    						<option value="DD">Daman and Diu</option>
    						<option value="DL">Delhi</option>
    						<option value="LD">Lakshadweep</option>
    						<option value="PY">Pondicherry</option>
    			            <option value="Other-Locations">Other Locations</option>
    					</select>
    				</div>
    				<div class="col-md-3">
    					<button class="btn btn-block btn-primary btn-gradient"> Search <i class="fa fa-search"></i>
    					</button>
    				</div>
    			</div>
    		</form>
    	</div>
    	</div>
    </div>
    <!-- /.search-row -->
    <div class="main-container">
        <div class="container">
            <div class="row">
                <!-- this (.mobile-filter-sidebar) part will be position fixed in mobile version -->
                <div class="col-md-3 page-sidebar mobile-filter-sidebar">
                    <aside>
                        <div class="sidebar-modern-inner">
                            <div class="block-title has-arrow sidebar-header">
                                <h5><a href="#">All Categories</a></h5>
                            </div>
                            <div class="block-content categories-list  list-filter ">
                                <ul class=" list-unstyled">
                                    <li><a href="cat_automobile.php"><span
                                            class="title">Automobiles</span><span class="count"></span></a>
                                    </li>
                                    <li><a href="cat_laptop.php"><span class="title">Laptops and Computers </span><span
                                            class="count"></span></a></li>
                                    <li><a href="cat_mobile.php"><span
                                            class="title">Mobiles </span><span class="count"></span></a></li>
                                    <li><a href="cat_electronics.php"><span
                                            class="title">Electronics </span><span class="count"></span></a></li>
                                    <li><a href="cat_books.php"><span
                                            class="title">Books </span><span class="count"></span></a></li>
                                    <li><a href="scat_realestate.php"><span
                                            class="title">Real Estate </span><span class="count"></span></a></li>
                                    <li><a href="cat_homeappliance.php"><span class="title">Home Appliances </span><span
                                            class="count"></span></a></li>
                                    <li><a href="cat_pets.php"><span
                                            class="title">Pets</span><span class="count"></span></a>
                                    </li>
                                    <li><a href="cat_fashion.php"><span class="title">Fashion and Beauty</span><span
                                            class="count"></span></a></li>
											<li><a href="cat_sports.php"><span
                                            class="title">Sports and Hobbies</span><span class="count"></span></a>
                                    </li>
									<li><a href="cat_furniture.php"><span
                                            class="title">Home and Furniture</span><span class="count"></span></a>
                                    </li>
									<li><a href="cat_other.php"><span
                                            class="title">Other</span><span class="count"></span></a>
                                    </li>
                                </ul>
                            </div> 
                    </aside>
                </div>
  <!--/.page-side-bar-->
                <div class="col-md-9 page-content col-thin-left">
                    <div class="category-list">


                        <div class="tab-box">
                            <ul class="nav nav-tabs add-tabs tablist" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Mobiles <span class="badge badge-pill bg-secondary"></span></a>
                                </li>
                                
                            </ul>
                        </div>

                        <div class="listing-filter">
                            <div class="pull-left col-xs-6">
                                <div class="breadcrumb-list"><a href="#" class="current"> <span>All Mobiles</span></a> 
                                    <!-- cityName will replace with selected location/area from location modal -->
                                    <span class="cityName">  </span> </div>
                            </div>
                            
                            <div style="clear:both"></div>
                        </div>
                        <!--/.listing-filter-->
						<?php
					     $sql = "SELECT * FROM ad_detail WHERE category_group='Mobile'";
					      include 'util.php';
					      $conn = dbConnect();
					      $rs = mysqli_query($conn, $sql);
	                      if ($rs->num_rows > 0) {
					       while ($row = mysqli_fetch_assoc($rs)) {
					    ?>
                     <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="category-list-wrapper row no-margin">
                                    <div class="item-list">
                                        <div class="row">
                                            <div class="col-md-2 no-padding photobox">
                                                <div class="add-private-tabimage"><span class="photo-count"></span> <a
                                                        href="ads-details.php"><img class="thumbnail no-margin"
                                                                                     src="ad_images/<?= $row['picture1'] ?>" alt="img"></a>
                                                </div>
                                            </div>
                                            <!--/.photobox-->

					


                                            <div class="col-md-7 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="ads-details.php">

													<?= $row['ad_title'] ?> </a></h5>
                                                    <span class="info-row"> 
													<span
                                            class="date"><i class=" icon-clock"> </i> <?= $row['created_at'] ?> - </span>
                                        <span
                                                class="item-location"><i class="fa fa-map-marker-alt"></i> <?= $row['seller_state'] ?></span>
                                            </span>
                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">
                                                <h2 class="item-price"> ₹<?= $row['price'] ?> </h2>
                                                <!-- <a class="btn btn-danger  btn-sm make-favorite"> <i class="fa fa-certificate"></i>

                                                    <span>Top Ads</span> </a> -->
                                                <a
                                                        class="btn btn-secondary  btn-sm make-favorite"> <i class="fa fa-heart"></i>
                                                    <span>Favourite</span>
                                                </a>
                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>

                                    </div>

									<?php
						             }
					                  }
									  else{
										echo "No records found!!";
									  }
					                ?>
                                   

                                    
                                </div>
                            </div>
                            
                                           
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>





                        
                    </div>

                    <!-- <div class="pagination-bar text-center">
                    	<nav aria-label="Page navigation " class="d-inline-b">
                    		<ul class="pagination">

                    			<li class="page-item active"><a class="page-link" href="#">1</a></li>
                    			<li class="page-item"><a class="page-link" href="#">2</a></li>
                    			<li class="page-item"><a class="page-link" href="#">3</a></li>
                    			<li class="page-item"><a class="page-link" href="#">4</a></li>
                    			<li class="page-item"><a class="page-link" href="#">...</a></li>
                    			<li class="page-item">
                    				<a class="page-link" href="#">Next</a>
                    			</li>
                    		</ul>
                    	</nav>
                    </div> -->
                    <!--/.pagination-bar -->

                    <div class="post-promo text-center">
                        <h2> Do you get anything for sell ? </h2>
                        <h5>Sell your products online FOR FREE. It's easier than you think !</h5>
                        <a href="post-ads.html" class="btn btn-lg btn-border btn-post btn-danger">Post a Free Ad </a>
                    </div>
                    <!--/.post-promo-->
                </div>
                <!--/.page-content-->

            </div>
        </div>
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
    <!-- /.footer -->
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


</html>
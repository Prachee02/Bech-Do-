<?php

session_start();

if(!isset($_SESSION['sess_uid']))
{
    header("Location:login.php?direct=yes");
}

// get the session
$fname=$_SESSION['sess_fname'];
// $email=$_SESSION['sess_email'];


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from templatecycle.com/demo/bootclassified-6/dist/post-ads.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:13:01 GMT -->
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


                        <a href="index.html" class="navbar-brand logo logo-title">
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
                            <li class="nav-item"><a href="category.html" class="nav-link"><i class="icon-th-thumb"></i> All Ads</a>
                            </li>
                            <li class="dropdown no-arrow nav-item"><a href="#" class="nav-link dropdown-toggle" href="#"
                                                                      id="dropdown-nav-01" data-bs-toggle="dropdown"
                                                                      aria-expanded="false">

                                <span> <?=$fname?> </span> <i class="icon-user fa"></i> <i class=" icon-down-open-big fa"></i></a>
								<ul
										class="dropdown-menu user-menu dropdown-menu-right" aria-labelledby="dropdown01">
									<li class="active dropdown-item"><a href="account-home.html"><i class="icon-home"></i>
										Personal Home
	
									</a>
									</li>
									<li class="dropdown-item"><a href="account-myads.html"><i class="icon-thumb"></i> My ads
									</a>
									</li>
									<li class="dropdown-item"><a href="account-favourite-ads.html"><i class="icon-heart"></i>
										Favourite ads </a>
									</li>
									<li class="dropdown-item"><a href="account-saved-search.html"><i
											class="icon-star-circled"></i> Saved search
	
									</a>
									</li>
									<li class="dropdown-item"><a href="account-archived-ads.html"><i
											class="icon-folder-close"></i> Archived ads
	
									</a>
									</li>
									<li class="dropdown-item"><a href="account-pending-approval-ads.html"><i
											class="icon-hourglass"></i> Pending
	
										approval </a>
									</li>
									<li class="dropdown-item"><a href="statements.html"><i class=" icon-money "></i> Payment
										history </a>
									</li>
									<li class="dropdown-item"><a href="logout.php"><i class=" icon-logout "></i> Log out </a>
									</li>
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




		
        


    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-9 page-content">
                    <div class="inner-box category-content">
                        <h2 class="title-2 uppercase"><strong> <i class="icon-docs"></i> Post a Free Classified
                            Ad</strong></h2>

                        <div class="row">
                            <div class="col-sm-12">

                                <form  method="POST" action="ad_data.php" class="form-horizontal form-post-ads" enctype="multipart/form-data">

                                    <div class="form-group row">
                                        <label  class="col-sm-3 col-form-label">Category</label>
                                        <div class="col-sm-8">
                                            <select name="category_group" id="category-group" class="form-control" required>
                                                <option value="0" selected="selected" disabled="disabled" style="background-color:#E9E9E9;font-weight:bold;"> Select a category...</option>
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
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Category Type</label>
                                        <div class="col-sm-8">
										<input name="category_type" type="text" class="form-control" id="AdType" placeholder="Category Type">
										<!-- <small id="" class="form-text text-muted">
                                                Write the sub category as per your requirements.
                                            </small> -->

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-3 col-form-label">Ad title</label>
                                        <div class="col-sm-8">
                                            <input name="ad_title" type="text" class="form-control" id="Adtitle" placeholder="Ad title" required>
                                            <!-- <small id="" class="form-text text-muted">
												Write a proper title as per your requirements.
                                            </small> -->
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label  class="col-sm-3 col-form-label">Describe ad</label>
                                        <div class="col-sm-8">
                                            <textarea name="ad_description" class="form-control" name="textarea" rows="3" placeholder="Describe about your ad..."></textarea>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label  class="col-sm-3 col-form-label">Price</label>

                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">₹</span>
                                                <input name="price" type="text" required class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">                        
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" >Picture</label>
                                        <div class="col-lg-8">
                                            <div class="mb10">
                                                <input name="picture1" id="picture1" type="file"  class="file"  >
                                            </div>
                                            <div class="mb10">
                                                <input name="picture2" id="picture2" type="file" class="file" >
                                            </div>
                                            <div class="mb10">
                                                <input name="picture3" id="picture3" type="file"  class="file" >
                                            </div>
                                            <div class="mb10">
                                                <input name="picture4" id="picture4" type="file"  class="file" >
                                            </div>
                                            <div class="mb10">
                                                <input name="picture5" id="picture5" type="file"  class="file" >
                                            </div>
                                            <p  class="form-text text-muted">
                                                Add minimum 2 photos. Use a real image of your product, not catalogs
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content-subheading"><i class="icon-user fa"></i> <strong>Seller
                                        information</strong></div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="seller_name">Name</label>

                                        <div class="col-sm-8">
                                            <input id="textinput-name" name="seller_name"
                                                   placeholder="Seller Name" class="form-control input-md"
                                                   required="" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="seller_email"> Seller
                                            Email</label>
                                        <div class="col-sm-8">
                                            <input id="seller-email" name="seller_email" class="form-control"
                                                   placeholder="Email" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="seller_phone">Phone
                                            Number</label>
                                        <div class="col-sm-8">
                                            <input id="seller-number" name="seller_phone"
                                                   placeholder="Phone Number" class="form-control input-md"
                                                   required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="seller_location">Address</label>

                                        <div class="col-sm-8">
										<input id="seller-Location" name="seller_location"
                                                   placeholder="Address" class="form-control "
                                                   required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="seller_area">PIN Code</label>

                                        <div class="col-sm-8">
										<input id="seller-area" name="seller_area"
                                                   placeholder="PIN Code" class="form-control"
                                                   required type="text">
                                            
                                        </div>
                                    </div>

									<div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="seller_state">State</label>

                                      <div class="col-sm-8">
										<select class="form-control selecter" name="seller_state" id="seller-state">
    						                <option selected="selected" disabled="disabled" value="0" style="background-color:#E9E9E9;font-weight:bold;">Select your state</option>
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
                                    </div>
                                    <!-- Button  -->
                                    <div class="form-group row">
									<div class="col-sm-3">
									<input type="submit" name="submit"  class="btn btn-success btn-lg" value="Submit" href="posting-success.php"></div>
									</div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.page-content -->

                <div class="col-md-3 reg-sidebar">
                    <div class="reg-sidebar-inner text-center">
                        <div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>

                            <h3><strong>Post a Free Classified</strong></h3>

                            <p> Post your free online classified ads with us. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. </p>
                        </div>

                        <div class="card sidebar-card">
                            <div class="card-header uppercase">
                                <small><strong>How to sell quickly?</strong></small>
                            </div>
                            <div class="card-content">
                                <div class="card-body text-left">
                                    <ul class="list-check">
                                        <li> Use a brief title and description of the item</li>
                                        <li> Make sure you post in the correct category</li>
                                        <li> Add nice photos to your ad</li>
                                        <li> Put a reasonable price</li>
                                        <li> Check the item before publish</li>

                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!--/.reg-sidebar-->
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
						&copy; 2017 BootClassified. All Rights Reserved.
					</div>

				</div>

			</div>
		</div>
	</div>
</footer>
    <!--/.footer-->
</div>
<!-- /.wrapper -->


<!-- Modal contactAdvertiser -->

<div class="modal fade" id="contactAdvertiser" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><i class=" icon-mail-2"></i> Contact advertiser </h4>

				<button type="button" class="close modal-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span><span
						class="sr-only">Close</span></button>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="form-group">
						<label for="recipient-name" class="control-label">Name:</label>
						<input class="form-control required" id="recipient-name" placeholder="Your name"
							   data-placement="top" data-trigger="manual"
							   data-content="Must be at least 3 characters long, and must only contain letters."
							   type="text">
					</div>
					<div class="form-group">
						<label for="sender-email" class="control-label">E-mail:</label>
						<input id="sender-email" type="text"
							   data-content="Must be a valid e-mail address (user@gmail.com)" data-trigger="manual"
							   data-placement="top" placeholder="email@you.com" class="form-control email">
					</div>
					<div class="form-group">
						<label for="recipient-Phone-Number" class="control-label">Phone Number:</label>
						<input type="text" maxlength="60" class="form-control" id="recipient-Phone-Number">
					</div>
					<div class="form-group">
						<label for="message-text" class="control-label">Message <span class="text-count">(300) </span>:</label>
						<textarea class="form-control" id="message-text" placeholder="Your message here.."
								  data-placement="top" data-trigger="manual"></textarea>
					</div>
					<div class="form-group">
						<p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not
							valid. </p>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-success pull-right">Send message!</button>
			</div>
		</div>
	</div>
</div>

<!-- /.modal -->

<!-- Modal contactAdvertiser -->

<div class="modal fade" id="reportAdvertiser" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><i class="fa icon-info-circled-alt"></i> There's something wrong with this ads?
				</h4>

				<button type="button" class="close modal-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span><span
						class="sr-only">Close</span></button>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="form-group">
						<label for="report-reason" class="control-label">Reason:</label>
						<select name="report-reason" id="report-reason" class="form-control">
							<option value="">Select a reason</option>
							<option value="soldUnavailable">Item unavailable</option>
							<option value="fraud">Fraud</option>
							<option value="duplicate">Duplicate</option>
							<option value="spam">Spam</option>
							<option value="wrongCategory">Wrong category</option>
							<option value="other">Other</option>
						</select>
					</div>
					<div class="form-group">
						<label for="recipient-email" class="control-label">Your E-mail:</label>
						<input type="text" name="email" maxlength="60" class="form-control" id="recipient-email">
					</div>
					<div class="form-group">
						<label for="message-text2" class="control-label">Message <span class="text-count">(300) </span>:</label>
						<textarea class="form-control" id="message-text2"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary">Send Report</button>
			</div>
		</div>
	</div>
</div>

<!-- /.modal -->

<!-- Modal Change City -->

<div class="modal fade modalHasList" id="select-country" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title uppercase font-weight-bold" id="exampleModalLabel"><i class=" icon-map"></i> Select your region </h4>

				<button type="button" class="close modal-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span><span
						class="sr-only">Close</span></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="row" style="padding: 0 20px">
						<ul class="cat-list col-sm-3 col-xs-6 ">
							<li>
								<span  class="flag-icon flag-icon-af"> </span>
								<a href="#AF">
									Afghanistan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-al"> </span>
								<a href="#AL">
									Albania
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-dz"> </span>
								<a href="#DZ">
									Algeria
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ad"> </span>
								<a href="#AD">
									Andorra
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ao"> </span>
								<a href="#AO">
									Angola
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ar"> </span>
								<a href="#AR">
									Argentina
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-am"> </span>
								<a href="#AM">
									Armenia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-au"> </span>
								<a href="#AU">
									Australia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-at"> </span>
								<a href="#AT">
									Austria
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-az"> </span>
								<a href="#AZ">
									Azerbaijan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bs"> </span>
								<a href="#BS">
									Bahamas
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bh"> </span>
								<a href="#BH">
									Bahrain
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bd"> </span>
								<a href="#BD">
									Bangladesh
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-by"> </span>
								<a href="#BY">
									Belarus
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-be"> </span>
								<a href="#BE">
									Belgium
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bz"> </span>
								<a href="#BZ">
									Belize
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bj"> </span>
								<a href="#BJ">
									Benin
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bo"> </span>
								<a href="#BO">
									Bolivia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ba"> </span>
								<a href="#BA">
									Bosnia and Herzegovina
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bw"> </span>
								<a href="#BW">
									Botswana
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-br"> </span>
								<a href="#BR">
									Brazil
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bn"> </span>
								<a href="#BN">
									Brunei
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bg"> </span>
								<a href="#BG">
									Bulgaria
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bf"> </span>
								<a href="#BF">
									Burkina Faso
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bi"> </span>
								<a href="#BI">
									Burundi
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kh"> </span>
								<a href="#KH">
									Cambodia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cm"> </span>
								<a href="#CM">
									Cameroon
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ca"> </span>
								<a href="#CA">
									Canada
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cv"> </span>
								<a href="#CV">
									Cape Verde
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cf"> </span>
								<a href="#CF">
									Central African Republic
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-td"> </span>
								<a href="#TD">
									Chad
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cl"> </span>
								<a href="#CL">
									Chile
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cn"> </span>
								<a href="#CN">
									China
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-co"> </span>
								<a href="#CO">
									Colombia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-km"> </span>
								<a href="#KM">
									Comoros
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cg"> </span>
								<a href="#CG">
									Congo - Brazzaville
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cd"> </span>
								<a href="#CD">
									Congo - Kinshasa
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cr"> </span>
								<a href="#CR">
									Costa Rica
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-hr"> </span>
								<a href="#HR">
									Croatia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cu"> </span>
								<a href="#CU">
									Cuba
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cy"> </span>
								<a href="#CY">
									Cyprus
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cz"> </span>
								<a href="#CZ">
									Czech Republic
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ci"> </span>
								<a href="#CI">
									Côte d’Ivoire
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-dk"> </span>
								<a href="#DK">
									Denmark
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-dj"> </span>
								<a href="#DJ">
									Djibouti
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-dm"> </span>
								<a href="#DM">
									Dominica
								</a>
							</li>
						</ul>
						<ul class="cat-list col-sm-3 col-xs-6 ">
							<li>
								<span  class="flag-icon flag-icon-do"> </span>
								<a href="#DO">
									Dominican Republic
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ec"> </span>
								<a href="#EC">
									Ecuador
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-eg"> </span>
								<a href="#EG">
									Egypt
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gq"> </span>
								<a href="#GQ">
									Equatorial Guinea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-er"> </span>
								<a href="#ER">
									Eritrea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ee"> </span>
								<a href="#EE">
									Estonia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-et"> </span>
								<a href="#ET">
									Ethiopia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-fj"> </span>
								<a href="#FJ">
									Fiji
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-fi"> </span>
								<a href="#FI">
									Finland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-fr"> </span>
								<a href="#FR">
									France
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ga"> </span>
								<a href="#GA">
									Gabon
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gm"> </span>
								<a href="#GM">
									Gambia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ge"> </span>
								<a href="#GE">
									Georgia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-de"> </span>
								<a href="#DE">
									Germany
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gh"> </span>
								<a href="#GH">
									Ghana
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gi"> </span>
								<a href="#GI">
									Gibraltar
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gr"> </span>
								<a href="#GR">
									Greece
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gl"> </span>
								<a href="#GL">
									Greenland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gd"> </span>
								<a href="#GD">
									Grenada
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gp"> </span>
								<a href="#GP">
									Guadeloupe
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gu"> </span>
								<a href="#GU">
									Guam
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gt"> </span>
								<a href="#GT">
									Guatemala
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gn"> </span>
								<a href="#GN">
									Guinea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gw"> </span>
								<a href="#GW">
									Guinea-Bissau
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gy"> </span>
								<a href="#GY">
									Guyana
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ht"> </span>
								<a href="#HT">
									Haiti
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-hn"> </span>
								<a href="#HN">
									Honduras
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-hk"> </span>
								<a href="#HK">
									Hong Kong SAR China
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-hu"> </span>
								<a href="#HU">
									Hungary
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-is"> </span>
								<a href="#IS">
									Iceland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-in"> </span>
								<a href="#IN">
									India
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-id"> </span>
								<a href="#ID">
									Indonesia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ir"> </span>
								<a href="#IR">
									Iran
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-iq"> </span>
								<a href="#IQ">
									Iraq
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ie"> </span>
								<a href="#IE">
									Ireland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-il"> </span>
								<a href="#IL">
									Israel
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-it"> </span>
								<a href="#IT">
									Italy
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-jm"> </span>
								<a href="#JM">
									Jamaica
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-jp"> </span>
								<a href="#JP">
									Japan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-jo"> </span>
								<a href="#JO">
									Jordan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kz"> </span>
								<a href="#KZ">
									Kazakhstan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ke"> </span>
								<a href="#KE">
									Kenya
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ki"> </span>
								<a href="#KI">
									Kiribati
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kw"> </span>
								<a href="#KW">
									Kuwait
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kg"> </span>
								<a href="#KG">
									Kyrgyzstan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-la"> </span>
								<a href="#LA">
									Laos
								</a>
							</li>
						</ul>
						<ul class="cat-list col-sm-3 col-xs-6 ">
							<li>
								<span  class="flag-icon flag-icon-lv"> </span>
								<a href="#LV">
									Latvia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-lb"> </span>
								<a href="#LB">
									Lebanon
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ls"> </span>
								<a href="#LS">
									Lesotho
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-lr"> </span>
								<a href="#LR">
									Liberia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ly"> </span>
								<a href="#LY">
									Libya
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-li"> </span>
								<a href="#LI">
									Liechtenstein
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-lt"> </span>
								<a href="#LT">
									Lithuania
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-lu"> </span>
								<a href="#LU">
									Luxembourg
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mk"> </span>
								<a href="#MK">
									Macedonia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mg"> </span>
								<a href="#MG">
									Madagascar
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mw"> </span>
								<a href="#MW">
									Malawi
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-my"> </span>
								<a href="#MY">
									Malaysia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mv"> </span>
								<a href="#MV">
									Maldives
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ml"> </span>
								<a href="#ML">
									Mali
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mt"> </span>
								<a href="#MT">
									Malta
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mq"> </span>
								<a href="#MQ">
									Martinique
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mr"> </span>
								<a href="#MR">
									Mauritania
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mu"> </span>
								<a href="#MU">
									Mauritius
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-yt"> </span>
								<a href="#YT">
									Mayotte
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mx"> </span>
								<a href="#MX">
									Mexico
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-fm"> </span>
								<a href="#FM">
									Micronesia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-md"> </span>
								<a href="#MD">
									Moldova
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mc"> </span>
								<a href="#MC">
									Monaco
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mn"> </span>
								<a href="#MN">
									Mongolia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-me"> </span>
								<a href="#ME">
									Montenegro
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ma"> </span>
								<a href="#MA">
									Morocco
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mz"> </span>
								<a href="#MZ">
									Mozambique
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mm"> </span>
								<a href="#MM">
									Myanmar [Burma]
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-na"> </span>
								<a href="#NA">
									Namibia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-np"> </span>
								<a href="#NP">
									Nepal
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-nl"> </span>
								<a href="#NL">
									Netherlands
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-nc"> </span>
								<a href="#NC">
									New Caledonia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-nz"> </span>
								<a href="#NZ">
									New Zealand
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ni"> </span>
								<a href="#NI">
									Nicaragua
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ne"> </span>
								<a href="#NE">
									Niger
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ng"> </span>
								<a href="#NG">
									Nigeria
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kp"> </span>
								<a href="#KP">
									North Korea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-no"> </span>
								<a href="#NO">
									Norway
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-om"> </span>
								<a href="#OM">
									Oman
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pk"> </span>
								<a href="#PK">
									Pakistan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ps"> </span>
								<a href="#PS">
									Palestinian Territories
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pa"> </span>
								<a href="#PA">
									Panama
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pg"> </span>
								<a href="#PG">
									Papua New Guinea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-py"> </span>
								<a href="#PY">
									Paraguay
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pe"> </span>
								<a href="#PE">
									Peru
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ph"> </span>
								<a href="#PH">
									Philippines
								</a>
							</li>
						</ul>
						<ul class="cat-list col-sm-3 col-xs-6 ">
							<li>
								<span  class="flag-icon flag-icon-pl"> </span>
								<a href="#PL">
									Poland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pt"> </span>
								<a href="#PT">
									Portugal
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pr"> </span>
								<a href="#PR">
									Puerto Rico
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-qa"> </span>
								<a href="#QA">
									Qatar
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ro"> </span>
								<a href="#RO">
									Romania
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ru"> </span>
								<a href="#RU">
									Russia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-rw"> </span>
								<a href="#RW">
									Rwanda
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-re"> </span>
								<a href="#RE">
									Réunion
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ws"> </span>
								<a href="#WS">
									Samoa
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sa"> </span>
								<a href="#SA">
									Saudi Arabia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sn"> </span>
								<a href="#SN">
									Senegal
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-rs"> </span>
								<a href="#RS">
									Serbia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sl"> </span>
								<a href="#SL">
									Sierra Leone
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sg"> </span>
								<a href="#SG">
									Singapore
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sk"> </span>
								<a href="#SK">
									Slovakia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-si"> </span>
								<a href="#SI">
									Slovenia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-so"> </span>
								<a href="#SO">
									Somalia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-za"> </span>
								<a href="#ZA">
									South Africa
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kr"> </span>
								<a href="#KR">
									South Korea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-es"> </span>
								<a href="#ES">
									Spain
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-lk"> </span>
								<a href="#LK">
									Sri Lanka
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sd"> </span>
								<a href="#SD">
									Sudan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sz"> </span>
								<a href="#SZ">
									Swaziland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-se"> </span>
								<a href="#SE">
									Sweden
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ch"> </span>
								<a href="#CH">
									Switzerland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sy"> </span>
								<a href="#SY">
									Syria
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tw"> </span>
								<a href="#TW">
									Taiwan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tj"> </span>
								<a href="#TJ">
									Tajikistan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tz"> </span>
								<a href="#TZ">
									Tanzania
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-th"> </span>
								<a href="#TH">
									Thailand
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tl"> </span>
								<a href="#TL">
									Timor-Leste
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tg"> </span>
								<a href="#TG">
									Togo
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tn"> </span>
								<a href="#TN">
									Tunisia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tr"> </span>
								<a href="#TR">
									Turkey
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tm"> </span>
								<a href="#TM">
									Turkmenistan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ug"> </span>
								<a href="#UG">
									Uganda
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ua"> </span>
								<a href="#UA">
									Ukraine
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ae"> </span>
								<a href="#AE">
									United Arab Emirates
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gb"> </span>
								<a href="#UK">
									United Kingdom
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-us"> </span>
								<a href="#US">
									United States
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-uy"> </span>
								<a href="#UY">
									Uruguay
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-uz"> </span>
								<a href="#UZ">
									Uzbekistan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-vu"> </span>
								<a href="#VU">
									Vanuatu
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ve"> </span>
								<a href="#VE">
									Venezuela
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-vn"> </span>
								<a href="#VN">
									Vietnam
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ye"> </span>
								<a href="#YE">
									Yemen
								</a>
							</li>
						</ul>
						<ul class="cat-list col-sm-3 col-xs-6 ">
							<li>
								<span  class="flag-icon flag-icon-zm"> </span>
								<a href="#ZM">
									Zambia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-zw"> </span>
								<a href="#ZW">
									Zimbabwe
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- /.modal -->


<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="../../../../cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/jquery/jquery-3.3.1.min.js">\x3C/script>')</script>
<script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/js/vendors.min.js"></script>

<!-- include custom script for site  -->
<script src="assets/js/main.min.js"></script>


<!-- include jquery file upload plugin  -->
<script src="assets/js/fileinput.min.js" type="text/javascript"></script>
<script>
    // initialize with defaults
    $("#input-upload-img1").fileinput();
    $("#input-upload-img2").fileinput();
    $("#input-upload-img3").fileinput();
    $("#input-upload-img4").fileinput();
    $("#input-upload-img5").fileinput();
</script>
</body>

<!-- Mirrored from templatecycle.com/demo/bootclassified-6/dist/post-ads.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 16:13:02 GMT -->
</html>

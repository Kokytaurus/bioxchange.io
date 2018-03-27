
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BIOXCHANGE</title>
	<meta name="description" content="BIOXCHANGE" />
	<meta name="keywords" content="BIOXCHANGE" />
	<meta name="author" content=" ">
    <link rel="icon" href="assets/images/favicon.ico">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--Custom template CSS-->
     <link href="assets/css/style.css" rel="stylesheet">
     <!--Custom template CSS Responsive-->
     <link href="assets/webcss/site-responsive.css" rel="stylesheet">
       <!--Animated CSS -->
     <link href="assets/webcss/animate.css" rel="stylesheet">
     <!--Owsome Fonts -->
     <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	 <link rel="stylesheet" href="assets/css/cryptocoins.css">
	 <!--<link rel="stylesheet" href="https://market.cryptobroker.one/assets/webcss/custom_fonts.css">-->
     <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="assets/owlslider/owl-carousel/owl.carousel.css">
     
    <!-- Default template -->
    <link rel="stylesheet" href="assets/owlslider/owl-carousel/owl.template.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-notify.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.playSound.js"></script>
	<script type="text/javascript" src="assets/js/functions.js"></script>
	<script type="text/javascript" src="assets/js/uploader.min.js"></script>
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body class="joblist style2  style3 title-image">
   	<!-- Header Image Or May be Slider-->
		<div id="header" class="container-fluid pages">
              <div class="row">
             <!-- Header Image Or May be Slider-->
                <div class="top_header">
                    <nav class="navbar navbar-fixed-top">
               			 
                         <div class="container">
                             <div class="logo">
                                <a href="index.html"><small>BIO</small><b>X</b><small>CHANGE</small></a>
                             </div>
                             <div class="logins">
                    				<a href="login.html" class="post_job"><span class="label job-type partytime">Post ad</span></a> 
                                   									<a href="login.html" class="login"><i class="fa fa-user"></i></a>
									                    		</div>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                    </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
						  <li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buy <span class="caret"></span></a>
							  <ul class="dropdown-menu">
																<li><a href="buy-bitcoin.html">Bitcoin</a></li>
																								<li><a href="buy-litecoin.html">Litecoin</a></li>
																								<li><a href="buy-Ether.html">Ether</a></li>
															  </ul>
							</li>
							 <li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sell <span class="caret"></span></a>
							  <ul class="dropdown-menu">
																<li><a href="sell-bitcoin.html">Bitcoin</a></li>
																								<li><a href="sell-litecoin.html">Litecoin</a></li>
																								<li><a href="sell-Ether.html">Ether</a></li>
															  </ul>
							</li><lI><a href="contact.html">Contact</a></li>
							
                           
														 <li class="mobile-menu"><a href="login.html">Post ad</a></li>
                            <li class="mobile-menu"><a href="login.html">Login / Register</a></li>
                            						  </ul>
                     
                    </div><!-- navbar-collapse -->
                    
                    
					
                    </div>
					
                    <!-- container-fluid -->
                    </nav>
					
                 </div>
                 
                
            </div>
       	</div>
	<!-- Header Image Or May be Slider--><div class="container-fluid login_register header_area deximJobs_tabs">
    	<div class="row">
            <div class="container main-container">
                    <div class="col-lg-offset-1 col-lg-11 col-md-12 col-sm-12 col-xs-12">
                        <ul class="nav nav-pills ">
                            <li class="active"><a  href="register.html">Register</a></li>
                            <li><a href="login.html">Login</a></li>
                           
                        </ul>

                    <div class="tab-content">
                        <div id="register-account" class="tab-pane fade in active white-text">
                        	
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 zero-padding-left">
                            	<p></p>
                                        <form action="register.php" method="POST" class="contact_us">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username" value="<?php echo $username; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="email" name="email" value="<?echo $email; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" id="password"/>
                                            </div>
                                             <div class="form-group">
                                                <label>Confirm password</label>
                                                <input type="password" name="cpassword" id="cpassword"/>
                                            </div>
											<div class="form-group">
                                                <label>Secret PIN</label>
                                                <input type="password" name="secret_pin" id="cpassword"/>
                                            </div>
                                   
                                         
                                    
                                            <div class="form-group submit">
                                                <label>Submit</label>
                                                <input type="submit" name="btc_register" value="Register" class="register">
                                                <a href="password/reset.html" class="lost_password">Forgot password?</a>
                                            </div>
                                 </form>
                        	</div>
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12  pull-right sidebar">
                            	<div class="widget">
                                	<h3>Why to have account in BIOXCHANGE? </h3>
                                    <ul>
                                    	<li><p><i class="fa fa-clock-o"></i> Fast and accurate transactions between merchant and customer.</p></li>
										<li><p><i class="fa fa-child"></i> Each client is protected from malicious and fraudulent customers.</p></li>

                                    </ul>
                                   
                           		</div> 
                            </div>
                        </div>
                        
                       
                    </div>
                        
                        
                    </div>
                    
			</div>
       </div>
    </div> 
	<!--Footer Area-->
   		<div class="container-fluid footer">
        	<div class="row">
            <div class="container main-container-home">
            	<div class="col-md-3">
					<h3>Pages</h3>
					 <ul class="list-unstyled">
						<li><a href="faq.html">Frequently Asked Questions</a></li>
						<li><a href="page/terms-of-services.html">Terms of services</a></li>
						<li><a href="page/privacy-policy.html">Privacy Policy</a></li>
						
					</ul>
				</div>
				<div class="col-md-4">
					<h3>Languages</h3>
					 <ul class="list-unstyled">
						<li><a href="index70d8.html?lang=English">English</a></					</ul>
				</div>
				<div class="col-md-5">
					<h3>Follow us</h3>
					Twitter or Facebook code here.
				</div>
			</div>
            	
            </div>
            </div>
        </div>
    <!--Footer Area--> 
    <!--Last Footer Area---->
    	<div class="container-fluid footer last-footer ">
        	<div class="row">
            <div class="container main-container">
            	<div class="col-lg-9 col-md-3 col-sm-9 col-xs-6" >
                	<p class="copyright">Copyright © Biosec Solutions 2018.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                	<ul class="list-group">
                    	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                
            </div>
            </div>
        </div>
    <!--Last Footer Area----> 
	<input type="hidden" id="url" value= "index.html">
<!-- Scripts
================================================== -->
    <script type="text/javascript" src="assets/js/select2.min.js"></script>
    <!-- Html Editor -->
    <script src="assets/tinymce/tinymce.min.js"></script>
	<!--  parallax.js-1.4.2  -->
    <script type="text/javascript" src="assets/parallax.js-1.4.2/parallax.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
   	<!-- Include js plugin -->
    <script type="text/javascript" src="assets/owlslider/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script> 
  	<script type="text/javascript" src="assets/counter/jquery.counterup.min.js"></script> 
    <!--Site JS-->
     <script src="assets/js/webjs.js"></script>

  <!-- Scripts
================================================== -->
	</body>

<!-- Mirrored from market.cryptobroker.one/register by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Mar Biosec Solutions 2018 10:57:11 GMT -->
</html>
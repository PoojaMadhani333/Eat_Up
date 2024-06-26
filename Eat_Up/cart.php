<?php include("connection.php");?>
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>QuickFood - Quality delivery or take away food</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    
    <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>

    <!-- BASE CSS -->
    <link href="css/base.css" rel="stylesheet">
    
    <!-- Radio and check inputs -->
    <link href="css/skins/square/grey.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

	<div id="preloader">
        <div class="sk-spinner sk-spinner-wave" id="status">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div><!-- End Preload -->

 <!-- Header ================================================== -->
 <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col--md-4 col-sm-4 col-xs-4">
                    <a href="index.php" id="logo"> <!--edit kp---->
                        <img src="img/logo.png" width="130" height="80" alt="" data-retina="true" class="hidden-xs">

                    </a>
                </div>
                <nav class="col--md-8 col-sm-8 col-xs-8">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu
                            mobile</span></a>
                    <div class="main-menu" >
                        <div id="header_menu">
                            <img src="img/logo.png" width="130" height="80" alt="" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                        <!--------Edit kp------->
                        <ul>
						<li class="submenu"><a href="index.php"><i class="icon_house_alt " title="Home"></i></a></li>
						<li class="submenu"><a href="list_page.php">Restaurants</a></li>
                                <li class="submenu"><a href="contacts.php">Contact Us</a></li>
                                <li class="submenu"><a href="about.php">About us</a></li> 
                                <li class="submenu"><a href="faq.php">Faq</a></li>
                                
                                <li class="submenu"><a href="index_8.php">Gallery</a></li>
                                <li class="submenu"><a href="logout.php">Logout</a></li>
                                <li ><a href="cart_subdom.php" data-icon="&#xe015;" title="Cart"></a></li>
                                <li ><a href="my_orders.php" data-icon="&#xe0e6;" title="My Orders"></a></li>
						</ul>
                    </div><!-- End main-menu -->
                </nav>
            </div><!-- End row -->
        </div><!-- End container -->
    </header>
    <!-- End Header =============================================== -->
	
<!-- SubHeader =============================================== -->
<section class="parallax-window"  id="short"  data-parallax="scroll" data-image-src="img/cart2.jpg" data-natural-width="1400" data-natural-height="450">
    <div id="subheader">
    	<div id="sub_content">
    	 <h1>Place your order</h1>
            <div class="bs-wizard">
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Cart</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart_subdom.php" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Your Details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#0" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Complete!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart_3.php" class="bs-wizard-dot"></a>
                </div>  
		</div><!-- End bs-wizard --> 
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

   
<!-- Content ================================================== -->
<div class="container margin_60_35">
		<div class="row">
			<!--<div class="col-md-3">
            
				<div class="box_style_2 hidden-xs info">
					<h4 class="nomargin_top">Delivery time <i class="icon_clock_alt pull-right"></i></h4>
					<hr>
					<h4>Secure payment <i class="icon_creditcard pull-right"></i></h4>
				</div> End box_style_1 
                
				<div class="box_style_2 hidden-xs" id="help">
					<i class="icon_lifesaver"></i>
					<h4>Need <span>Help?</span></h4>
					<a href="tel://004542344599" class="phone">+45 423 445 99</a>
					<small>Monday to Friday 9.00am - 7.30pm</small>
				</div>-->
                
			</div><!-- End col-md-3 -->
            
			<div class="col-md-9">

				<div class="box_style_2" id="order_process">
					<h2 class="inner">Your order details</h2>
					<div class="form-group">
				<form action="user_dets.php" method="POST">
						<label>First name</label>
						<input type="text" class="form-control" id="firstname_order" name="txtfname" placeholder="First name">
					</div>
					<div class="form-group">
						<label>Last name</label>
						<input type="text" class="form-control" id="lastname_order" name="txtlname" placeholder="Last name">
					</div>
					<div class="form-group">
						<label>Telephone/mobile</label>
						<input type="text" id="tel_order" name="txtcon" class="form-control" placeholder="Telephone/mobile">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" id="email_booking_2" name="txtmail" class="form-control" placeholder="Your email">
					</div>
					<div class="form-group">
						<label>Your full address</label>
						<input type="text" id="address_order" name="txtadd" class="form-control" placeholder=" Your full address">
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<!--<div class="form-group">
								<label>City</label>
								<input type="text" id="city_order" name="city_order" class="form-control" placeholder="Your city">
							</div>-->
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
							<!--	<label>Postal code</label>
								<input type="text" id="pcode_oder" name="pcode_oder" class="form-control" placeholder=" Your postal code">-->
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Delivery Day</label>
								<select class="form-control" name="delivery_schedule_day" id="delivery_schedule_day">
									<option value="" selected>Select day</option>
									<option value="Today">Today</option>
									<option value="Tomorrow">Tomorrow</option>
								</select>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Delivery time</label>
								<select class="form-control" name="delivery_schedule_time" id="delivery_schedule_time">
									<option value="" selected>Select time</option>
									<option value="11.30am">11.30am</option>
									<option value="11.45am">11.45am</option>
									<option value="12.15am">12.15am</option>
									<option value="12.30am">12.30am</option>
									<option value="12.45am">12.45am</option>
									<option value="01.00pm">01.00pm</option>
									<option value="01.15pm">01.15pm</option>
									<option value="01.30pm">01.30pm</option>
									<option value="01.45pm">01.45pm</option>
									<option value="02.00pm">02.00pm</option>
									<option value="07.00pm">07.00pm</option>
									<option value="07.15pm">07.15pm</option>
									<option value="07.30pm">07.30pm</option>
									<option value="07.45pm">07.45pm</option>
									<option value="08.00pm">08.00pm</option>
									<option value="08.15pm">08.15pm</option>
									<option value="08.30pm">08.30pm</option>
									<option value="08.45pm">08.45pm</option>
								</select>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
				
								<label>Notes for the restaurant</label>
								<textarea class="form-control" style="height:150px" placeholder="Ex. Allergies, cash change..." name="notes" id="notes"></textarea>
				
						</div>
					</div>
				</div><!-- End box_style_1 -->
			</div><!-- End col-md-6 -->

			<div class="col-md-3" id="sidebar">
			<div class="theiaStickySidebar">
				<?php
				@$upd1=$_GET['upd1'];
				if($upd1=='upd1')
				{
		?> <input type='hidden' value='go' name='up'>
			<?php	} ?>
<input type="submit" class="btn_full"  value="GO TO CHECKOUT">
</form>


	
	

<?php 


	//$qty = $_GET['txtqty'];
	$conn = @mysqli_connect("localhost","root","","db_eatup");
	$sql = "select * from tbl_cart where user_Id='".$_SESSION["user_Id"]."'";
	$kp=@mysqli_query($conn,$sql);
		
	$total = 0;	
	$total1 = 0;
	while($disp=mysqli_fetch_array($kp))

	{  
		$total1= $disp['price']   *$disp['qty'] ;
	//$total1= $disp['price']   *$qty ;
		$total = $total1 +$total ;
		
		
		
		
 ?>	
	
	<?php } ?>


					<hr>
					<table class="table table_summary">
					<tbody>
					
						
					<tr>
						<td class="total" align="center" >TOTAL : <?php echo $total;  ?>
						</td>
					</tr>
					</tbody>
					</table>
					<hr>
				
					<a class="btn_full_outline" href="list_page.php"><i class="icon-right"></i> Add other items</a>
				</div><!-- End cart_box -->
                </div><!-- End theiaStickySidebar -->
			</div><!-- End col-md-3 -->
            
		</div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->

<!-- Footer ================================================== -->
<footer>
        <div class="container">
            <div class="row">
                
                <marquee bgcolor="pink" width="97%" scrollamount="20"><!-----kp edit-->
                    <h1 style="font-family:Bernard MT; color:orange;text-align: center; font-size:60px;">Eat Up!
                    </h1>
                    <h1
                        style="font-family:Buxton Sketch; font-size:23px; font-weight:bold; color:Maroon; text-align: center;">
                        The Taste That Rhymes With Your Cravings
                    </h1>
                </marquee>
                <div class="row">
                    <div class="col-md-12">
                        <div id="social_footer">
                            <ul>
                                <li><a href="#0"><i class="icon-facebook"></i></a></li>
                                <li><a href="#0"><i class="icon-twitter"></i></a></li>
                                <li><a href="#0"><i class="icon-google"></i></a></li>
                                <li><a href="#0"><i class="icon-instagram"></i></a></li>
                                <li><a href="#0"><i class="icon-pinterest"></i></a></li>
                                <li><a href="#0"><i class="icon-vimeo"></i></a></li>
                                <li><a href="#0"><i class="icon-youtube-play"></i></a></li>
                            </ul>
                            <p>© Eat Up!</p><!----kp edit-->
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
    </footer>
    <!-- End Footer =============================================== -->
<div class="layer"></div><!-- Mobile menu overlay mask -->

<!-- Login modal -->   
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="#" class="popup-form" id="myLogin">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
					<input type="text" class="form-control form-white" placeholder="Username">
					<input type="text" class="form-control form-white" placeholder="Password">
					<div class="text-left">
						<a href="#">Forgot Password?</a>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div><!-- End modal -->   
    
<!-- Register modal -->   
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="#" class="popup-form" id="myRegister">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
					<input type="text" class="form-control form-white" placeholder="Name">
					<input type="text" class="form-control form-white" placeholder="Last Name">
                    <input type="email" class="form-control form-white" placeholder="Email">
                    <input type="text" class="form-control form-white" placeholder="Password"  id="password1">
                    <input type="text" class="form-control form-white" placeholder="Confirm password"  id="password2">
                    <div id="pass-info" class="clearfix"></div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="accept_2" id="check_2" name="check_2" />
							<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Register</button>
				</form>
			</div>
		</div>
	</div><!-- End Register modal -->
    
     <!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_close"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon-search-6"></i>
			</button>
		</form>
	</div>
	<!-- End Search Menu -->
    
<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="js/ResizeSensor.min.js"></script>
<script src="js/theia-sticky-sidebar.min.js"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>

</body>
</html>
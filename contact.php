<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>EZER - Ezer provides essential support services to firms aiming to establish a presence by setting up a firm within the DIFC and ADGM.</title>
    <meta name="description" content="Ezer provides essential support services to firms aiming to establish a presence by setting up a firm within the DIFC and ADGM." />
    <meta name="keywords" content="-------" />
    <meta name="author" content="Pixell Media Technologies | VIGIL NATH K K " />
    <link
      rel="shortcut icon"
      href="assets4/img/logo/logo.png"
      type="image/x-icon"
    />
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="assets/css/global.css" />
    <?php
			include('inc/header.php')
		?>
    
  </head>
  <body class="xis-it-body">
    <!-- <div id="preloader"></div> -->
    <div class="up">
      <a href="#" class="scrollup text-center"
        ><i class="fas fa-chevron-up"></i
      ></a>
    </div>


<!-- Start of header section -->
<header id="xis-it-header" class="xis-it-header-section sticky-on" style="position: sticky; top: 0; width: 100%; z-index: 1000; background-color: #021613; ">
  <div class="xis-it-header-main-menu-wrap">
    <div class="container">
      <div class="main-menu-content d-flex justify-content-between align-items-center pb-2">
        <div class="brand-logo">
          <a href="#">
            <img src="assets4/img/logo/logo.png" alt="logo" style="height: 36px" />
          </a>
        </div>
        <div class="xis-it-main-menu-navigation">
          <nav class="xis-it-main-navigation-area scroll-nav clearfix ul-li">
            <ul id="xis-it-main-nav" class="nav navbar-nav clearfix">
              <li><a href="index.php">Home</a></li>
              <li><a href="index.php#xis-it-about">About</a></li>
              <li><a href="index.php#xis-it-service">Service</a></li>
              <li><a href="index.php#xis-it-pricing">Pricing</a></li>
              <!-- <li><a href="index.php#xis-it-footer">Contact</a></li> -->
            </ul>
          </nav>
        </div>
        <div class="xis-it-header-btn">
          <a class="d-flex justify-content-center align-items-center" href="index.php#xis-it-footer">Contact</a>
        </div>
      </div>
      <div class="mobile_menu position-relative">
        <div class="mobile_menu_button open_mobile_menu">
          <i class="fal fa-bars"></i>
        </div>
        <div class="mobile_menu_wrap">
          <div class="mobile_menu_overlay open_mobile_menu"></div>
          <div class="mobile_menu_content">
            <div class="mobile_menu_close open_mobile_menu">
              <i class="fal fa-times"></i>
            </div>
            <div class="m-brand-logo">
              <a href="#">
                <img src="assets4/img/logo/logo.png" alt="logo" />
              </a>
            </div>
            <nav class="mobile-main-navigation scroll-nav clearfix ul-li">
              <ul id="xis-main-nav" class="nav navbar-nav clearfix">
                <li><a href="#xis-it-slider">Home</a></li>
                <li><a href="#xis-it-about">About</a></li>
                <li><a href="#xis-it-service">Service</a></li>
                <li><a href="#xis-it-pricing">Pricing</a></li>
                <li><a href="#xis-it-footer">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /Mobile-Menu -->
      </div>
    </div>
  </div>
</header>
<!-- End of header section -->



    <!-- Contact Form Section -->
	<section class="contact-form-section" style="padding-top: 150px;">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Send Us Message</div>
				<h2><span>We’re Ready To Help You</span> <br> Send Us Message</h2>
			</div>
			
			<div class="inner-container">
				
				<!-- Contact Form -->
				<div class="contact-form">
					
					<!-- Contact Form -->
					<form method="post" action="sendemail.php" id="contact-form">
						<div class="row clearfix">
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="username" placeholder="Full Name" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="email" name="email" placeholder="Email Address" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="phone" placeholder="Phone Number" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="subject" placeholder="Subject" required>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<textarea class="" name="message" placeholder="Write Message"></textarea>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
								<button class="theme-btn btn-style-two"><span class="txt">Send Message <i class="fa fa-angle-right"></i></span></button>
							</div>
							
						</div>
					</form>
						
				</div>
				<!--End Comment Form -->
				
			</div>
		</div>
	</section>
	<!-- End Contact Form Section -->



  <?php
    include('inc/footer.php')
  ?>

    <!-- For Js Library -->
    <script src="assets4/js/jquery.min.js"></script>
    <script src="assets4/js/bootstrap.min.js"></script>
    <script src="assets4/js/popper.min.js"></script>
    <script src="assets4/js/appear.js"></script>
    <script src="assets4/js/slick.js"></script>
    <script src="assets4/js/jquery.counterup.min.js"></script>
    <script src="assets4/js/waypoints.min.js"></script>
    <script src="assets4/js/odometer.js"></script>
    <script src="assets4/js/wow.min.js"></script>
    <script src="assets4/js/parallax.min.js"></script>
    <script src="assets4/js/parallax-scroll.js"></script>
    <script src="assets4/js/typer.js"></script>
    <script src="assets/js/pagenav.js"></script>
    <script src="assets4/js/countdown.js"></script>
    <script src="assets4/js/jquery.nice-select.min.js"></script>
    <script src="assets4/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets4/js/jquery.magnific-popup.min.js"></script>
    <script src="assets4/js/isotope.pkgd.js"></script>
    <script src="assets4/js/rbtools.min.js"></script>
    <script src="assets4/js/rs6.min.js"></script>
    <script src="assets4/js/script.js"></script>
  </body>
</html>

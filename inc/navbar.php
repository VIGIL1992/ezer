<!-- CSS -->
<link rel="stylesheet" href="assets4/css/hamMenu.css" />
<!-- <link rel="stylesheet" href="assets4/css/style.css"> -->

<!-- Start of header section
	============================================= -->
  <header id="xis-it-header" class="xis-it-header-section">
      <div class="xis-it-header-main-menu-wrap">
        <div class="container" style="padding: 5px;">
          <div class="main-menu-content d-flex justify-content-between align-items-center">
            <div class="brand-logo">
              <a href="index.php">
                <img
                  src="assets4/img/logo/logo.png"
                  alt="logo"
                  style="height: 36px"
                />
              </a>
            </div>
            <div class="xis-it-main-menu-navigation">
              <div class="off-screen-menu">
                <nav class="mobile-main-navigation scroll-nav clearfix ul-li">
                  <ul id="xis-main-nav" class="nav navbar-nav clearfix">
                    <li><a href="index.php#xis-it-slider">Home</a></li>
                    <li><a href="index.php#xis-it-about">About</a></li>
                    <li>
                      <!-- <a href="services.php">Services</a> -->
                       <a href="index.php#xis-it-service">Services</a>
                      <!-- <ul class="dropdown-menu">
                        <li><a href="business.php">Business Consultancy</a></li>
                        <li><a href="marketing.php">Marketing Services</a></li>
                        <li><a href="hr.php">HR Recruitment</a></li>
                        <li><a href="customer.php">Customer Experience</a></li>
                      </ul> -->
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
                </nav>
              </div>

              <nav>
                <div class="ham-menu">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </nav>
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
                  <a href="index.php">
                    <img src="assets4/img/logo/logo.png" alt="logo"
                  /></a>
                </div>
                <nav class="mobile-main-navigation scroll-nav clearfix ul-li">
                  <ul id="xis-main-nav" class="nav navbar-nav clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#xis-it-about">About</a></li>
                    <li>
                      <a href="index.php#xis-it-service">Services</a>
                      <!-- <ul class="dropdown-menu">
                        <li><a href="business.php">Business Consultancy</a></li>
                        <li><a href="marketing.php">Marketing Services</a></li>
                        <li><a href="hr.php">HR Recruitment</a></li>
                        <li><a href="customer.php">Customer Experience</a></li>
                      </ul> -->
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- /Mobile-Menu -->
          </div>
        </div>
      </div>
    </header>
    <!-- End of header section
	============================================= -->

<style>
 /* Mobile submenu display (always visible when menu is open) */
.mobile_menu_wrap .dropdown-menu {
  display: block !important; /* override hidden default */
  position: static; /* no absolute positioning in burger menu */
  background: none; /* or keep if you want a background */
  padding-left: 15px; /* indents to show nesting */
}

.mobile_menu_wrap .dropdown-menu li a {
  color: #fff; /* adjust as needed */
}
.mobile_menu_wrap .dropdown-menu {
  display: block !important;
  position: static;
  background: none;
  padding-left: 15px;
}


</style>

  <!-- JavaScript -->
<script src="assets4/js/hamMenu.js"></script>


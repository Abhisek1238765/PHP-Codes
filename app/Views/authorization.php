<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>
<?= $this->include('partials/metadata.php'); ?>
<?= $this->include('partials/othercss.php'); ?>
<title>Home | Real Estate & Luxury Homes</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
<!-- Apple Touch Icon -->
<link href="images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
<link href="images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
<link href="images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">


<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="wrapper ovh">
  <div class="preloader"></div>  
  <?= $this->include('partials/otherheader.php'); ?>
  <?= $this->include('partials/enquiry.php'); ?>
  <div class="rightside-hidden-bar">
    <div class="hsidebar-header">
      <div class="sidebar-close-icon"><span class="far fa-times"></span></div>
      <h4 class="title">Welcome to Realton</h4>
    </div>
    <div class="hsidebar-content">
      <div class="hiddenbar_navbar_content">
        <div class="hiddenbar_navbar_menu">
          <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" href="#" role="button">Apartments</a></li>
            <li class="nav-item"> <a class="nav-link" href="#" role="button">Bungalow</a></li>
            <li class="nav-item"> <a class="nav-link" href="#" role="button">Houses</a></li>
            <li class="nav-item"> <a class="nav-link" href="#" role="button">Loft</a></li>
            <li class="nav-item"> <a class="nav-link" href="#" role="button">Office</a></li>
            <li class="nav-item"> <a class="nav-link" href="#" role="button">Townhome</a></li>
            <li class="nav-item"> <a class="nav-link" href="#" role="button">Villa</a></li>
          </ul>
        </div>
        <div class="hiddenbar_footer position-relative bdrt1">
          <div class="row pt45 pb30 pl30">
            <div class="col-auto">
              <div class="contact-info">
                <p class="info-title dark-color">Total Free Customer Care</p>
                <h6 class="info-phone dark-color"><a href="%2b(0)-123-050-945-02.html">+(0) 123 050 945 02</a></h6>
              </div>
            </div>
            <div class="col-auto">
              <div class="contact-info">
                <p class="info-title dark-color">Nee Live Support?</p>
                <h6 class="info-mail dark-color"><a href="mailto:hi@homez.com">hi@homez.com</a></h6>
              </div>
            </div>
          </div>
          <div class="row pt30 pb30 bdrt1">
            <div class="col-auto">
              <div class="social-style-sidebar d-flex align-items-center pl30">
                <h6 class="me-4 mb-0">Follow us</h6>
                <a class="me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="me-3" href="#"><i class="fab fa-twitter"></i></a>
                <a class="me-3" href="#"><i class="fab fa-instagram"></i></a>
                <a class="me-3" href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End Menu In Hiddn SideBar --> 
  <!-- Filter Content In Hiddn SideBar -->
  <div class="lefttside-hidden-bar">
    <div class="hsidebar-header">
      <div class="sidebar-close-icon"><span class="far fa-times"></span></div>
      <h4 class="title">Find your home</h4>
    </div>
    <div class="hsidebar-content">
    </div>
  </div>
  <!--End Filter Content In Hiddn SideBar -->

  <div class="hiddenbar-body-ovelay"></div>

  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header innerpage-style">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="menubar" href="#menu"><img src="<?= base_url(); ?>public/assets/images/mobile-dark-nav-icon.svg" alt=""></a>
            <a class="mobile_logo" href="#"><img src="<?= base_url(); ?>public/assets/images/header-logo3.png" alt=""></a>
            <a href="page-login.html"><span class="icon fz18 far fa-user-circle"></span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="">
      <ul>
        <li><a href="index.html"><span>Home</span></a>
          
        </li>
        
        <li><span>About Us</span>
           <ul>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="chairmanmessage.html">Chairman Message</a></li>
           
          </ul>
        </li>
        <li><span>Running Project</span>
          <ul>
            <li><a href="oropalm.html">ORO Palm</a></li>
            <li><a href="oroemirates.html">ORO Emirates</a></li>
          </ul>
        </li>
        <li><span>Complet Project</span>
          <ul>
            <li><a href="oroavenue.html">ORO AVENUE</a></li>
              <li><a href="oropalace.html">ORO PALACE</a></li>
          </ul>
        </li>
		
		<li><a href="facilities.html">Facilities</a></li>
		 <li><a href="authorization.html">Authorozation</a></li>
		  <li><a href="gallery.html"><span>Gallery</span></a>
          
        </li>
		 
     
	   <li><a href="contactus.html">Contact Us</a></li>
		
		
        <li class="px-3 mobile-menu-btn">
          <a href="enquiry.html" class="ud-btn btn-thm text-white">Enquiry<i class="fal fa-arrow-right-long"></i></a>
        </li>
        <!-- Only for Mobile View -->
      </ul>
    </nav>
  </div>

  <div class="body_content">
    <!-- UI Elements Sections -->
   <section class="breadcumb-section bgc-f7">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <h2 class="title">CERTIFICATE </h2>
              <div class="breadcumb-list">
                <a href="#">Home</a>
                <a href="#">Authorisation</a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    
	
	<section class="pt0 pb90 bgc-f7">
      <div class="container">
        
        <div class="row">
          <div class="col-sm-6 col-lg-6">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="<?= base_url(); ?>public/assets/images/rareapproval-1.jpg" alt="">
               
               
              </div>
              
            </div>
          </div>
          <div class="col-sm-6 col-lg-6">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="<?= base_url(); ?>public/assets/images/rareapproval-2.jpg" alt="">
               
               
              </div>
              
            </div>
          </div>
          
          
          
          
          
          
          
        </div>
        
      </div>
    </section>
	
    <?= $this->include('partials/footer.php'); ?>
    <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
  </div>
</div>
<?= $this->include('partials/otherjs.php'); ?>
</body>


</html>
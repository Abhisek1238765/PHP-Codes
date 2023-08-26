<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<?= $this->include('partials/metadata.php'); ?>
<?= $this->include('partials/css.php'); ?>
<title>Home | Real Estate & Luxury Homes</title>
 <link href="images/favicon.png" rel="shortcut icon">
</head>
<body>
<div class="wrapper ovh">  
  <?= $this->include('partials/header.php'); ?>  
  <!-- Signup Modal -->
  <?= $this->include('partials/enquiry.php'); ?>
  <!-- Menu In Hiddn SideBar -->
  <div class="rightside-hidden-bar">
    <div class="hsidebar-header">
      <div class="sidebar-close-icon"><span class="far fa-times"></span></div>
      <h4 class="title">Welcome to ORO Infra</h4>
    </div>
    <div class="hsidebar-content">
      <div class="hiddenbar_navbar_content">
       <p style="padding:30px;">By aiming to take the life quality to an upper level with the whole realized Projects, oroinfra continues to be the address of luxury.</p>
        <div class="hiddenbar_footer position-relative bdrt1">
          <div class="row pt45 pb30 pl30">
            <div class="col-auto">
              <div class="contact-info">
                <p class="info-title dark-color">Contact Number</p>
                <h6 class="info-phone dark-color"><a href="#">+91-9337244894</a></h6>
              </div>
            </div>
            <div class="col-auto">
              <div class="contact-info">
                <p class="info-title dark-color">Email</p>
                <h6 class="info-mail dark-color"><a href="mailto:ranjan@oroinfra.in">ranjan@oroinfra.in</a></h6>
              </div>
            </div>
          </div>
          <div class="row pt30 pb30 bdrt1">
            <div class="col-auto">
              <div class="social-style-sidebar d-flex align-items-center pl30">
                <h6 class="me-4 mb-0">Follow us</h6>
                <a class="me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="me-3" href="#"><i class="fab fa-youtube"></i></a>
                <a class="me-3" href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End Menu In Hiddn SideBar --> 
  <!-- Advance Feature Modal Start -->
  <div class="advance-feature-modal">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header pl30 pr30">
            <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body pb-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="widget-wrapper">
                  <h6 class="list-title">Price Range</h6>
                  <!-- Range Slider Mobile Version -->
                  <div class="range-slider-style modal-version">
                    <div class="range-wrapper">
                      <div class="mb30 mt35" id="slider"></div>
                      <div class="d-flex align-items-center">
                        <span id="slider-range-value1"></span><i class="fa-sharp fa-solid fa-minus mx-2 dark-color icon"></i>
                        <span id="slider-range-value2"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Type</h6>
                  <div class="form-style2 input-group">
                    <select class="selectpicker" data-live-search="true" data-width="100%">
                      <option>Property</option>
                      <option data-tokens="Apartments">Apartments</option>
                      <option data-tokens="Bungalow">Bungalow</option>
                      <option data-tokens="Houses">Houses</option>
                      <option data-tokens="Loft">Loft</option>
                      <option data-tokens="Office">Office</option>
                      <option data-tokens="Townhome">Townhome</option>
                      <option data-tokens="Villa">Villa</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Property ID</h6>
                  <div class="form-style2">
                    <input type="text" class="form-control" placeholder="RT04949213">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Bedrooms</h6>
                  <div class="d-flex">
                    <div class="selection">
                      <input id="xany" name="xbeds" type="radio" checked>
                      <label for="xany">any</label>
                    </div>
                    <div class="selection">
                      <input id="xoneplus" name="xbeds" type="radio">
                      <label for="xoneplus">1+</label>
                    </div>
                    <div class="selection">
                      <input id="xtwoplus" name="xbeds" type="radio">
                      <label for="xtwoplus">2+</label>
                    </div>
                    <div class="selection">
                      <input id="xthreeplus" name="xbeds" type="radio">
                      <label for="xthreeplus">3+</label>
                    </div>
                    <div class="selection">
                      <input id="xfourplus" name="xbeds" type="radio">
                      <label for="xfourplus">4+</label>
                    </div>
                    <div class="selection">
                      <input id="xfiveplus" name="xbeds" type="radio">
                      <label for="xfiveplus">5+</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Bathrooms</h6>
                  <div class="d-flex">
                    <div class="selection">
                      <input id="yany" name="ybath" type="radio" checked>
                      <label for="yany">any</label>
                    </div>
                    <div class="selection">
                      <input id="yoneplus" name="ybath" type="radio">
                      <label for="yoneplus">1+</label>
                    </div>
                    <div class="selection">
                      <input id="ytwoplus" name="ybath" type="radio">
                      <label for="ytwoplus">2+</label>
                    </div>
                    <div class="selection">
                      <input id="ythreeplus" name="ybath" type="radio">
                      <label for="ythreeplus">3+</label>
                    </div>
                    <div class="selection">
                      <input id="yfourplus" name="ybath" type="radio">
                      <label for="yfourplus">4+</label>
                    </div>
                    <div class="selection">
                      <input id="yfiveplus" name="ybath" type="radio">
                      <label for="yfiveplus">5+</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Location</h6>
                  <div class="form-style2 input-group">
                    <select class="selectpicker" data-live-search="true" data-width="100%">
                      <option>All Cities</option>
                      <option data-tokens="California">California</option>
                      <option data-tokens="Chicago">Chicago</option>
                      <option data-tokens="LosAngeles">Los Angeles</option>
                      <option data-tokens="Manhattan">Manhattan</option>
                      <option data-tokens="NewJersey">New Jersey</option>
                      <option data-tokens="NewYork">New York</option>
                      <option data-tokens="SanDiego">San Diego</option>
                      <option data-tokens="SanFrancisco">San Francisco</option>
                      <option data-tokens="Texas">Texas</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Square Feet</h6>
                  <div class="space-area">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="form-style1">
                        <input type="text" class="form-control" placeholder="Min.">
                      </div>
                      <span class="dark-color">-</span>
                      <div class="form-style1">
                        <input type="text" class="form-control" placeholder="Max">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="widget-wrapper mb0">
                  <h6 class="list-title mb10">Amenities</h6>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget-wrapper mb20">
                  <div class="checkbox-style1">
                    <label class="custom_checkbox">Attic
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Basketball court
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Air Conditioning
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Lawn
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget-wrapper mb20">
                  <div class="checkbox-style1">
                    <label class="custom_checkbox">TV Cable
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Dryer
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Outdoor Shower
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Washer
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget-wrapper mb20">
                  <div class="checkbox-style1">
                    <label class="custom_checkbox">Lake view
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Wine cellar
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Front yard
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Refrigerator
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <a class="reset-button" href="#"><span class="flaticon-turn-back"></span><u>Reset all filters</u></a>
            <div class="btn-area">
              <button class="ud-btn btn-thm"><span class="flaticon-search align-text-top pr10"></span>Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Advance Feature Modal End -->
  <div class="hiddenbar-body-ovelay"></div>

  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header innerpage-style">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="menubar" href="#menu"><img src="<?= base_url(); ?>/public/assets/images/mobile-dark-nav-icon.svg" alt=""></a>
            <a class="mobile_logo" href="#"><img src="<?= base_url(); ?>/public/assets/images/header-logo3.png" alt=""></a>
            <a href="page-login.html"><span class="icon fz18 far fa-user-circle"></span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <?= $this->include('partials/mobileheader.php'); ?> 
  </div>

  <div class="body_content">
    <div class="home8-sidebar-wrapper d-none d-xxl-block">
      <a class="sidemenu-btn filter-btn-right mt35 d-block text-center" href="#"><img src="<?= base_url(); ?>/public/assets/images/dark-nav-icon.svg" alt=""></a>
      <div class="wrapper">
        <a class="tel" href="#">9337244894</a>
        <a class="mail" href="mailto:oroinfra@gmail.com">oroinfra@gmail.com</a>
        <div class="social-style2">
          <a class="text-center" href="#"><i class="fab fa-facebook-f d-block"></i></a>
          <a class="text-center" href="#"><i class="fab fa-youtube d-block"></i></a>
          <a class="text-center" href="#"><i class="fab fa-instagram d-block"></i></a>
         
        </div>
        <a href="#explore-property">
          <div class="mouse_scroll at-home8 text-center d-block">
            <img src="<?= base_url(); ?>/public/assets/images/about/home-scroll2.png" alt="">
          </div>
        </a>
      </div>
    </div>
    <!-- Home Banner Style V8 -->
    <div class="banner-wrapper position-relative">
      <section class="thumbimg-countnumber-carousel owl-theme owl-carousel p-0">
        <div class="item" >
          <div class="slider-slide-item" style="background-image: url(<?= base_url(); ?>/public/assets/images/home/home-5-1.jpg);" data-thumb="<?= base_url(); ?>/public/assets/images/home/home-5-1.jpg">
            <!--<div class="container">
              <div class="row">
                <div class="col-lg-12 text-left">
                  <h4 class="h1 slider-subtitle text-white">$986,00</h4>
                  <h3 class="h6 slider-title text-white">Studio on Grand Avenue</h3>
                  <p class="mb30 slider-text text-white">32 Beds  -  91 Baths  -  1500 sq ft</p>
                  <div class="slider-btn-block"><a href="#" class="ud-btn btn-white slider-btn">View Details<i class="fal fa-arrow-right-long"></i></a></div>
                </div>
              </div>
            </div>-->
			
          </div>
        </div>
        
        <div class="item" >
          <div class="slider-slide-item" style="background-image: url(<?= base_url(); ?>/public/assets/images/home/home-5-3.jpg);" data-thumb="<?= base_url(); ?>/public/assets/images/home/home-5-3.jpg">
            
			
          </div>
        </div>
        <div class="item" >
          <div class="slider-slide-item" style="background-image: url(<?= base_url(); ?>/public/assets/images/home/home-5-4.jpg);" data-thumb="<?= base_url(); ?>/public/assets/images/home/home-5-4.jpg">
            
          </div>
        </div>
      </section>
      <div class="carousel-control-block d-flex d-md-none">
        <div class="carousel-btn-block slider-navigation-btn"> <span class="carousel-btn left-btn"><i class="fa fa-angle-up"></i></span> <span class="carousel-btn right-btn"><i class="fa fa-angle-down"></i></span> </div>
        <div class="slider-number-count"></div>
      </div>
    </div>

    <!-- Our Partners --> 
    

    <!-- Property Cities -->
    <section id="explore-property" class="pb40-md pb90">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title">RUNNING PROJECT</h2>
              
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
            <div class="explore-apartment-slider dots_none slider-dib-sm slider-3-grid vam_nav_style owl-theme owl-carousel">
              <div class="item">
                <div class="listing-style9">
                  <div class="list-thumb">
                    <img class="w-100" src="<?= base_url(); ?>/public/assets/images/listings/xl-5.jpg" alt="">
                   <div class="list-meta">
                      <a href="#"><span class="flaticon-like"></span></a>
                      <a href="#"><span class="flaticon-new-tab"></span></a>
                      <a href="#"><span class="flaticon-fullscreen"></span></a>
                    </div>
                  
                  </div>
                  <div class="list-content">
                 
                    <h6 class="list-title"><a href="page-property-single-v1.html">ORO AVENUE</a><br>(2 BHK/3BHK)</h6>
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style9">
                  <div class="list-thumb">
                    <img class="w-100" src="<?= base_url(); ?>/public/assets/images/listings/xl-5.jpg" alt="">
                   
                  <div class="list-meta">
                      <a href="#"><span class="flaticon-like"></span></a>
                      <a href="#"><span class="flaticon-new-tab"></span></a>
                      <a href="#"><span class="flaticon-fullscreen"></span></a>
                    </div>
                  </div>
                  <div class="list-content">
                 
                    <h6 class="list-title"><a href="page-property-single-v1.html">ORO AVENUE</a><br>(2 BHK/3BHK)</h6>
                    
                  </div>
                </div>
              </div>
             <div class="item">
                <div class="listing-style9">
                  <div class="list-thumb">
                    <img class="w-100" src="<?= base_url(); ?>/public/assets/images/listings/xl-5.jpg" alt="">
                   <div class="list-meta">
                      <a href="#"><span class="flaticon-like"></span></a>
                      <a href="#"><span class="flaticon-new-tab"></span></a>
                      <a href="#"><span class="flaticon-fullscreen"></span></a>
                    </div>
                  
                  </div>
                  <div class="list-content">
                 
                    <h6 class="list-title"><a href="page-property-single-v1.html">ORO AVENUE</a><br>(2 BHK/3BHK)</h6>
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style9">
                  <div class="list-thumb">
                    <img class="w-100" src="<?= base_url(); ?>/public/assets/images/listings/xl-5.jpg" alt="">
                   
                  <div class="list-meta">
                      <a href="#"><span class="flaticon-like"></span></a>
                      <a href="#"><span class="flaticon-new-tab"></span></a>
                      <a href="#"><span class="flaticon-fullscreen"></span></a>
                    </div>
                  </div>
                  <div class="list-content">
                 
                    <h6 class="list-title"><a href="page-property-single-v1.html">ORO AVENUE</a><br>(2 BHK/3BHK)</h6>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured homes -->
    <!--<section class="pt-0 pb90 pb30-md">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="main-title wow fadeInUp" data-wow-delay="100ms">
              <h2 class="title">Completed Projects</h2>
             
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="explore-apartment-5col-slider navi_pagi_top_right slider-4-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="apartment-style2 bdrs12 overflow-hidden text-center mb30">
                    <div class="apartment-img"><img src="images/listings/as-6.jpg" alt=""></div>
                    <div class="apartment-content">
                      <h6 class="title mb-0">ORO AVENUE</h6>
                     
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="apartment-style2 bdrs12 overflow-hidden text-center mb30">
                    <div class="apartment-img"><img src="images/listings/as-7.jpg" alt=""></div>
                    <div class="apartment-content">
                      <h6 class="title mb-0">ORO PALACE</h6>
                   
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="apartment-style2 bdrs12 overflow-hidden text-center mb30">
                    <div class="apartment-img"><img src="images/listings/as-8.jpg" alt=""></div>
                    <div class="apartment-content">
                      <h6 class="title mb-0">ORO CASTEL</h6>
                     
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="apartment-style2 bdrs12 overflow-hidden text-center mb30">
                    <div class="apartment-img"><img src="images/listings/as-9.jpg" alt=""></div>
                    <div class="apartment-content">
                      <h6 class="title mb-0">ORO TOWER</h6>
                  
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="apartment-style2 bdrs12 overflow-hidden text-center mb30">
                    <div class="apartment-img"><img src="images/listings/as-6.jpg" alt=""></div>
                    <div class="apartment-content">
                      <h6 class="title mb-0">ORO HEIGHT</h6>
                      
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="apartment-style2 bdrs12 overflow-hidden text-center mb30">
                    <div class="apartment-img"><img src="images/listings/as-7.jpg" alt=""></div>
                    <div class="apartment-content">
                      <h6 class="title mb-0">ORO PARADISE</h6>
                    
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="apartment-style2 bdrs12 overflow-hidden text-center mb30">
                    <div class="apartment-img"><img src="images/listings/as-8.jpg" alt=""></div>
                    <div class="apartment-content">
                      <h6 class="title mb-0">ORO VILA</h6>
                   
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="apartment-style2 bdrs12 overflow-hidden text-center mb30">
                    <div class="apartment-img"><img src="images/listings/as-9.jpg" alt=""></div>
                    <div class="apartment-content">
                      <h6 class="title mb-0">ORO PLAZA</h6>
                    
                    </div>
                  </div>
                </a>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </section>-->

    <!-- CTA Banner -->
   
<section class="pt30 pb-0">
      <div class="cta-banner5 bgc-f7 ms-auto maxw1850 pt100 pt60-lg pb90 pb30-lg position-relative overflow-hidden mx20-lg">
        <div class="container">
          <div class="row">
            <div class="col-md-11 wow fadeInUp" data-wow-delay="200ms">
              <div class="main-title">
                <h2 class="title text-capitalize">Let’s find the right selling <br class="d-none d-md-block"> option for you</h2>
                <p class="text">Aliquam lacinia diam quis lacus euismod</p>
              </div>
            </div>
          </div>
          <div class="row wow fadeInDown" data-wow-delay="500ms">
            <div class="col-sm-6 col-lg-4">
              <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
                <span class="icon fz40 flaticon-security"></span>
                <h4 class="iconbox-title mt20">Property Management</h4>
                <p class="text mb-0">Nullam sollicitudin blandit eros eu <br> pretium. </p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
                <span class="icon fz40 flaticon-keywording"></span>
                <h4 class="iconbox-title mt20">Mortgage Services</h4>
                <p class="text mb-0">Nullam sollicitudin blandit eros eu <br> pretium. </p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
                <span class="icon fz40 flaticon-investment"></span>
                <h4 class="iconbox-title mt20">Currency Services</h4>
                <p class="text mb-0">Nullam sollicitudin blandit eros eu <br> pretium. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   

    <!-- Explore Apartment -->
 

    <!-- CTA Banner -->
    <section class="pt30 pb-0">
      <div class="cta-banner6 bgc-thm-light ms-auto maxw1850 pt100 pt60-lg pb100 pb30-lg position-relative overflow-hidden mx20-lg">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="100ms"></div>
            <div class="col-xl-5 offset-xl-1 wow fadeInRight" data-wow-delay="300ms">
              <div class="home8-property-slider">
                <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide" data-swiper-slide-index="00">
                      <div class="listing-style14 pt0-xs pr0-xs">
                        <div class="list-content">
                          <div class="d-flex mb30">
                            <div class="list-tag fz12 mr20"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                            
                          </div>
                          <h4 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h4>
                          <p class="list-text fz15">bhubaneswar, odisha, india</p>
                          <div class="list-meta d-block d-sm-flex align-items-center mt30 mb40">
                            <a class="d-flex mb-2 mb-sm-0 align-items-center" href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a class="d-flex mb-2 mb-sm-0 align-items-center" href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a class="d-flex align-items-center" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                          <div class="row mb20">
                            <div class="col-auto">
                              <div class="contact-info">
                                <p class="info-title ff-heading mb-2">Total Free Customer Care</p>
                                <h6 class="info-phone"><a href="+91 9337244894.html">+91 9337244894</a></h6>
                              </div>
                            </div>
                            <div class="col-auto">
                              <div class="contact-info">
                                <p class="info-title ff-heading mb-2">Need Live Support?</p>
                                <h6 class="info-mail"><a href="mailto:oroinfra@gmail.com">oroinfra@gmail.com</a></h6>
                              </div>
                            </div>
                          </div>
                          <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                              <div class="list-meta2 mb15-xs">
                                <h4 class="list-price mb-0">$14,000 / mo</h4>
                              </div>
                            </div>
                           
                          </div>
                          <div class="list-meta2 d-flex justify-content-between align-items-center">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="01">
                      <div class="listing-style14 pt0-xs pr0-xs">
                        <div class="list-content">
                          <div class="d-flex mb30">
                            <div class="list-tag fz12 mr20"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                           
                          </div>
                          <h4 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h4>
                          <p class="list-text fz15">bhubaneswar, odisha, india</p>
                          <div class="list-meta d-block d-sm-flex align-items-center mt30 mb40">
                            <a class="d-flex mb-2 mb-sm-0 align-items-center" href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a class="d-flex mb-2 mb-sm-0 align-items-center" href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a class="d-flex align-items-center" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                          <div class="row mb20">
                            <div class="col-auto">
                              <div class="contact-info">
                                <p class="info-title ff-heading mb-2">Total Free Customer Care</p>
                                <h6 class="info-phone"><a href="+91 9337244894.html">+91 9337244894</a></h6>
                              </div>
                            </div>
                            <div class="col-auto">
                              <div class="contact-info">
                                <p class="info-title ff-heading mb-2">Need Live Support?</p>
                                <h6 class="info-mail"><a href="mailto:oroinfra@gmail.com">oroinfra@gmail.com</a></h6>
                              </div>
                            </div>
                          </div>
                          <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                              <div class="list-meta2">
                                <h4 class="list-price mb-0">$14,000 / mo</h4>
                              </div>
                            </div>
                           
                          </div>
                          <div class="list-meta2 d-flex justify-content-between align-items-center">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="02">
                      <div class="listing-style14 pt0-xs pr0-xs">
                        <div class="list-content">
                          <div class="d-flex mb30">
                            <div class="list-tag fz12 mr20"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                           
                          </div>
                          <h4 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h4>
                          <p class="list-text fz15">bhubaneswar, odisha, india</p>
                          <div class="list-meta d-block d-sm-flex align-items-center mt30 mb40">
                            <a class="d-flex mb-2 mb-sm-0 align-items-center" href="#"><span class="flaticon-bed"></span>3 bed</a>
                            <a class="d-flex mb-2 mb-sm-0 align-items-center" href="#"><span class="flaticon-shower"></span>4 bath</a>
                            <a class="d-flex align-items-center" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                          </div>
                          <div class="row mb20">
                            <div class="col-auto">
                              <div class="contact-info">
                                <p class="info-title ff-heading mb-2">Total Free Customer Care</p>
                                <h6 class="info-phone"><a href="+91 9337244894.html">+91 9337244894</a></h6>
                              </div>
                            </div>
                            <div class="col-auto">
                              <div class="contact-info">
                                <p class="info-title ff-heading mb-2">Need Live Support?</p>
                                <h6 class="info-mail"><a href="mailto:oroinfra@gmail.com">oroinfra@gmail.com</a></h6>
                              </div>
                            </div>
                          </div>
                          <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                              <div class="list-meta2">
                                <h4 class="list-price mb-0">$14,000 / mo</h4>
                              </div>
                            </div>
                            
                          </div>
                          <div class="list-meta2 d-flex justify-content-between align-items-center">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swpr_paginations">
                    <div class="slideactive">01</div>
                    <div class="slidetotal">03</div>
                  </div>
                  <!-- </div> -->
                  <div class="posr mt-4">
                    <div class="swpr_custom_prgrsba swiper-pagination swiper-pagination-progressbar"> <span class="swiper-pagination-progressbar-fill"></span> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Explore Cities -->
   

    <!-- Our Blog -->
    <section class="pt-0 mb0-md pb90 pb30-md" style="margin-top:50px;">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="100ms">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title">From Our Blog</h2>
              <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mt-0 mt-lg-5 mb-4">
              <a class="ud-btn2" href="#">See More Blog<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-sm-6 col-lg-4">
            <div class="blog-style1">
              <div class="blog-img"><img class="w-100" src="<?= base_url(); ?>/public/assets/images/blog/blog-1.jpg" alt=""></div>
              <div class="blog-content">
                <div class="date">
                  <span class="month">July</span>
                  <span class="day">28</span>
                </div>
                <a class="tag" href="#">Living Room</a>
                <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="blog-style1">
              <div class="blog-img"><img class="w-100" src="<?= base_url(); ?>/public/assets/images/blog/blog-2.jpg" alt=""></div>
              <div class="blog-content">
                <div class="date">
                  <span class="month">July</span>
                  <span class="day">28</span>
                </div>
                <a class="tag" href="#">Living Room</a>
                <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="blog-style1">
              <div class="blog-img"><img class="w-100" src="<?= base_url(); ?>/public/assets/images/blog/blog-3.jpg" alt=""></div>
              <div class="blog-content">
                <div class="date">
                  <span class="month">July</span>
                  <span class="day">28</span>
                </div>
                <a class="tag" href="#">Living Room</a>
                <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
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
<?= $this->include('partials/js.php'); ?>
</body>


</html>
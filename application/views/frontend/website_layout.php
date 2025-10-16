<?php 
$company_info = getMainCompany();
$social_media = isset($company_info->social_media) && $company_info->social_media?json_decode($company_info->social_media):'';
$getWhiteLabel = json_decode(isset($company_info->white_label) && $company_info->white_label?$company_info->white_label:'');
$login_customer = $this->session->userdata('customer_id');

$wl = $getWhiteLabel;
$system_logo = '';
if($wl){
    if($wl->site_name){
        $site_name = $wl->site_name;
    }
    if($wl->footer){
        $footer = $wl->footer;
    }
    if($wl->system_logo){
        $system_logo = base_url()."images/".$wl->system_logo;
    }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo escape_output($site_name); ?></title>

  <!-- Vendor Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/website/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/website/css/plugins/animate.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/website/css/plugins/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/website/css/plugins/slick.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/website/css/plugins/slick-theme.css">
  <!-- Icon Fonts -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/website/fonts/flaticon/flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/website/fonts/font-awesome/css/all.min.css">

  <!-- Page Specific Styles -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/website/css/plugins/leaflet.css">

  <!-- Slices Style sheet -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/website/css/style.css">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

</head>

<body>
  <input type="hidden" id="base_url" value="<?php echo base_url();?>">
  <input type="hidden" id="precision" value="<?php echo $company_info->precision; ?>">
  <input type="hidden" id="currency" value="<?php echo $company_info->currency; ?>">

  <!-- Preloader Start -->
  <div class="ct-preloader">
    <div class="ct-preloader-inner">
      <div class="lds-ripple"><div></div><div></div></div>
    </div>
  </div>
  <!-- Preloader End -->

  <?php
    if (isset($header_content)) {
      //This variable could not be escaped because this is html content
      echo ($header_content);
    }
  ?>
  <?php
    if (isset($main_content)) {
      //This variable could not be escaped because this is html content
      echo ($main_content);
    }
  ?>

  <!-- Footer Start -->
  <footer class="ct-footer footer-dark">
    <!-- Top Footer -->
    <div class="container">
      <div class="footer-top">
        <div class="footer-logo">
          <img src="<?php echo base_url()?>/images/<?php echo isset($getWhiteLabel->system_logo) && $getWhiteLabel->system_logo ? $getWhiteLabel->system_logo : '' ;?>" alt="logo">
        </div>
      </div>
    </div>

    <!-- Middle Footer -->
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title"><?php echo lang('information');?></h5>
            <ul>
              <li> <a href="<?php echo base_url()?>"><?php echo lang('home');?></a> </li>
              <li> <a href="<?php echo base_url() . 'about-us';?>"><?php echo lang('about_us');?></a> </li>
              <li> <a href="<?php echo base_url() . 'online-order-page';?>"><?php echo lang('Order_Online');?></a> </li>
              <li> <a href="<?php echo base_url() . 'reservation';?>"><?php echo lang('reservation');?></a> </li>
              <li> <a href="<?php echo base_url() . 'contact-us';?>"><?php echo lang('contact_us');?></a> </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title"><?php echo lang('top_items');?></h5>
            <ul>
              <li> <a href="#"><?php echo lang('pepperoni');?></a> </li>
              <li> <a href="#"><?php echo lang('swiss_mushroom');?></a> </li>
              <li> <a href="#"><?php echo lang('barbeque_chicken');?></a> </li>
              <li> <a href="#"><?php echo lang('vegetarian');?></a> </li>
              <li> <a href="#"><?php echo lang('ham_cheese');?></a> </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title"><?php echo lang('others');?></h5>
            <ul>
              <li> <a href="<?php echo base_url() . 'checkout';?>"><?php echo lang('checkout');?></a> </li>
              <li> <a href="#" class="cart-trigger"><?php echo lang('cart');?></a> </li>
              <li> <a href="<?php echo base_url() . 'online-order-page';?>"><?php echo lang('product');?></a></li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 footer-widget">
            <h5 class="widget-title"><?php echo lang('social_media');?></h5>
            <ul class="social-media">
              <li> <a href="<?php echo isset($social_media->facebook_link) && $social_media->facebook_link ? $social_media->facebook_link : '' ?>" class="facebook"> <i class="fab fa-facebook-f"></i> </a> </li>
              <li> <a href="<?php echo isset($social_media->pinterest_link) && $social_media->pinterest_link ? $social_media->pinterest_link : '' ?>" class="pinterest"> <i class="fab fa-pinterest-p"></i> </a> </li>
              <li> <a href="<?php echo isset($social_media->google_link) && $social_media->google_link ? $social_media->google_link : '' ?>" class="google"> <i class="fab fa-google"></i> </a> </li>
              <li> <a href="<?php echo isset($social_media->twitter_link) && $social_media->twitter_link ? $social_media->twitter_link : '' ?>" class="twitter"> <i class="fab fa-twitter"></i> </a> </li>
            </ul>
            <div class="footer-offer">
              <p><?php echo lang('signup_slogan');?></p>
              <a href="<?php echo base_url() . 'register';?>" class="btn-custom btn-sm shadow-none"><?php echo lang('sign_up');?></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <div class="container">
        <ul>
          <li> <a href="#"><?php echo lang('privacy_policy');?></a> </li>
          <li> <a href="#"><?php echo lang('refund_policy');?></a> </li>
          <li> <a href="#"><?php echo lang('cookie_policy');?></a> </li>
          <li> <a href="#"><?php echo lang('terms_conditions');?></a> </li>
        </ul>
        <div class="footer-copyright">
          <p><?php echo isset($getWhiteLabel->footer) && $getWhiteLabel->footer ? $getWhiteLabel->footer : '' ;?></p>
          <a href="#" class="back-to-top"><?php echo lang('back_to_top');?> <i class="fas fa-chevron-up"></i> </a>
        </div>
      </div>
    </div>

  </footer>
  <!-- Footer End -->

  <!-- Vendor Scripts -->
  <script src="<?php echo base_url()?>assets/website/js/plugins/jquery-3.4.1.min.js"></script>
  <script src="<?php echo base_url()?>assets/website/js/plugins/popper.min.js"></script>
  <script src="<?php echo base_url()?>assets/website/js/plugins/waypoint.js"></script>
  <script src="<?php echo base_url()?>assets/website/js/plugins/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/website/js/plugins/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url()?>assets/website/js/plugins/jquery.slimScroll.min.js"></script>
  <script src="<?php echo base_url()?>assets/website/js/plugins/imagesloaded.min.js"></script>
  <script src="<?php echo base_url()?>assets/website/js/plugins/jquery.steps.min.js"></script>
  <script src="<?php echo base_url()?>assets/website/js/plugins/jquery.countdown.min.js"></script>
  <script src="<?php echo base_url()?>assets/website/js/plugins/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url()?>assets/website/js/plugins/slick.min.js"></script>

  <!-- Slices Scripts -->
  <script src="<?php echo base_url()?>assets/website/js/main.js"></script>

  <!-- Page Specific Scripts -->
  <script src="<?php echo base_url()?>assets/website/js/plugins/leaflet.js"></script>
  <script src="<?php echo base_url()?>assets/website/js/map.js"></script>
  <script src="<?php echo base_url()?>assets/website/js/order.js"></script>


  


</body>

</html>

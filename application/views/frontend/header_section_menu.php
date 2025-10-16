<?php 
$company_info = getMainCompany();
$banner_section = isset($company_info->main_banner_section) && $company_info->main_banner_section?json_decode($company_info->main_banner_section):'';
$getWhiteLabel = json_decode(isset($company_info->white_label) && $company_info->white_label?$company_info->white_label:'');
$login_customer = $this->session->userdata('customer_id');
$login_customer_name = $this->session->userdata('customer_name');
?>  

<!-- Preloader Start -->
 <div class="ct-preloader">
    <div class="ct-preloader-inner">
      <div class="lds-ripple"><div></div><div></div></div>
    </div>
  </div>
  <!-- Preloader End -->

  <!-- Cart Sidebar Start -->
  <?php $this->view('frontend/cart_sidebar')?>
  <!-- Cart Sidebar End -->
  <!-- Aside (Mobile Navigation) -->
  <aside class="main-aside">
  <a class="navbar-brand" href="<?php echo base_url()?>"> <img src="<?php echo base_url()?>/images/<?php echo isset($getWhiteLabel->system_logo) && $getWhiteLabel->system_logo ? $getWhiteLabel->system_logo : '' ;?>" alt=""> </a>
    <div class="aside-scroll">
      <ul>
        <li class="menu-item menu-item-has-children">
          <ul class="submenu">
            <li class="menu-item">
              <a href="<?php echo base_url()?>"><?php echo lang('home');?></a>
            </li>
            <li class="menu-item">
              <a href="<?php echo base_url() . 'about-us';?>"><?php echo lang('about_us');?></a>
            </li>
            <li class="menu-item">
              <a href="<?php echo base_url() . 'online-order-page';?>"><?php echo lang('Order_Online');?></a>
            </li>
            <li class="menu-item">
              <a href="<?php echo base_url() . 'reservation';?>"><?php echo lang('reservation');?></a>
            </li>
            <li class="menu-item">
              <a href="<?php echo base_url() . 'contact-us';?>"><?php echo lang('contact_us');?></a>
            </li>
          </ul>
        </li> 
      </ul>

    </div>

  </aside>
  <div class="aside-overlay aside-trigger"></div>

  <!-- Header Start -->
  <header class="main-header header-1 ">
    <div class="top-header">
      <div class="container">
        <div class="top-header-inner">
          <div class="top-header-contacts">
            <ul class="top-header-nav">
              <li> <a class="p-0" href="tel:<?php echo $company_info->phone;?>"><i class="fas fa-phone mr-2"></i><?php echo $company_info->phone;?></a></li>
            </ul>
          </div>
          <ul class="top-header-nav header-cta">
            <li> <a href="<?php echo base_url() . 'online-order-page';?>"><?php echo lang('Order_Online');?></a> </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">
    <nav class="navbar">
        <!-- Logo -->
        <a class="navbar-brand" href="<?php echo base_url()?>"> <img src="<?php echo base_url()?>/images/<?php echo isset($getWhiteLabel->system_logo) && $getWhiteLabel->system_logo ? $getWhiteLabel->system_logo : '' ;?>" alt=""> </a>
        <!-- Menu -->
        <ul class="navbar-nav">
        <li class="menu-item menu-item-has-children">
            <a href="<?php echo base_url()?>"><?php echo lang('home');?></a>
          </li>
          <li class="menu-item menu-item-has-children">
            <a href="<?php echo base_url() . 'about-us';?>"><?php echo lang('about_us');?></a>
          </li>
          <li class="menu-item menu-item-has-children">
            <a href="<?php echo base_url() . 'online-order-page';?>"><?php echo lang('Order_Online');?></a>
          </li>
          <li class="menu-item menu-item-has-children">
            <a href="<?php echo base_url() . 'reservation';?>"><?php echo lang('reservation');?></a>
          </li>
          <li class="menu-item menu-item-has-children">
            <a href="<?php echo base_url() . 'contact-us';?>"><?php echo lang('contact_us');?></a>
          </li>
        </ul>

        <div class="header-controls">
          <ul class="header-controls-inner">
            <li class="cart-dropdown-wrapper cart-trigger">
              <span class="cart-item-count">0</span>
              <i class="flaticon-shopping-bag"></i>
            </li>
            <?php 
              $language = $this->session->userdata('language');
              if(!$language){
                $language = 'English';
              }
            ?>
            <li class="menu-item menu-item-has-children">
                <a href="#"><?php echo ucfirstcustom($language)?></a>
            <ul class="submenu">
            <?php
              $dir = glob("application/language/*",GLOB_ONLYDIR);
              foreach ($dir as $value):
                $separete = explode("language/",$value);?>
                    <li class="menu-item"> <a href="<?php echo base_url()?>Authentication/setlanguage/<?php echo escape_output($separete[1])?>"><?php echo ucfirstcustom($separete[1])?></a> </li>
              <?php
              endforeach;
              ?>
            </ul>
          </li>
            <?php if(empty($login_customer)){ ?>
            <li class="cart-dropdown-wrapper">
               <a style="font-weight: 600;color:black"  href="<?php echo base_url() . 'login';?>"><?php echo lang('login');?></a>
            </li>
            <li class="cart-dropdown-wrapper">
              <a style="font-weight: 600;color:black" href="<?php echo base_url() . 'register';?>"><?php echo lang('registration');?></a> 
            </li>
            <?php } else { ?>
              <li class="menu-item menu-item-has-children">
                <a style="font-weight: 600;color:black" href="#"><?php echo $login_customer_name; ?></a>
                <ul class="submenu">
                  <li class="menu-item"> <a href="<?php echo base_url();?>Frontend/logOut"><?php echo lang('logout');?></a> </li>
                </ul>
              </li>
            <?php } ?>
          </ul>
          <!-- Toggler -->
          <div class="aside-toggler aside-trigger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </nav>
    </div>

  </header>
  <!-- Header End -->
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

  <!-- Customize Modal Start -->
  <div class="modal fade" id="customizeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header modal-bg" style="background-image: url('assets/img/blog/11.jpg')">

          <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close">
            <span></span>
            <span></span>
          </button>

        </div>
        <div class="modal-body">

          <div class="customize-meta">
            <h4 class="customize-title">Pepperoni Pizza <span class="custom-primary">13.99$</span> </h4>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
            </p>
          </div>

          <div class="customize-variations">

            <div class="customize-size-wrapper">
              <h5>Size: </h5>
              <div class="customize-size active">
                11"
              </div>
              <div class="customize-size">
                16"
              </div>
              <div class="customize-size">
                21"
              </div>
            </div>

            <div class="row">

              <!-- Variation Start -->
              <div class="col-lg-4 col-12">
                <div class="customize-variation-wrapper">
                  <i class="flaticon-bread-roll"></i>
                  <h5>Dough</h5>
                  <div class="customize-variation-item" data-price="0.00">
                    <div class="custom-control custom-radio">
                      <input type="radio" checked id="regularDough" name="dough" class="custom-control-input">
                      <label class="custom-control-label" for="regularDough">Regular</label>
                    </div>
                    <span>+0.00$</span>
                  </div>
                  <div class="customize-variation-item" data-price="2.00">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="thinDough" name="dough" class="custom-control-input">
                      <label class="custom-control-label" for="thinDough">Hand Flipped</label>
                    </div>
                    <span>+2.00$</span>
                  </div>
                  <div class="customize-variation-item" data-price="4.00">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="multiGrainDough" name="dough" class="custom-control-input">
                      <label class="custom-control-label" for="multiGrainDough">Multi Grain</label>
                    </div>
                    <span>+4.00$</span>
                  </div>
                </div>
              </div>
              <!-- Variation End -->

              <!-- Variation Start -->
              <div class="col-lg-4 col-12">
                <div class="customize-variation-wrapper">
                  <i class="flaticon-pizza-slice"></i>
                  <h5>Crust</h5>
                  <div class="customize-variation-item" data-price="4.00">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="cheeseCrust" name="crust" class="custom-control-input">
                      <label class="custom-control-label" for="cheeseCrust">Cheese</label>
                    </div>
                    <span>+4.00$</span>
                  </div>
                  <div class="customize-variation-item" data-price="3.25">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="butterCrust" name="crust" class="custom-control-input">
                      <label class="custom-control-label" for="butterCrust">Butter</label>
                    </div>
                    <span>+3.25$</span>
                  </div>
                </div>
              </div>
              <!-- Variation End -->

              <!-- Variation Start -->
              <div class="col-lg-4 col-12">
                <div class="customize-variation-wrapper">
                  <i class="flaticon-pizza-and-cutted-slice"></i>
                  <h5>Add</h5>
                  <div class="customize-variation-item" data-price="2.00">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="addChicken">
                      <label class="custom-control-label" for="addChicken">Chicken</label>
                    </div>
                    <span>+2.00$</span>
                  </div>
                  <div class="customize-variation-item" data-price="1.20">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="addFourCheese">
                      <label class="custom-control-label" for="addFourCheese">Four Cheese</label>
                    </div>
                    <span>+1.20$</span>
                  </div>
                  <div class="customize-variation-item" data-price="0.75">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="addFreshMushroom">
                      <label class="custom-control-label" for="addFreshMushroom">Fresh Mushroom</label>
                    </div>
                    <span>+0.75$</span>
                  </div>
                  <div class="customize-variation-item" data-price="0.25">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="addBellPepper">
                      <label class="custom-control-label" for="addBellPepper">Bell Peppers</label>
                    </div>
                    <span>+0.25$</span>
                  </div>
                </div>
              </div>
              <!-- Variation End -->

            </div>
          </div>

          <div class="customize-controls">
            <div class="qty">
              <span class="qty-subtract"><i class="fas fa-minus"></i></span>
              <input type="text" name="qty" value="1">
              <span class="qty-add"><i class="fas fa-plus"></i></span>
            </div>
            <div class="customize-total" data-price="13.99">
              <h5>Total Price: <span class="final-price custom-primary">13.99 <span>$</span> </span> </h5>
            </div>
          </div>

          <button type="button" class="btn-custom btn-block">Order Now</button>

        </div>
      </div>
    </div>
  </div>
  <!-- Customize Modal End -->

  <!-- Cart Sidebar Start -->
  <?php $this->view('frontend/cart_sidebar')?>
  <!-- Cart Sidebar End -->
  <!-- Aside (Mobile Navigation) -->
  <aside class="main-aside">
    <a class="navbar-brand" href="#"> <img src="assets/img/logo.png" alt=""> </a>

    <div class="aside-scroll">
      <ul>
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

    </div>

  </aside>
  <div class="aside-overlay aside-trigger"></div>

  <!-- Header Start -->
  <header class="main-header header-1 header-absolute header-light">

    <div class="top-header">
      <div class="container">
        <div class="top-header-inner">

          <div class="top-header-contacts">
            <ul class="top-header-nav">
              <li> <a class="p-0" href="tel:<?php echo $company_info->phone;?>"> <i class="fas fa-phone mr-2"></i> <?php echo $company_info->phone;?> </a></li>
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
                <a style="color:white" href="#"><?php echo ucfirstcustom($language)?></a>
            <ul class="submenu">
            <?php
              $dir = glob("application/language/*",GLOB_ONLYDIR);
              foreach ($dir as $value):
                $separete = explode("language/",$value);
                ?>
                    <li class="menu-item"> <a href="<?php echo base_url()?>Authentication/setlanguage/<?php echo escape_output($separete[1])?>"><?php echo ucfirstcustom($separete[1])?></a> </li>
              <?php
              endforeach;
              ?>
            </ul>
          </li>
            <?php if(empty($login_customer)){ ?>
            <li class="cart-dropdown-wrapper">
               <a style="color:white; font-weight: 600;"  href="<?php echo base_url() . 'login';?>"><?php echo lang('login');?></a>
            </li>
            <li class="cart-dropdown-wrapper">
              <a style="color:white" href="<?php echo base_url() . 'register';?>"><?php echo lang('registration');?></a> 
            </li>
            <?php } else { ?>
              <li class="menu-item menu-item-has-children">
                <a style="color:white; font-weight: 600;" href="#"><?php echo $login_customer_name; ?></a>
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

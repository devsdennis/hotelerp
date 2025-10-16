<?php
$company_info = getMainCompany();
$categories = getFoodMenuCategory(); 
$get_food_menu = getFoodMenuForMenuPage();
$common_menu_page = isset($company_info->common_menu_page) && $company_info->common_menu_page?json_decode($company_info->common_menu_page):'';
?>


<!-- Subheader Start -->
<div class="subheader dark-overlay dark-overlay-2" style="background-image: url('<?php echo base_url() ?>uploads/common_menu_page/<?php echo isset($common_menu_page->common_menu_page_banner) && $common_menu_page->common_menu_page_banner ? $common_menu_page->common_menu_page_banner : '' ?>')">
    <div class="container">
      <div class="subheader-inner">
        <h1><?php echo lang('foods');?></h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><?php echo lang('home');?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo lang('foods');?></li>
          </ol>
        </nav>
      </div>

    </div>
  </div>
  <!-- Subheader End -->

  <!-- Menu Categories Start -->
  <div class="ct-menu-categories menu-filter">
    <div class="container">
      <div class="menu-category-slider">
        <a href="#" data-filter="*" class="ct-menu-category-item active">
          <div class="menu-category-thumb">
            <img src="<?php echo base_url();?>assets/media/default_cat.jpg" alt="">
          </div>
          <div class="menu-category-desc">
            <h6><?php echo lang('all');?></h6>
          </div>
        </a>
        <?php if($categories){
            foreach($categories as $cat){
        ?>
        <a href="#" data-filter=".cat-id-<?php echo $cat->id ?>" class="ct-menu-category-item">
          <div class="menu-category-thumb">
            <img src="<?php echo base_url();?><?php echo $cat->category_image ? "uploads/category/".$cat->category_image : 'assets/media/default_cat.jpg';?>" alt="">
          </div>
          <div class="menu-category-desc">
            <h6><?php echo $cat->category_name ?></h6>
          </div>
        </a>
        <?php }} ?>
      </div>
    </div>
  </div>
  <!-- Menu Categories End -->

  <!-- Menu Wrapper Start -->
  <div class="section section-padding">
    <div class="container">

      <div class="menu-container row">

        <!-- Product Start -->
        <?php 
            foreach($get_food_menu as $food){
        ?>
        <div class="col-lg-4 col-md-6 mb-3 cat-id-<?php echo $food->category_id ?>">
          <div class="product">
            <a class="product-thumb" href="<?php echo base_url() .'menu-details/';?><?php echo $food->id?>/<?php echo $food->category_id?>"> <img src="<?php echo base_url();?>images/<?php echo $food->photo ?>" alt="" /> </a>
            <div class="product-body">
              <div class="product-desc">
                <h4><a href="<?php echo base_url() .'menu-details/';?><?php echo $food->id?>/<?php echo $food->category_id?>"><?php echo $food->name; ?></a> </h4>
                <p><?php echo $food->description; ?></p>
                <p class="product-price"><?php echo getAmtCustom($food->sale_price); ?></p>
                
              </div>
              <div class="product-controls">
                <a href="<?php echo base_url() .'menu-details/';?><?php echo $food->id?>/<?php echo $food->category_id?>" class="order-item btn-custom btn-sm shadow-none"><?php echo lang('order');?> <i class="fas fa-shopping-cart"></i> </a>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        <!-- Product End -->
      </div>

    </div>
  </div>
  <!-- Menu Wrapper End -->
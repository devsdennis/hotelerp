<?php
$company_info = getMainCompany();
$explore_list = getExploreList();
$galleries = getGalleryList('ASC');
$galleries2 = getGalleryList('DESC');
$banner_section = isset($company_info->main_banner_section) && $company_info->main_banner_section?json_decode($company_info->main_banner_section):'';
$service_section = isset($company_info->service_section) && $company_info->service_section?json_decode($company_info->service_section):'';
$explore_menu_section = isset($company_info->explore_menu_section) && $company_info->explore_menu_section?json_decode($company_info->explore_menu_section):'';
?>
  <!-- About us start -->
  <div class="section">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-6 mb-lg-30 ct-single-img-wrapper">
          <img src="<?php echo base_url()?>uploads/service_section/<?php echo isset($service_section->service_image) && $service_section->service_image ? $service_section->service_image : '' ?>" alt="">
          <div class="ct-dots"></div>
        </div>
        <div class="col-lg-6">
          <div class="section-title-wrap mr-lg-30">
            <h5 class="custom-primary"><?php echo isset($service_section->service_title) && $service_section->service_title ? $service_section->service_title : '' ?></h5>
            <h2 class="title"><?php echo isset($service_section->service_heading) && $service_section->service_heading ? $service_section->service_heading : '' ?></h2>
            <p class="subtitle">
            <?php echo isset($service_section->service_description) && $service_section->service_description ? $service_section->service_description : '' ?>
            </p>
            <a href="<?php echo base_url() . 'online-order-page';?>" class="btn-custom"><?php echo lang('check_our_menu');?></a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- About us End -->

  <!-- Menu Start -->
  <div class="section section-padding pt-0">
    <div class="container">

      <div class="section-title-wrap section-header text-center">
        <h5 class="custom-primary"><?php echo isset($explore_menu_section->explore_menu_title) && $explore_menu_section->explore_menu_title ? $explore_menu_section->explore_menu_title : '' ?></h5>
        <h2 class="title"><?php echo isset($explore_menu_section->explore_menu_heading) && $explore_menu_section->explore_menu_heading ? $explore_menu_section->explore_menu_heading : '' ?></h2>
        <p class="subtitle">
        <?php echo isset($explore_menu_section->explore_menu_description) && $explore_menu_section->explore_menu_description ? $explore_menu_section->explore_menu_description : '' ?>
        </p>
      </div>
      <div class="row">
        <?php 
          if(isset($explore_list) && $explore_list){
            foreach($explore_list as $exp){
          
        ?>
        <div class="col-lg-6">
          <div class="ct-mini-menu-item">
            <div class="ct-mini-menu-top">
              <h5><?php echo $exp->explore_title;?></h5>
              <div class="ct-mini-menu-dots"></div>
              <span class="custom-primary"><?php echo getAmtCustom($exp->explore_price);?></span>
            </div>
            <div class="ct-mini-menu-bottom">
              <p><?php echo $exp->explore_des;?></p>
            </div>
          </div>
        </div>
        <?php }} ?>
      </div>
    </div>
  </div>
  <!-- Menu End -->

  <!-- Gallery Start -->
  <div class="section pt-0">
    <div class="gallery-section">
      <div class="row no-gutters">
        <?php 
        if($galleries){
          foreach($galleries as $gallery){
        ?>
        <div class="col-xl-6 col-lg-3 col-md-3 col-6 p-0">
          <a href="<?php echo base_url()?>uploads/photo_gallery/<?php echo  $gallery->photo?>" class="gallery-thumb">
            <img class="img-fluid" src="<?php echo base_url()?>uploads/photo_gallery/<?php echo  $gallery->photo?>" alt="" width="100%">
          </a>
        </div>
        <?php }} ?>
      </div>
      <div class="gallery-bg bg-parallax dark-overlay dark-overlay-2 bg-cover" style="background-image: url('assets/img/subheader.jpg')">
        <div class="section-title-wrap text-center">
          <h5 class="custom-primary"> <?php echo lang('a_community');?></h5>
          <h2 class="title text-white"> <?php echo lang('stories_of_passion');?></h2>
          <p class="subtitle text-white">
             <?php echo lang('stories_of_passion_details');?>  
          </p>
           
        </div>
      </div>
      <div class="row no-gutters">
      <?php 
        if($galleries2){
          foreach($galleries2 as $gallery){
        ?>
        <div class="col-xl-6 col-lg-3 col-md-3 col-6 p-0">
          <a href="<?php echo base_url()?>uploads/photo_gallery/<?php echo  $gallery->photo?>" class="gallery-thumb">
            <img class="img-fluid" src="<?php echo base_url()?>uploads/photo_gallery/<?php echo  $gallery->photo?>" alt="" width="100%">
          </a>
        </div>
        <?php }} ?>
      </div>
      </div>
    </div>

  </div>
  <!-- Gallery End -->

  <!-- Map Start -->
  <div class="section-map pb-0">
    <div class="ct-contact-map-wrapper">
      <div id="contactPageMap" class="ct-contact-map"></div>
    </div>
  </div>
  <!-- Map End -->

<?php
$company_info = getMainCompany();
$explore_list = getExploreList();
$about_us = isset($company_info->about_us) && $company_info->about_us?json_decode($company_info->about_us):'';
$common_menu_page = isset($company_info->common_menu_page) && $company_info->common_menu_page?json_decode($company_info->common_menu_page):'';
?>

 <!-- Subheader Start -->
 <div class="subheader dark-overlay dark-overlay-2" style="background-image: url('<?php echo base_url() ?>uploads/common_menu_page/<?php echo isset($common_menu_page->common_menu_page_banner) && $common_menu_page->common_menu_page_banner ? $common_menu_page->common_menu_page_banner : '' ?>')">
    <div class="container">
      <div class="subheader-inner">
        <h1><?php echo lang('about_us');?></h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><?php echo lang('home');?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo lang('about_us');?></li>
          </ol>
        </nav>
      </div>

    </div>
  </div>
  <!-- Subheader End -->

  <!-- About us start -->
  <div class="section">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-6 mb-lg-30 ct-single-img-wrapper">
          <img src="<?php echo base_url();?>uploads/about_us/<?php echo isset($about_us->about_us_image) && $about_us->about_us_image ? $about_us->about_us_image : '' ?>" alt="">
          <div class="ct-dots"></div>
        </div>
        <div class="col-lg-6">
          <div class="section-title-wrap mr-lg-30">
            <h5 class="custom-primary"><?php echo isset($about_us->about_us_title) && $about_us->about_us_title ? $about_us->about_us_title : '' ?></h5>
            <h2 class="title"><?php echo isset($about_us->abous_us_heading) && $about_us->abous_us_heading ? $about_us->abous_us_heading : '' ?></h2>
            <p class="subtitle">
              <?php echo isset($about_us->about_us_des) && $about_us->about_us_des ? $about_us->about_us_des : '' ?>
            </p>
            <a href="<?php echo base_url()?>online-order" class="btn-custom"><?php echo lang('check_our_menu');?></a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- About us End -->

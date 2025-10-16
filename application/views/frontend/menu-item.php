<?php
$company_info = getMainCompany();
$categories = getFoodMenuCategory();
$get_food_menu = getFoodMenuForMenuPage();
$modifiers = getModifierListByFoodMenuId($food_details->id);
$common_menu_page = isset($company_info->common_menu_page) && $company_info->common_menu_page?json_decode($company_info->common_menu_page):'';
?>
<?php
$company_info = getMainCompany();
$common_menu_page = isset($company_info->common_menu_page) && $company_info->common_menu_page?json_decode($company_info->common_menu_page):'';
$food_menus = getFoodMenuForMenuPage();
$only_modifiers = getModifiersForMenuPage();

$i = 0;
$menu_to_show = "";
$javascript_obects = "";


function cmp($a, $b)
{
    return strcmp($a->category_id, $b->category_id);
}

if(isset($food_menus) && $food_menus):
    foreach($food_menus as $single_menus){
      $sale_price = $single_menus->sale_price;
      $total_menus = count($food_menus);
        if($total_menus==$i){
            $javascript_obects .= "{item_id:'".$single_menus->id."',parent_id:'".$single_menus->parent_id."',product_type:'".$single_menus->product_type."',item_name:'".getPlanText($single_menus->name)."',alternative_name:'" . getPlanText($single_menus->alternative_name) . "',price:'".getAmtP($sale_price)."',tax_information:'".$single_menus->tax_information."',vat_percentage:'0',modifiers:[".$modifiers."]}";
        }else{
            $javascript_obects .= "{item_id:'".$single_menus->id."',parent_id:'".$single_menus->parent_id."',product_type:'".$single_menus->product_type."',item_name:'".getPlanText($single_menus->name)."',alternative_name:'" . getPlanText($single_menus->alternative_name) . "',price:'".getAmtP($sale_price)."',tax_information:'".$single_menus->tax_information."',vat_percentage:'0',modifiers:[".$modifiers."]},";
        }
        $i++;

    }
    endif;

    $j = 1;
    $javascript_obects_only_modifier = "";
    foreach($only_modifiers as $single_menu_modifier){
        if($j==count($only_modifiers)){
            $javascript_obects_only_modifier .="{menu_modifier_id:'".$single_menu_modifier->id."',menu_modifier_name:'".getPlanText($single_menu_modifier->name)."',tax_information:'".$single_menu_modifier->tax_information."',menu_modifier_price:'".getAmtP($single_menu_modifier->price)."'}";
        }else{
            $javascript_obects_only_modifier .="{menu_modifier_id:'".$single_menu_modifier->id."',menu_modifier_name:'".getPlanText($single_menu_modifier->name)."',tax_information:'".$single_menu_modifier->tax_information."',menu_modifier_price:'".getAmtP($single_menu_modifier->price)."'},";
        }
        $j++;
    }
?>
<!-- Subheader Start -->
<div class="subheader dark-overlay dark-overlay-2" style="background-image: url('<?php echo base_url() ?>uploads/common_menu_page/<?php echo isset($common_menu_page->common_menu_page_banner) && $common_menu_page->common_menu_page_banner ? $common_menu_page->common_menu_page_banner : '' ?>')">
    <div class="container">
      <div class="subheader-inner">
        <h1><?php echo lang('food_details');?></h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><?php echo lang('home');?></a></li>
            <li class="breadcrumb-item"><a href="#"><?php echo lang('food_details');?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $food_details->name;?></li>
          </ol>
        </nav>
      </div>

    </div>
  </div>
  <!-- Subheader End -->

  <input type="hidden" id="tax_type" value="<?php echo $company_info->tax_type ?>">
  <div class="section product-single">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <!-- Main Thumb -->
          <div class="product-thumb">
            <img src="<?php echo base_url();?>images/<?php echo isset($food_details->photo) && $food_details->photo ? $food_details->photo : '';?>" alt="<?php echo isset($food_details->name) && $food_details->name ? $food_details->description: '';?>">
          </div>
          <!-- /Main Thumb -->
        </div>
        <div class="col-md-7">
          <div class="product-content">

            <!-- Product Title -->
            <h2 class="title"><?php echo isset($food_details->name) && $food_details->name ? $food_details->name : '';?></h2>
            <!-- /Product Title -->
        
            <!-- Price -->
            <div class="price-wrapper">
              <p class="product-price"><?php echo isset($food_details->sale_price) && $food_details->sale_price ? getAmtCustom($food_details->sale_price) : '';?></p>
            </div>
            <!-- /Price -->

            <!-- Product Short Description -->
            <p><?php echo isset($food_details->description) && $food_details->description ? $food_details->description : '';?></p>
            <!-- /Product Short Description -->

            <!-- Variations -->
            <div class="customize-variations">
              <div class="row">
                <!-- Variation Start -->
                <div class="col-lg-6 col-12">
                  <div class="customize-variation-wrapper">
                    <i class="flaticon-pizza-and-cutted-slice"></i>
                    <h5><?php echo lang('modifier');?></h5>
                    <?php if($modifiers){
                      foreach($modifiers as $modifier){ 
                    ?>
                    <div class="customize-variation-item" data-id="<?php echo $modifier->modifier_id; ?>" data-name="<?php echo $modifier->modifier_name; ?>" data-price="<?php echo $modifier->modifier_price; ?>">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input modifier_checkbox" id="addChicken<?php echo $modifier->modifier_id?>">
                        <label class="custom-control-label" for="addChicken<?php echo $modifier->modifier_id?>"><?php echo $modifier->modifier_name; ?></label>
                      </div>
                      <span><?php echo getAmtCustom($modifier->modifier_price); ?></span>
                    </div>
                    <?php }} ?>
                  </div>
                </div>
                
                <!-- Variation End -->
              </div>
            </div>
            <!-- /Variations -->

            <!-- Add To Cart Form -->
            <form class="atc-form" method="post">
              <div class="form-group">
                <label><?php echo lang('quantity');?></label>
                <div class="qty">
                  <span class="qty-subtract"><i class="fas fa-minus"></i></span>
                  <input type="text" name="qty" value="1" class="item_details_qty_<?php echo $food_details->id ?>" data-item-details-qty="<?php echo $food_details->id ?>">
                  <span class="qty-add"><i class="fas fa-plus"></i></span>
                </div>
              </div>
              <button type="button" name="button" class="btn-custom secondary single_order" data_single_order_id="<?php echo $food_details->id ?>"> <?php echo lang('order');?> <i class="fas fa-shopping-cart"></i> </button>
            </form>
            <!-- /Add To Cart Form -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Related Start -->
  <div class="section section-padding related-products pt-0">
    <div class="container">
      <h3><?php echo lang('Youmightalsolike');?></h3>
      <div class="row menu-v2">
        <!-- Product Start -->
         <?php if($food_by_cat){
          foreach($food_by_cat as $food_menu){
          ?>
        <div class="col-lg-4 col-md-6">
          <div class="product">
           
            <a class="product-thumb" href="<?php echo base_url() .'menu-details/';?><?php echo $food_menu->id?>/<?php echo $food_menu->category_id?>"> 
            <a class="product-thumb" href="<?php echo base_url() .'menu-details/';?><?php echo $food_menu->id?>/<?php echo $food_menu->category_id?>"> 
              <img src="<?php echo base_url();?>images/<?php echo isset($food_menu->photo) && $food_menu->photo ? $food_menu->photo : '';?>" alt="<?php echo isset($food_menu->name) && $food_menu->name ? $food_menu->name : '';?>">
            </a>
            <div class="product-body">
              <div class="product-desc">
                <h4> <a href="<?php echo base_url() .'menu-details/';?><?php echo $food_menu->id?>/<?php echo $food_menu->category_id?>"><?php echo isset($food_menu->name) && $food_menu->name ? $food_menu->name : '';?></a> </h4>
                <p><?php echo isset($food_menu->description) && $food_menu->description ? $food_menu->description : '';?></p>
              </div>
              <div class="product-controls">
                <p class="product-price"><?php echo isset($food_menu->sale_price) && $food_menu->sale_price ? getAmtCustom($food_menu->sale_price) : '';?></p>
                <a href="<?php echo base_url() .'menu-details/';?><?php echo $food_menu->id?>/<?php echo $food_menu->category_id?>" class="order-item btn-custom btn-sm shadow-none"><?php echo lang('order');?> <i class="fas fa-shopping-cart"></i> </a>
              </div>
            </div>
          </div>
        </div>
        <?php }} ?>
        <!-- Product End -->
      </div>
    </div>
  </div>
  <!-- Related End -->
  <script>
      /*This variable could not be escaped because this is building object*/
      window.items = [<?php echo ($javascript_obects);?>];
    /*This variable could not be escaped because this is building object*/
    window.only_modifiers = [<?php echo ($javascript_obects_only_modifier);?>];
</script>








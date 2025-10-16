<?php
$company_info = getMainCompany();
$common_menu_page = isset($company_info->common_menu_page) && $company_info->common_menu_page?json_decode($company_info->common_menu_page):'';

 
$food_menus = getFoodMenuForMenuPage();
$only_modifiers = getModifiersForMenuPage();

$i = 1;
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
            $javascript_obects .= "{item_id:'".$single_menus->id."',parent_id:'".$single_menus->parent_id."',product_type:'".$single_menus->product_type."',item_name:'".getPlanText($single_menus->name)."',alternative_name:'" . getPlanText($single_menus->alternative_name) . "',price:'".getAmtP($sale_price)."',tax_information:'".$single_menus->tax_information."',vat_percentage:'0'}";
        }else{
            $javascript_obects .= "{item_id:'".$single_menus->id."',parent_id:'".$single_menus->parent_id."',product_type:'".$single_menus->product_type."',item_name:'".getPlanText($single_menus->name)."',alternative_name:'" . getPlanText($single_menus->alternative_name) . "',price:'".getAmtP($sale_price)."',tax_information:'".$single_menus->tax_information."',vat_percentage:'0'},";
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
<style>
    .no_access{
      pointer-events: none;
    }
</style>
<div style="display:none" class="main-content-wrapper">
                <div class="content">
                    <table class="tax-modal-table">
                        <thead>
                            <tr>
                                <th><?php echo lang('tax_name'); ?></th>
                                <th><?php echo lang('value'); ?></th>
                            </tr>
                        </thead>
                        <tbody id="tax_row_show">

                        </tbody>
                    </table>
                </div>
            </div>
<input type="hidden" id="hidden_customer_name" value="<?php echo $customer_short_name?>">
<input type="hidden" id="hidden_customer_id" value="<?php echo $this->session->userdata('customer_id')?>">
<input type="hidden" id="open_invoice_date_hidden" value="<?php echo date("Y-m-d") ?>">
<input type="hidden" id="tax_type" value="<?php echo $company_info->tax_type ?>">
<input type="hidden" id="collect_tax" value="<?php echo $company_info->collect_tax ?>">
<!-- Subheader Start -->
<div class="subheader dark-overlay dark-overlay-2" style="background-image: url('<?php echo base_url() ?>uploads/common_menu_page/<?php echo isset($common_menu_page->common_menu_page_banner) && $common_menu_page->common_menu_page_banner ? $common_menu_page->common_menu_page_banner : '' ?>')">
    <div class="container">
      <div class="subheader-inner">
        <h1><?php echo lang('checkout');?></h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><?php echo lang('home');?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo lang('checkout');?></li>
          </ol>
        </nav>
      </div>

    </div>
  </div>
  <!-- Subheader End -->



  <!-- Checkout Start -->
  <section class="section">
    <div class="container">
 <?php if ($this->session->flashdata('success')):
  unset($_SESSION['success']);
  ?>
    <h2 style="color:green;text-align:center;margin"><span style="border:4px solid green;padding:8px">Payment successfully added!</span></h2> 
    <br>  
 <?php endif?>
 <?php if ($this->session->flashdata('error')):
  unset($_SESSION['error']);
  ?>
    <h2 style="color:red;text-align:center;margin"><span style="border:4px solid red;padding:8px">Payment Fail!</span></h2> 
    <br>  
    <?php endif?>
    <form action="<?php echo base_url()?>pay-now" method="post">
        <div class="row">
          <div class="col-xl-7">
            <!-- Buyer Info -->
            <h4>Billing Details</h4>
            <div class="row">
              <div class="form-group col-xl-12">
                <label><?php echo lang('full_name');?> <span class="text-danger">*</span></label>
                <input type="text" placeholder="<?php echo lang('full_name');?>" name="fname" id="fname" class="form-control" value="<?php echo $this->session->userdata('customer_name')?>">
              </div>
              <div class="form-group col-xl-6">
                <label><?php echo lang('phone');?> <span class="text-danger">*</span></label>
                <input type="text" placeholder="<?php echo lang('phone');?>" name="phone" id="phone" class="form-control" value="<?php echo $this->session->userdata('customer_phone')?>">
              </div>
              <div class="form-group col-xl-6">
                <label><?php echo lang('email');?></label>
                <input type="email" placeholder="<?php echo lang('email');?>" name="email" id="email" class="form-control" value="<?php echo $this->session->userdata('customer_email')?>">
              </div>
            </div>

            <!-- /Buyer Info -->

          </div>
          <div class="col-xl-5 checkout-billing">
            <!-- Order Details Start -->
            <table class="ct-responsive-table" id="checkout_table">
              <thead>
                <tr>

                  <th><?php echo lang('product');?></th>
                  <th><?php echo lang('qunantity');?></th>
                  <th><?php echo lang('total');?></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
              <tfoot>
              <tr class="total">
                  <td>
                    <h6 class="mb-0"><?php echo lang('g_total');?></h6>
                  </td>
                  <td></td>
                  <td><strong><?php echo $company_info->currency; ?></strong> <strong class="checkout_grand_total"></strong></td>
                </tr>
              </tfoot>
            </table>

            <div class="form-group">
              <label><?php echo lang('payment_method');?> <span class="text-danger">*</span>  </label>
              <select class="form-control" name="payment_method" id="payment_method">
                  <option value="online_payment"><?php echo lang('online_payment');?></option>
              </select>
            </div>
             
            <button type="button" class="btn-custom primary btn-block pay_now"><?php echo lang('pay_now');?></button>
          </div>
        </div>
      </form>

    </div>
  </section>
  <!-- Checkout End -->
<script>
      /*This variable could not be escaped because this is building object*/
      window.items = [<?php echo ($javascript_obects);?>];
    /*This variable could not be escaped because this is building object*/
    window.only_modifiers = [<?php echo ($javascript_obects_only_modifier);?>];
</script>



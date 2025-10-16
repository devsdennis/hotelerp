<div class="cart-sidebar-wrapper">
    <aside class="cart-sidebar">
      <div class="cart-sidebar-header">
        <h3><?php echo lang('Your_Cart');?></h3>
        <div class="close-btn cart-trigger close-dark">
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="cart-sidebar-body">
        <div class="cart-sidebar-scroll" id="order_html_render">
        </div>
      </div>
      <div class="cart-sidebar-footer">
        <h4><?php echo lang('total');?>: <span class="cart-total">00.00</span> </h4>
        <a href="<?php echo base_url();?>checkout" class="btn-custom"><?php echo lang('checkout');?></a>
      </div>
    </aside>
    <div class="cart-sidebar-overlay cart-trigger">
    </div>
  </div>
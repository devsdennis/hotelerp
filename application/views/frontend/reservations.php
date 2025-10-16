<?php
$company_info = getMainCompany();
$reservation_times = isset($company_info->reservation_times) && $company_info->reservation_times?json_decode($company_info->reservation_times):'';
$reservations = getAllOutlestByAssignFood();
?>



<div>
<div class="contact-wrapper">

<div class="ct-contact-map-wrapper">
  <div id="contactPageMap" class="ct-contact-map leaflet-container leaflet-fade-anim leaflet-grab leaflet-touch-drag" tabindex="0" style="position: relative; outline: none;"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);"><div class="leaflet-pane leaflet-tile-pane"><div class="leaflet-layer " style="z-index: 1; opacity: 1;"><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 16; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21794/32751" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(318px, 323px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21793/32751" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(318px, 67px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21794/32750" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(62px, 323px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21794/32752" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(574px, 323px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21795/32751" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(318px, 579px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21793/32750" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(62px, 67px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21793/32752" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(574px, 67px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21795/32750" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(62px, 579px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21795/32752" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(574px, 579px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21792/32751" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(318px, -189px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21794/32749" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-194px, 323px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21794/32753" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(830px, 323px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21796/32751" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(318px, 835px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21792/32750" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(62px, -189px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21792/32752" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(574px, -189px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21793/32749" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-194px, 67px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21793/32753" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(830px, 67px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21795/32749" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-194px, 579px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21795/32753" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(830px, 579px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21796/32750" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(62px, 835px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21796/32752" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(574px, 835px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21792/32749" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-194px, -189px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21792/32753" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(830px, -189px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21796/32749" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-194px, 835px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/16/21796/32753" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(830px, 835px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-shadow-pane"></div><div class="leaflet-pane leaflet-overlay-pane"></div><div class="leaflet-pane leaflet-marker-pane"><div class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" tabindex="0" style="transform: translate3d(476px, 466px, 0px); z-index: 466;"><img class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" src="<?php echo base_url()?>assets/website/img/misc/marker.png" alt="markericon"></div></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"></div><div class="leaflet-proxy leaflet-zoom-animated"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in leaflet-disabled" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> | Tiles © Esri — Esri, DeLorme, NAVTEQ</div></div></div></div>
  <a href="https://maps.google.com/?q=51.5,-0.09" target="_blank" class="btn-custom shadow-none">View in Google Maps</a>
</div>

<div class="">
  <div class="section section-padding">
    <div class="container">

      <div class="contact-info">

        <div class="row">
          <div class="col-xl-6">
            <div class="ct-info-box">
              <i class="flaticon-location"></i>
              <h5><?php echo lang('Find_Us');?></h5>
              <span><?php echo $company_info->address;?></span>
              <span> <?php echo $company_info->phone;?> </span>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="ct-info-box">
              <i class="flaticon-online-booking"></i>
              <h5><?php echo lang('Opening_Hours');?></h5>
              <?php 
              if($reservation_times){
                foreach($reservation_times as $time){
              ?>
              <span><span><?php echo $time->counter_name ?>:</span> <?php echo $time->start_time ?> - <?php echo $time->end_time ?></span>
              <?php }} ?>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

  <div class="section pt-0">
    <div class="container">

      <div class="section-title-wrap">

        <?php
        if ($this->session->flashdata('exception')) {
            echo '<section class="alert-wrapper"><div class="alert alert-success alert-dismissible fade show"> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-body"><p class="m-0"><i class="m-right fa fa-check"></i>';
            echo escape_output($this->session->flashdata('exception'));unset($_SESSION['exception']);
            echo '</p></div></div></section>';
        }
        ?>
      
        <h2 class="title"><?php echo lang('Reservations');?></h2>
      </div>
        <?php
        $attributes = array('id' => 'reservations');
        echo form_open(base_url('Frontend/reservations'), $attributes); ?>

        <div class="row">

          <div class="form-group col-lg-12">
              <select name="outlet_id" id="outlet_id" class="form-control select2">
                  <option value=""><?php echo lang('Select_Outlet');?></option>
                  <?php 
                    if($reservations){
                      foreach($reservations as $reser){
                  ?>
                  <option value="<?php echo $reser->id; ?>"><?php echo $reser->outlet_name; ?></option>
                  <?php }} ?>
              </select>
          </div>

          <div class="form-group col-lg-6">
            <input type="text" placeholder="First Name" class="form-control" name="first_name" value="<?php echo set_value('first_name') ?>">
          </div>
          <div class="form-group col-lg-6">
            <input type="text" placeholder="Last Name" class="form-control" name="last_name" value="<?php echo set_value('last_name') ?>">
          </div>
          <div class="form-group col-lg-6">
            <input type="text" placeholder="Phone Number" class="form-control" name="phone" value="<?php echo set_value('phone') ?>">
          </div>
          <div class="form-group col-lg-6">
            <input type="text" placeholder="Number of People" class="form-control" name="no_of_people" value="<?php echo set_value('no_of_people') ?>">
          </div>
          <div class="form-group col-lg-6">
            <input type="date" placeholder="Date" class="form-control" name="date" value="<?php echo set_value('date') ?>">
          </div>
          <div class="form-group col-lg-6">
            <input type="time" placeholder="Time" class="form-control" name="time" value="<?php echo set_value('time') ?>">
          </div>
          <div class="form-group col-lg-12">
            <textarea name="notes" class="form-control" placeholder="Type your notes" rows="8"><?php echo set_value('notes') ?></textarea>
          </div>
        </div>
        <button type="submit" name="submit" value="submit" class="btn-custom primary"><?php echo lang('Send_Message');?></button>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>

</div>
</div>

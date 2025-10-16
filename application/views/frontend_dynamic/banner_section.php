<script type="text/javascript" src="<?php echo base_url('frequent_changing/js/setting.js'); ?>"></script>
<!-- Main content -->
<section class="main-content-wrapper">

    <?php
    if ($this->session->flashdata('exception')) {

        echo '<section class="alert-wrapper"><div class="alert alert-success alert-dismissible fade show"> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <div class="alert-body"><p><i class="m-right fa fa-check"></i>';
        echo escape_output($this->session->flashdata('exception'));unset($_SESSION['exception']);
        echo '</p></div></div></section>';
    }
    ?>

    <section class="content-header">
        <h3 class="top-left-header">
            <?php echo lang('bannerSection'); ?>
        </h3>

    </section>

    <div class="box-wrapper">
            <div class="table-box">

                <?php
                $attributes = array('id' => 'bannerSection');
                $banner_section = isset($company_info->main_banner_section) && $company_info->main_banner_section?json_decode($company_info->main_banner_section):'';
                echo form_open_multipart(base_url('Frontend/bannerSection/' . $this->session->userdata('company_id')),$attributes); ?>
                <div>
                    <div class="row">
                        <div class="col-sm-12 mb-2 col-md-4">
                            <div class="form-group">
                                <label><?php echo lang('main_header'); ?> <span class="required_star">*</span></label>
                                <input tabindex="1" autocomplete="off" type="text" id="main_header" name="main_header" class="form-control" placeholder="<?php echo lang('main_header'); ?>" value="<?php echo isset($banner_section->main_header) && $banner_section->main_header ? $banner_section->main_header : ''; ?>">
                            </div>
                            <?php if (form_error('main_header')) { ?>
                                <div class="callout callout-danger my-2">
                                    <?php echo form_error('main_header'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-12 mb-2 col-md-4">
                            <div class="form-group">
                                <div class="form-label-action">
                                    <input type="hidden" name="main_banner_old" value="<?php echo escape_output(isset($banner_section->main_banner) && $banner_section->main_banner ? $banner_section->main_banner : '')?>">
                                    <label><?php echo lang('main_banner'); ?> (Width: 1980px, Height:1080px )</label>
                                    <a data-file_path="<?php echo base_url()?>uploads/banner_section/<?php echo isset($banner_section->main_banner) && $banner_section->main_banner ? $banner_section->main_banner : ''; ?>"  data-id="1" class="btn bg-blue-btn show_preview" href="#"><?php echo lang('show'); ?></a>
                                </div>
                                <input type="file" id="logo" accept="image/*" name="main_banner" class="form-control">
                            </div>
                            <?php if (form_error('main_banner')) { ?>
                                <div class="callout callout-danger my-2">
                                    <?php echo form_error('main_banner'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-12 mb-2 col-md-4">
                            <div class="form-group">
                                <div class="form-label-action">
                                    <input type="hidden" name="mini_logo_old" value="<?php echo isset($banner_section->mini_logo) && $banner_section->mini_logo ? $banner_section->mini_logo : ''; ?>">
                                    <label><?php echo lang('mini_logo'); ?> (Width: 175px, Height:115px )</label>
                                    <a data-file_path="<?php echo base_url()?>uploads/banner_section/<?php echo isset($banner_section->mini_logo) && $banner_section->mini_logo ? $banner_section->mini_logo : ''; ?>"  data-id="1" class="btn bg-blue-btn show_preview" href="#"><?php echo lang('show'); ?></a>
                                </div>
                                <input type="file" id="logo" accept="image/*" name="mini_logo" class="form-control">
                            </div>
                            <?php if (form_error('mini_logo')) { ?>
                                <div class="callout callout-danger my-2">
                                    <?php echo form_error('mini_logo'); ?>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="col-sm-12 mb-2 col-md-4">
                            <div class="form-group">
                                <label><?php echo lang('short_des'); ?> <span class="required_star">*</span></label>
                                <textarea id="short_des" rows="6" name="short_des" class="form-control" placeholder="<?php echo lang('short_des'); ?>"><?php echo isset($banner_section->short_des) && $banner_section->short_des ? $banner_section->short_des : ''; ?></textarea>
                            </div>
                            <?php if (form_error('short_des')) { ?>
                                <div class="callout callout-danger my-2">
                                    <?php echo form_error('short_des'); ?>
                                </div>
                            <?php } ?>
                        </div>


                        <div class="col-sm-12 mb-2 col-md-4">
                            <div class="form-group">
                                <div class="form-label-action">
                                    <input type="hidden" name="banner_bottom_image_1_old" value="<?php echo isset($banner_section->banner_bottom_image_1) && $banner_section->banner_bottom_image_1 ? $banner_section->banner_bottom_image_1 : ''; ?>">
                                    <label><?php echo lang('banner_bottom_image_1'); ?> (Width: 590px, Height:285px )</label>
                                    <a data-file_path="<?php echo base_url()?>uploads/banner_section/<?php echo isset($banner_section->banner_bottom_image_1) && $banner_section->banner_bottom_image_1 ? $banner_section->banner_bottom_image_1 : ''; ?>"  data-id="1" class="btn bg-blue-btn show_preview" href="#"><?php echo lang('show'); ?></a>
                                </div>
                                <input type="file" id="logo" accept="image/*" name="banner_bottom_image_1" class="form-control">
                            </div>
                            <?php if (form_error('banner_bottom_image_1')) { ?>
                                <div class="callout callout-danger my-2">
                                    <?php echo form_error('banner_bottom_image_1'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-12 mb-2 col-md-4">
                            <div class="form-group">
                                <div class="form-label-action">
                                    <input type="hidden" name="banner_bottom_image_2_old" value="<?php echo isset($banner_section->banner_bottom_image_2) && $banner_section->banner_bottom_image_2 ? $banner_section->banner_bottom_image_2 : ''; ?>">
                                    <label><?php echo lang('banner_bottom_image_2'); ?> (Width: 600px, Height:600px )</label>
                                    <a data-file_path="<?php echo base_url()?>uploads/banner_section/<?php echo isset($banner_section->banner_bottom_image_2) && $banner_section->banner_bottom_image_2 ? $banner_section->banner_bottom_image_2 : ''; ?>"  data-id="1" class="btn bg-blue-btn show_preview" href="#"><?php echo lang('show'); ?></a>
                                </div>
                                <input type="file" id="logo" accept="image/*" name="banner_bottom_image_2" class="form-control">
                            </div>
                            <?php if (form_error('banner_bottom_image_2')) { ?>
                                <div class="callout callout-danger my-2">
                                    <?php echo form_error('banner_bottom_image_2'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-12 mb-2 col-md-4">
                            <div class="form-group">
                                <div class="form-label-action">
                                    <input type="hidden" name="banner_bottom_image_3_old" value="<?php echo isset($banner_section->banner_bottom_image_3) && $banner_section->banner_bottom_image_3 ? $banner_section->banner_bottom_image_3 : ''; ?>">
                                    <label><?php echo lang('banner_bottom_image_3'); ?> (Width: 600px, Height:377px )</label>
                                    <a data-file_path="<?php echo base_url()?>uploads/banner_section/<?php echo isset($banner_section->banner_bottom_image_3) && $banner_section->banner_bottom_image_3 ? $banner_section->banner_bottom_image_3 : ''; ?>"  data-id="1" class="btn bg-blue-btn show_preview" href="#"><?php echo lang('show'); ?></a>
                                </div>
                                <input type="file" id="logo" accept="image/*" name="banner_bottom_image_3" class="form-control">
                            </div>
                            <?php if (form_error('banner_bottom_image_3')) { ?>
                                <div class="callout callout-danger my-2">
                                    <?php echo form_error('banner_bottom_image_3'); ?>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
                <!-- /.box-body -->

                <div class="row">
                    <div class="col-sm-12 col-md-2 mb-2">
                        <button type="submit" name="submit" value="submit" class="btn bg-blue-btn w-100"><?php echo lang('submit'); ?></button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
          

    </div>


    <div class="modal fade" id="logo_preview" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                        <?php echo lang('system_logo'); ?> </h4>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"><i data-feather="x"></i></span></button>
                </div>
                <div class="modal-bod">
                    <div class="row">
                        <div class="col-md-12 site_logo_parent_div">
                            <img class="site_logo_parent_img" src="" id="show_id">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-blue-btn" data-bs-dismiss="modal"><?php echo lang('cancel'); ?></button>
                </div>
            </div>

        </div>
    </div>

</section>
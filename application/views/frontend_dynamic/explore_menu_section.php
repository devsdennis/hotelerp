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
            <?php echo lang('exploreMenuSection'); ?>
        </h3>

    </section>

    <div class="box-wrapper">
    <div class="table-box">
                <?php
                $attributes = array('id' => 'explore_menu_section');
                $explore_menu_section = isset($company_info->explore_menu_section) && $company_info->explore_menu_section?json_decode($company_info->explore_menu_section):'';
                echo form_open_multipart(base_url('Frontend/exploreMenuSection/' . $this->session->userdata('company_id')),$attributes); ?>
                <div>
                    <h4>Explore Menu Section</h4>
                    <div class="row">
                        <div class="col-sm-12 mb-2 col-md-4">
                            <div class="form-group">
                                <label><?php echo lang('explore_menu_title'); ?> <span class="required_star">*</span></label>
                                <input tabindex="1" autocomplete="off" type="text" id="explore_menu_title" name="explore_menu_title" class="form-control" placeholder="<?php echo lang('explore_menu_title'); ?>" value="<?php echo isset($explore_menu_section->explore_menu_title) && $explore_menu_section->explore_menu_title ? $explore_menu_section->explore_menu_title : ''; ?>">
                            </div>
                            <?php if (form_error('explore_menu_title')) { ?>
                                <div class="callout callout-danger my-2">
                                    <?php echo form_error('explore_menu_title'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-12 mb-2 col-md-4">
                            <div class="form-group">
                                <label><?php echo lang('explore_menu_heading'); ?> <span class="required_star">*</span></label>
                                <input tabindex="1" autocomplete="off" type="text" id="explore_menu_heading" name="explore_menu_heading" class="form-control" placeholder="<?php echo lang('explore_menu_heading'); ?>" value="<?php echo isset($explore_menu_section->explore_menu_heading) && $explore_menu_section->explore_menu_heading ? $explore_menu_section->explore_menu_heading : ''; ?>">
                            </div>
                            <?php if (form_error('explore_menu_heading')) { ?>
                                <div class="callout callout-danger my-2">
                                    <?php echo form_error('explore_menu_heading'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-12 mb-2 col-md-4">
                            <div class="form-group">
                                <label><?php echo lang('explore_menu_description'); ?> <span class="required_star">*</span></label>
                                <textarea id="explore_menu_description" rows="6" name="explore_menu_description" class="form-control" placeholder="<?php echo lang('explore_menu_description'); ?>"><?php echo isset($explore_menu_section->explore_menu_description) && $explore_menu_section->explore_menu_description ? $explore_menu_section->explore_menu_description : ''; ?></textarea>
                            </div>
                            <?php if (form_error('explore_menu_description')) { ?>
                                <div class="callout callout-danger my-2">
                                    <?php echo form_error('explore_menu_description'); ?>
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
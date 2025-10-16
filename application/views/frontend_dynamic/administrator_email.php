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
            <?php echo lang('administrator_email'); ?>
        </h3>

    </section>

    <div class="box-wrapper">
        <div class="table-box">

            <?php
            $attributes = array('id' => 'administratorEmail');
            echo form_open_multipart(base_url('Frontend/administratorEmail/' . $this->session->userdata('company_id')),$attributes); ?>
            <div>
                <div class="row">
                    <div class="col-sm-12 mb-2 col-md-4">
                        <div class="form-group">
                            <label><?php echo lang('administrator_email'); ?> <span class="required_star">*</span></label>
                            <input tabindex="1" autocomplete="off" type="email" id="administrator_email" name="administrator_email" class="form-control" placeholder="<?php echo lang('administrator_email'); ?>" value="<?php echo isset($company_info->administrator_email) && $company_info->administrator_email ? $company_info->administrator_email : ''; ?>">
                        </div>
                        <?php if (form_error('administrator_email')) { ?>
                            <div class="callout callout-danger my-2">
                                <?php echo form_error('administrator_email'); ?>
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

</section>

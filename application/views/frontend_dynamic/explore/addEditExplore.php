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
            <?php 
            if(isset($explore)){
                $language = lang('edit');
            }else{
                $language = lang('add');
            }
            ?>
            <?php echo $language; ?> <?php echo lang('explore'); ?>
        </h3>

    </section>

    
    <div class="box-wrapper">
        <div class="table-box">
            <?php
            $attributes = array('id' => 'explore_form');
            
            echo form_open_multipart(base_url('Frontend/addEditExplore/' . (isset($explore) ? $this->custom->encrypt_decrypt($explore->id, 'encrypt') : ''))); ?>
            <div>
                <div class="row">
                    <div class="col-sm-12 mb-2 col-md-4">
                        <div class="form-group">
                            <label><?php echo lang('explore_title'); ?> <span class="required_star">*</span></label>
                            <input tabindex="1" autocomplete="off" type="text" id="explore_title" name="explore_title" class="form-control" placeholder="<?php echo lang('explore_title'); ?>" value="<?php echo isset($explore->explore_title) && $explore->explore_title ? $explore->explore_title : ''; ?>">
                        </div>
                        <?php if (form_error('explore_title')) { ?>
                            <div class="callout callout-danger my-2">
                                <?php echo form_error('explore_title'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-sm-12 mb-2 col-md-4">
                        <div class="form-group">
                            <label><?php echo lang('explore_price'); ?> <span class="required_star">*</span></label>
                            <input tabindex="1" autocomplete="off" type="text" id="explore_price" name="explore_price" class="form-control" placeholder="<?php echo lang('explore_price'); ?>" value="<?php echo isset($explore->explore_price) && $explore->explore_price ? $explore->explore_price : ''; ?>">
                        </div>
                        <?php if (form_error('explore_price')) { ?>
                            <div class="callout callout-danger my-2">
                                <?php echo form_error('explore_price'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-sm-12 mb-2 col-md-4">
                        <div class="form-group">
                            <label><?php echo lang('explore_des'); ?> <span class="required_star">*</span></label>
                            <textarea tabindex="1" autocomplete="off" type="text" id="explore_des" name="explore_des" class="form-control" placeholder="<?php echo lang('explore_des'); ?>"><?php echo isset($explore->explore_des) && $explore->explore_des ? $explore->explore_des : ''; ?></textarea>
                        </div>
                        <?php if (form_error('explore_des')) { ?>
                            <div class="callout callout-danger my-2">
                                <?php echo form_error('explore_des'); ?>
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

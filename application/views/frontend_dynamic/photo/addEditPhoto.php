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
            if(isset($photo)){
                $language = lang('edit');
            }else{
                $language = lang('add');
            }
            ?>
            <?php echo $language; ?> <?php echo lang('photo'); ?>
        </h3>

    </section>

    
    <div class="box-wrapper">
        <div class="table-box">
            <?php
            $attributes = array('id' => 'addEditPhoto');
            echo form_open_multipart(base_url('Frontend/addEditPhoto/' . (isset($photo) ? $this->custom->encrypt_decrypt($photo->id, 'encrypt') : ''))); ?>
            <div>
                <div class="row">
                    <div class="col-sm-12 mb-2 col-md-4">
                        <div class="form-group">
                            <div class="form-label-action">
                                <input type="hidden" name="photo_old" value="<?php echo escape_output(isset($photo->photo) && $photo->photo ? $photo->photo : '')?>">
                                <label><?php echo lang('photo'); ?> (Width: 640px, Height:425px )</label>
                                <a data-file_path="<?php echo base_url()?>uploads/photo_gallery/<?php echo isset($photo->photo) && $photo->photo ? $photo->photo : ''; ?>"  data-id="1" class="btn bg-blue-btn show_preview" href="#"><?php echo lang('show'); ?></a>
                            </div>
                            <input type="file" id="logo" accept="image/*" name="photo" class="form-control">
                        </div>
                        <?php if (form_error('photo')) { ?>
                            <div class="callout callout-danger my-2">
                                <?php echo form_error('photo'); ?>
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

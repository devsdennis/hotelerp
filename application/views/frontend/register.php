  <!-- Login Form Start -->
  <div class="section">

 <style>
  .error_txt p{
    color: red;
    text-align: left;
    margin-left: 3px;
  }
  .red_error{
    color: red;
  }
  .green_error{
    color:green;
  }
 </style>

    <div class="container">
      <div class="auth-wrapper">

        <div class="auth-description bg-cover bg-center dark-overlay dark-overlay-2" style="background-image: url('<?php echo base_url()?>assets/website/img/auth.jpg')">
          <div class="auth-description-inner">
            <h2><?php echo lang('welcome_back');?></h2>
            <p><?php echo lang('login_slogan');?></p>
          </div>
        </div>
        <div class="auth-form">

          <h2><?php echo lang('sign_up');?></h2>

          <?php
                if ($this->session->flashdata('exception_1')) {
                    echo '<p class="red_error"><i  class="fa fa-times"></i> ';echo escape_output($this->session->flashdata('exception_1'));unset($_SESSION['exception_1']);
                    echo '</p>';
                }
                ?>

                <?php
                if ($this->session->flashdata('exception')) {
                    echo '<p class="green_error"><i  class="fa fa-check"></i> ';echo escape_output($this->session->flashdata('exception'));unset($_SESSION['exception']);
                    echo '</p>';
                }
                ?>

          <?php echo form_open(base_url() . 'register', $arrayName = array('novalidate' => 'novalidate')) ?>
          <?php
                if ($this->session->flashdata('exception_1')) {
                    echo '<p class="red_error"><i  class="fa fa-times"></i> ';echo escape_output($this->session->flashdata('exception_1'));unset($_SESSION['exception_1']);
                    echo '</p>';
                }
                ?>

                <?php
                if ($this->session->flashdata('exception')) {
                    echo '<p class="green_error"><i  class="fa fa-check"></i> ';echo escape_output($this->session->flashdata('exception'));unset($_SESSION['exception']);
                    echo '</p>';
                }
                ?>
            <div class="form-group">
              <input type="text" class="form-control form-control-light" placeholder="<?php echo lang('full_name');?>" name="full_name" value="">
                <?php if (form_error('full_name')) { ?>
                    <div class="error_txt div_2">
                        <?php echo form_error('full_name'); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-light" placeholder="<?php echo lang('phone');?>" name="phone" value="">
                <?php if (form_error('phone')) { ?>
                    <div class="error_txt div_2">
                        <?php echo form_error('phone'); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-light" placeholder="<?php echo lang('email');?>" name="email" value="">
                <?php if (form_error('email')) { ?>
                    <div class="error_txt div_2">
                        <?php echo form_error('email'); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-control-light" placeholder="<?php echo lang('password');?>" name="password" value="">
                <?php if (form_error('password')) { ?>
                    <div class="error_txt div_2">
                        <?php echo form_error('password'); ?>
                    </div>
                <?php } ?>
            </div>
            <!-- <a href="#">Forgot Password?</a> -->
            <button type="submit" name="submit" value="submit" class="btn-custom primary"><?php echo lang('sign_up');?></button>

            <div class="auth-seperator">
              <span><?php echo lang('or');?></span>
            </div>
            <div class="social-login">
              <a style="color:white;    text-decoration: none;" href="<?php echo $facebook_auth_url?>" class="ct-social-login facebook"><i class="fab fa-facebook-f"></i> <?php echo lang('Continue_with_Facebook');?> </a>
              <a style="color:white;    text-decoration: none;" href="<?php echo $google_auth_url?>"  class="ct-social-login google"><i class="fab fa-google"></i> <?php echo lang('Continue_with_Google');?></a>
            </div>
            <p><?php echo lang('already_have_account');?> <a href="<?php echo base_url()?>login"><?php echo lang('login');?></a> </p>

            <?php echo form_close();?>
        </div>

      </div>
    </div>
  </div>
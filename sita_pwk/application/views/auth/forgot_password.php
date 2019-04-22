<div class="row page-content">
    <div class="col-lg-12">
        <h2>Forgot Password</h2>
        <?php if (validation_errors()) { ?>
            <div class="alert alert-danger">
                <?php echo validation_errors(); ?>
            </div>
        <?php } ?>
        <?php if (!empty($this->input->get('msg')) && $this->input->get('msg') == 1) { ?>
            <div class="alert alert-danger">
                Please Enter Your Valid Information.
            </div>
        <?php } elseif (!empty($this->input->get('msg')) && $this->input->get('msg') == 2) { ?>
            <div class="alert alert-success">
                Your password has been reset successfully. Please check your email.
            </div>
        <?php } ?>
        <?php echo form_open('register/actionForgotPassword'); ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <input type="text" name="forgot_email" class="form-control" id="email-forgot-pwd" placeholder="Email">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group pull-right">
                    <span class="small pull-left">Not a user yet? </span><a href="<?php print site_url(); ?>signup" class="small pull-left">&nbsp;Register Now</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group pull-right">
                    <button type="submit" id="login" class="btn btn-info">Send</button>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
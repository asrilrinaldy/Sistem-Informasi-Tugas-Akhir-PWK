<div class="row page-content">
    <div class="col-lg-12">
        <h2>Login Form</h2>
        <?php if (validation_errors()) { ?>
            <div class="alert alert-danger">
                <?php echo validation_errors(); ?>
            </div>
        <?php } ?>
        <?php if (!empty($this->input->get('msg')) && $this->input->get('msg') == 1) { ?>
            <div class="alert alert-danger">
                Please Enter Your Valid Information.
            </div>
        <?php } ?>
        <?php echo form_open('auth/doLogin'); ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input type="text" name="user_name" class="form-control" id="username" placeholder="User Name/Email">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <span class="small pull-left">Not a user yet? </span><a href="<?php print site_url(); ?>signup" class="small pull-left">&nbsp;Register Now</a>
                    <a href="<?php print site_url(); ?>forgotpwd" class="small pull-right">Forgot password?</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group pull-right">
                    <button type="submit" id="login" class="btn btn-info">Login</button>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
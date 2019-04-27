<div class="row page-content">
    <div class="col-lg-12 text-right">
        <a class="btn btn-info btn-xs" href="<?php print site_url() ?>profile/edit"><i class="fa fa-user"></i> Edit</a>
        <a class="btn btn-warning btn-xs" href="<?php print site_url() ?>setting"><i class="fa fa-gear"></i> Settings</a>
        <a class="btn btn-danger btn-xs" href="<?php print site_url() ?>auth/logout"><i class="fa fa-power-off"></i> Log Out</a>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card hovercard">
                    <div class="cardheader">
                        <div class="avatar">
                            <img alt="<?php print $this->session->userdata('user_name'); ?>" src="<?php print HTTP_IMAGES_PATH; ?>user-default.jpg">
                        </div>
                    </div>
                    <div class="card-body info">
                        <div class="title">
                            <a href="<?php print site_url() ?>profile"><?php print $userInfo['full_name']; ?></a>
                        </div>
                        <div class="desc"> <a target="_blank" href="<?php print site_url(); ?>"><?php print APPLICATION_NAME; ?></a></div>
                        <div class="desc"><?php print $userInfo['email']; ?>, <?php print $userInfo['contact_no']; ?></div>
                        <div class="desc"><?php print $userInfo['address']; ?></div>
                    </div>
                    <div class="card-footer bottom">
                        <a class="btn btn-primary btn-twitter btn-sm" href="<?php print site_url(); ?>">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" rel="publisher" href="<?php print site_url(); ?>">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a class="btn btn-primary btn-sm" rel="publisher" href="<?php print site_url(); ?>">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
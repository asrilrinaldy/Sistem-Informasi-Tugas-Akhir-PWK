
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="shortcut icon" href="<?php base_url() ?>images/logoitera.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Ubah Password</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->


      <link rel="stylesheet" href="<?php echo base_url()?>assets/profil/bootstrap.min.css">

    <!--  Paper Dashboard core CSS    -->
      <link rel="stylesheet" href="<?php echo base_url()?>assets/profil/paper-dashboard.css">

    <!--  Fonts and icons     -->
    <link href='<?php base_url() ?>assets/profil/font_muli.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php base_url() ?>assets/iconfonts/mdi/css/materialdesignicons.min.css">

    <style type="text/css">
        .modal-backdrop{
            display: none;
        }
        .form-control{
            border: thin solid #D6D6D6;
        }

        .circular--portrait {
            position: relative;
            width: 200px;
            height: 200px;
            overflow: hidden;
            border-radius: 50%;
        }

        .circular--portrait img {
            width: 100%;
            height: auto;
        }
    </style>

    <script src="<?php base_url() ?>assets/profil/jquery-1.10.2.js" type="text/javascript"></script>

</head>
<body>

<div class="wrapper">
<div class="sidebar" data-active-color="white" style="background: #424242">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <center>
                    <div class="circular--portrait">
                    	<img class="img-responsive" src="<?php echo base_url()?>assets/profil/default-profile.png" alt="User profile picture">
                		</div>
                </center>
            </div>

            <ul class="nav">
                <li class=" ">
                  <a href="<?php echo base_url('berandaadmin') ?>">
                      <i class="menu-icon mdi mdi-home"></i>
                      <p>Kembali ke Beranda</p>
                  </a>
								</li>
                <li class="">
                  <a href="<?php echo base_url('profile/admin') ?>">
                      <i class="menu-icon mdi mdi-account"></i>
                      <p>Edit Profile</p>
                  </a>
                </li>
								<li class="active">
									<a href="<?php echo base_url('ubahpassword') ?>">
											<i class="menu-icon mdi mdi-textbox-password"></i>
											<p>Ubah Password</p>
									</a>
            </ul>
    	</div>
    </div>
    <div class="main-panel">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
             <a class="navbar-brand" href="#" >SISTEM INFORMASI TUGAS AKHIR PWK</a>
        </div>

      </nav>
		<div class="content">
  			<div class="container-fluid">
  				<div class="card">
  					<div class="header">
						<h3>Ubah Password</h3>
					</div>
					<hr/>
          <?php if ($this->session->flashdata('sukses')){ ?>
              <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('sukses'); ?>
              </div>
          <?php }elseif ($this->session->flashdata('error')){ ?>
              <div class="alert alert-warning" role="alert">
              <?php echo $this->session->flashdata('error'); ?>
              </div>
          <?php }; ?>
					<div class="content">
						<form id="form_edit_profil" action="<?php echo base_url() . 'ubahpassword/update_password_admin' ?>" method="POST">
							<div class="tab-content">
									<div id="home" class="tab-pane fade in active">
										<table class="table table-striped">
											<tr>
												<td width="200px;">Password Lama</td>
												<td>:</td>
												<td colspan="2"><input type="password" name="old_pass" id="old_pass" placeholder="Password Lama" class="form-control"></td>
											</tr>
											<tr>
												<td>Password Baru</td>
												<td>:</td>
												<td colspan="2"><input type="password" name="new_pass" id="new_pass" placeholder="Password Baru" class="form-control"  ></td>
											</tr>
                      <tr>
                        <td>Konfirmasi Password Baru</td>
                        <td>:</td>
                        <td colspan="2"><input type="password" name="confirm_pass" id="confirm_pass" placeholder="Konfirmasi Password Baru" class="form-control"  ></td>
                      </tr>
												</table>
									</div>
							</div>
						<button type="submit" class="btn btn-warning pull-right"><i class="mdi mdi-content-save" ></i> Simpan</button>
						<br/><br/>
						<div id="notif"></div>
						</form>
					</div>
				</div>
			</div>
		</div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright pull-right">
									<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
										<a>Kelompok 6</a> Proyek Perangkat Lunak RA</span>
                </div>
            </div>
        </footer>

    </div>
</div>

    <!--   Core JS Files   -->

</html>


<!doctype html>
<html lang="en">
<head>
	<base href="<?php echo $this->config->base_url(); ?>" />
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="shortcut icon" href="<?php base_url() ?>images/logoitera.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Edit Profile</title>

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
											<?php if($this->session->userdata('ses_foto')!= null){?>
												<img class="img-responsive" src="<?php echo base_url()?>assets/upload/foto/<?php echo $this->session->userdata('ses_foto')  ?>" alt="User profile picture">
											<?php }else{?>
                    	<img class="img-responsive" src="<?php echo base_url()?>assets/profil/default-profile.png" alt="User profile picture">
											<<?php } ?>
                		</div>
                </center>
            </div>
						<ul class="nav">
                <li class=" ">
                  <a href="<?php echo base_url('admin/berandaadmin') ?>">
                      <i class="menu-icon mdi mdi-home"></i>
                      <p>Kembali ke Beranda</p>
                  </a>
								</li>
                <li class="active">
                  <a href="<?php echo base_url('profile/admin') ?>">
                      <i class="menu-icon mdi mdi-account"></i>
                      <p>Edit Profile</p>
                  </a>
                </li>
								<li class="">
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
						<h3>Edit Profil</h3>
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
						<?php echo form_open_multipart('profile/update_admin');?>
							<div class="tab-content">
									<div id="home" class="tab-pane fade in active">
										<table class="table table-striped">
											<tr>
												<td width="200px;">ID Admin</td>
												<td>:</td>
												<td colspan="2"><input type="text" name="id_admin" id="id_admin" placeholder="Username" class="form-control" value="<?php echo $this->session->userdata('ses_id')?>" readonly></td>
											</tr>
											<tr>
												<td>E-mail</td>
												<td>:</td>
												<td colspan="2"><input type="email" name="email" id="email" placeholder="ex. admin@itera.ac.id" class="form-control" value="<?php echo $this->session->userdata('ses_email')?>" ></td>
											</tr>
											<tr>
												<td>Nama </td>
												<td>:</td>
												<td colspan="2"><input type="text" name="nama" id="nm_pd" placeholder="Nama" class="form-control" value="<?php echo $this->session->userdata('ses_nama')?>" ></td>
											</tr>
											<tr>
												<td width="200px;">Telepon</td>
												<td>:</td>
												<td colspan="2">
													<input type="number" name="no_telepon" id="telepon" class="form-control" value="<?php echo $this->session->userdata('ses_no_telp')?>" />
												</td>
											</tr>
											<tr>
												<td width="200px;">Alamat</td>
												<td>:</td>
												<td colspan="2"><textarea name="alamat" id="jln" class="form-control" placeholder="Alamat"><?php echo $this->session->userdata('ses_alamat')?></textarea></td>
											</tr>
											<tr>
												<td>Foto</td>
												<td>:</td>
												<td colspan="2"><input type="file" name="foto" id="foto" enctype="multipart/form-data"></td>
											</tr>
											<tr>
												<input type="hidden" name="foto_db" id="foto_db" class="form-control" value="<?php echo $this->session->userdata('ses_foto')?>"/>
										</table>
									</div>
							</div>
						<button type="submit" class="btn btn-warning pull-right"><i class="mdi mdi-content-save" ></i> Simpan</button>
						<br/><br/>
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

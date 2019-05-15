<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<?php
if ($this->session->userdata('masuk') == TRUE) {
	redirect('admin/berandaadmin');
} ?>
<html lang="en">

<head>
	<title>Login SITA_PWK</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url() ?>assets/login/images/icons/favicon.ico" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/vendor/animate/animate.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/vendor/animsition/css/animsition.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/vendor/select2/select2.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">

	<!--===============================================================================================-->

	<link href="<?php echo base_url() ?>assets/login/css/util.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/login/css/main.css" rel="stylesheet">
</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo base_url() . 'index.php/login/login' ?>" method="post">
					<span class="login100-form-title p-b-10">
						LOGIN
					</span>
					<span class="login100-form-title2 p-b-30">
						Selamat Datang, Silahkan Masuk Untuk Melanjutkan
					</span>
					<?php if ($this->session->flashdata('sukses')){ ?>
							<div class="alert alert-success" role="alert">
								<?php echo $this->session->flashdata('sukses'); ?>
							</div>
					<?php }elseif ($this->session->flashdata('error')){ ?>
							<div class="alert alert-warning" role="alert">
							<?php echo $this->session->flashdata('error') ?>
							</div>
					<?php }; ?>
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Lupa Kata Sandi?
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<a href="<?php echo site_url('Register/register') ?>" class="registerstyle">
							Register
						</a>
					</div>
					<div id="notifications_berhasil"><?php echo $this->session->flashdata('msg'); ?></div>
					<br>


				</form>




				<div class="login100-more" style="background-image: url('<?= base_url() ?>assets/login/images/bg-011.png');">
					<span class="container">
						<span class="container2">
							Selamat Datang Di Sistem Informasi Tugas Akhir Perencanaan Wilayah dan Kota
						</span>
					</span>
					<span class="container">
						<span class="container3">
							Jangan memberikan akun login (nama pengguna dan kata sandi) anda pada siapapun.Keamanan data anda terletak pada anda sendiri.
						</span>
					</span>
					<span class="container">
						<span class="container4">
							- Administrator
						</span>
					</span>
				</div>
			</div>
		</div>
	</div>


	<script>
		$('#notifications_berhasil').slideDown('slow').delay(3000).slideUp('slow');
	</script>
	<script src="<?= base_url() ?>/assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>/assets/login/vendor/animsition/js/animsition.min.js"></script>
	<script src="<?= base_url() ?>/assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>/assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>/assets/login/vendor/select2/select2.min.js"></script>
	<script src="<?= base_url() ?>/assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url() ?>/assets/login/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?= base_url() ?>/assets/login/vendor/countdowntime/countdowntime.js"></script>


	<script src="<?= base_url() ?>/assets/login/js/main.js"></script>

</body>

</html>

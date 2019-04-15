<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<?php
if ($this->session->userdata('masuk') == TRUE) {
	redirect('page');
} ?>
<html lang="en">

<head>
	<title>Login SITA PWK</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url() ?>assets/css/util.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
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

					<div class="wrap-input100 validate-input" data-validate="Valid email is required, ex: imam@student.itera.ac.id">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="p-b-32">
						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>

					</div>
					<a href="<?php echo site_url('Register/register') ?>" class="registerstyle">
						Register
					</a>
				</form>

				<div class="login100-more" style="background-image: url('<?= base_url() ?>assets/images/bg-011.png');">
					<span class="container">
						<span class="container2">
							Selamat Datang Di Sistem Informasi Tugas Akhir PWK
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

	<script src="<?= base_url() ?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>/assets/js/main.js"></script>
</body>

</html>
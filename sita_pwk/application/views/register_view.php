<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<?php
if ($this->session->userdata('masuk') == TRUE) {
  redirect('page');
} ?>
<html lang="en">
<head>
	<title>Register SITA PWK</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url()?>assets/css/util.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet">
</head>
<body style="background-color: #666666;">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo base_url().'index.php/login/login'?>" method="post">
					<span class="login100-form-title p-b-10">
						Register
					</span>
					<span class="login100-form-title2 p-b-30">
						Selamat Datang, Silahkan Registrasi Untuk Dapat Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid name is required, ex: febri dwi putro">
						<input class="input100" type="text" name="Nama Lengkap">
						<span class="focus-input100"></span>
						<span class="label-input100">Nama Lengkap</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid name is required, ex: 14116020">
						<input class="input100" type="text" name="NIM">
						<span class="focus-input100"></span>
						<span class="label-input100">NIM</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required, ex: imam@student.itera.ac.id">
						<input class="input100" type="text" name="Email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Alamat is required">
						<input class="input100" type="text" name="Alamat">
						<span class="focus-input100"></span>
						<span class="label-input100">Alamat</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="No. Telepon is required">
						<input class="input100" type="text" name="No telepon">
						<span class="focus-input100"></span>
						<span class="label-input100">No telepon</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>

					</div>
				</form>

				<div class="login100-more" style="background-image: url('<?=base_url()?>assets/images/bg-011.png');">
					<span class="container">
						<span class="container2">
							Selamat Datang Di Sistem Informasi Tugas Akhir PWK
						</span>
					</span>
					<span class="container">
						<span class="container3">
							Jangan memberikan akun Login (nama pengguna dan kata sandi) anda pada siapapun.Keamanan data anda terletak pada anda sendiri.
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

	<script src="<?=base_url()?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?=base_url()?>/assets/js/main.js"></script>
</body>
</html>

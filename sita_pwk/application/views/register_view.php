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
	<title>Register SITA PWK</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url() ?>assets/css/util.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
</head>

<body style="background-color: #666666;">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="<?= base_url('register/actionregister'); ?>">
					<span class="login100-form-title p-b-10">
						Register
					</span>
					<span class="login100-form-title2 p-b-30">
						Selamat Datang, Silahkan Registrasi Untuk Dapat Login
					</span>

					<?php echo form_open('register/actionregister'); ?>
					<div class="wrap-input100 validate-input " data-validate="Valid name is required, ex: febri dwi putro">
						<input class="input100" type="text" name="Nama" id="Nama">
						<span class="focus-input100"></span>
						<span class="label-input100">Nama Lengkap</span>
						<?= form_error(
							'Nama',
							'<small class="text-danger pl-5">',
							'</small>'
						); ?>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid name is required, ex: 14116020">
						<input class="input100" type="text" name="NIM" id="NIM">
						<span class="focus-input100"></span>
						<span class="label-input100">NIM</span>
						<?= form_error(
							'NIM',
							'<small class="text-danger pl-5">',
							'</small>'
						); ?>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required, ex: imam@student.itera.ac.id">
						<input class="input100" type="text" name="Email" id="Email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
						<?= form_error(
							'Email',
							'<small class="text-danger pl-5">',
							'</small>'
						); ?>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Alamat is required">
						<input class="input100" type="text" name="Alamat" id="Alamat">
						<span class="focus-input100"></span>
						<span class="label-input100">Alamat</span>
						<?= form_error(
							'Alamat',
							'<small class="text-danger pl-5">',
							'</small>'
						); ?>
					</div>

					<div class="wrap-input100 validate-input" data-validate="No. Telepon is required">
						<input class="input100" type="text" name="No_telepon" id="No_telepon">
						<span class="focus-input100"></span>
						<span class="label-input100">No telepon</span>
						<?= form_error(
							'No_telepon',
							'<small class="text-danger pl-5">',
							'</small>'
						); ?>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Tempat lahir is required">
						<input class="input100" type="text" name="Tempat_lahir" id="Tempat_lahir">
						<span class="focus-input100"></span>
						<span class="label-input100">Tempat lahir</span>
						<?= form_error(
							'Tempat_lahir',
							'<small class="text-danger pl-5">',
							'</small>'
						); ?>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Tanggal lahir is required">
						<input class="input100" type="date" name="Tanggal_lahir" id="Tanggal_lahir">
						<span class="focus-input100"></span>
						<span class="label-input100">Tanggal lahir</span>
						<?= form_error(
							'Tanggal_lahir',
							'<small class="text-danger pl-5">',
							'</small>'
						); ?>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="Password" id="Password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
						<?= form_error(
							'Password',
							'<small class="text-danger pl-5">',
							'</small>'
						); ?>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="Ulangi_password" id="Ulangi_password">
						<span class="focus-input100"></span>
						<span class="label-input100">Ulangi Password</span>
						<?= form_error(
							'Ulangi_password',
							'<small class="text-danger pl-5">',
							'</small>'
						); ?>
					</div>


					<div type="submit" class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>

					</div>

					<hr>
					<div class="text-center">
						<a class="small" href="forgot-password.html">Forgot Password ?</a>
					</div>

					<div class="text-center">
						<a class="small" href="<?= base_url('login'); ?>">Already have an account ? Login !</a>
					</div>


				</form>
				<?php echo form_close(); ?>

				<div class="login100-more" style="background-image: url('<? = base_url() ?>assets/images/bg-011.png');">
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

	<script src="<? = base_url() ?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<? = base_url() ?>/assets/css/bootstrap.min.css"></script>
	<script src="<? = base_url() ?>/assets/js/bootstrap.min.js"></script>
	<script src="<? = base_url() ?>/assets/js/main.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register SITA_PWK</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?php echo base_url() ?>assets/register/images/icons/favicon.ico" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/register/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/register/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/register/fonts/Linearicons-Free-v1.0.0/icon-font.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/register/fonts/iconic/css/material-design-iconic-font.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/register/vendor/animate/animate.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/register/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/register/vendor/animsition/css/animsition.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/register/vendor/select2/select2.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/register/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">


	<link href="<?php echo base_url() ?>assets/register/css/util.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/register/css/main.css" rel="stylesheet">
</head>

<body style="background-color: #999999;">

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('<?= base_url() ?>assets/images/bg-011.png');">
				<span class="container">

				</span>
			</div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-6 p-b-6">
				<form class="login100-form validate-form" method="post" action="<?= base_url('register/actionregister'); ?>">
					<span class="login100-form-title p-b-25">
						REGISTER
					</span>

					<span class="login100-form-title2 p-b-30">
						Selamat Datang, Silahkan Registrasi Untuk Dapat Login
					</span>

					<?php echo form_open('register/actionregister'); ?>

					<div class="wrap-input100 validate-input" data-validate="Nama wajib diisi">
						<span class="label-input100">Nama Lengkap</span>
						<input class="input100" type="text" name="Nama" id="Nama" placeholder="Name...">
						<span class="focus-input100"></span>

						<?= form_error(
							'Nama',
							'<small class="text-danger pl-5">',
							'</small>'
						); ?>

					</div>

					<div class="wrap-input100 validate-input" data-validate="NIM wajib diisi">
						<span class="label-input100">NIM</span>
						<input class="input100" type="text" name="NIM" id="NIM" placeholder="NIM...">
						<span class="focus-input100"></span>

						<?= form_error(
							'NIM',
							'<small class="text-danger pl-5">',
							'</small>'
						); ?>

					</div>

					<div class="wrap-input100 validate-input" data-validate="Format e-mail : username@student.itera.ac.id">
						<span class="label-input100">E-mail</span>
						<input class="input100" type="text" name="Email" id="Email" placeholder="Email...">
						<span class="focus-input100"></span>

						<?= form_error(
							'Email',
							'<small class="text-danger pl-5">',
							'</small>'
						); ?>

					</div>


					<div class="wrap-input100 validate-input" data-validate="No. telp is wajib diisi">
						<span class="label-input100">No. Telp</span>
						<input class="input100" type="text" name="No_telepon" id="No_telepon" placeholder="Telepon...">
						<span class="focus-input100"></span>

						<?= form_error(
							'No_telepon',
							'<small class="text-danger pl-5">',
							'</small>'
						); ?>

					</div>

					<div class="wrap-input100 validate-input" data-validate="Alamat is wajib diisi">
						<span class="label-input100">Alamat</span>
						<input class="input100" type="text" name="Alamat" id="Alamat" placeholder="	Alamat...">
						<span class="focus-input100"></span>

						<?= form_error(
							'Alamat',
							'<small class="text-danger pl-5">',
							'</small>'
						); ?>

					</div>


					<div class="wrap-input100 validate-input" data-validate="Password wajib diisi">
						<span class="label-input100">Password</span>
						<input class="input100" type="text" name="Password" id="Password" placeholder="*************">
						<span class="focus-input100"></span>

						<?= form_error(
							'Password',
							'<small class="text-danger pl-5">',
							'</small>'
						); ?>

					</div>

					<div class="wrap-input100 validate-input" data-validate="Ulangi password wajib diisi">
						<span class="label-input100">Ulangi Password</span>
						<input class="input100" type="password" name="Ulangi_password" id="Ulangi_password" placeholder="*************">
						<span class="focus-input100"></span>
						<?= form_error(
							'Ulangi_password',
							'<small class="text-danger pl-5">',
							'</small>'
						); ?>
					</div>

					<<<<<<< HEAD <<<<<<< HEAD=======>>>>>>> origin/febridwiputro
						<div type="submit" class="container-login100-form-btn">
							<button class="login100-form-btn">
								Register
							</button>

						</div>

						<hr>
						<div class="text-center">
							<a class="small" href="<?php echo site_url('Register/forgotpassword') ?>">Forgot Password ?</a>
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
				=======
				<div class="container-login100-form-btn">
					<div type="submit" class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>

					<a href="<?= base_url('login'); ?>" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
						Sign in
						<i class="fa fa-long-arrow-right m-l-5"></i>
					</a>

				</div>
				<hr>
				<div class="text-center">
					<a class="small" href="<?php echo site_url('Register/forgotpassword') ?>">Forgot Password ?</a>
				</div>

				</form>
				<?php echo form_close(); ?>
				>>>>>>> master
			</div>
		</div>
	</div>

	<<<<<<< HEAD <script src="<? = base_url() ?>/assets/vendor/jquery/jquery-3.2.1.min.js">
		</script>
		<script src="<? = base_url() ?>/assets/css/bootstrap.min.css"></script>
		<script src="<? = base_url() ?>/assets/js/bootstrap.min.js"></script>
		<script src="<? = base_url() ?>/assets/js/main.js"></script>
		=======
		<script src="<?= base_url() ?>assets/register/vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="<?= base_url() ?>assets/register/vendor/animsition/js/animsition.min.js"></script>
		<script src="<?= base_url() ?>assets/register/vendor/bootstrap/js/popper.js"></script>
		<script src="<?= base_url() ?>assets/register/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?= base_url() ?>assets/register/vendor/select2/select2.min.js"></script>
		<script src="<?= base_url() ?>assets/register/vendor/daterangepicker/moment.min.js"></script>
		<script src="<?= base_url() ?>assets/register/vendor/daterangepicker/daterangepicker.js"></script>
		<script src="<?= base_url() ?>assets/register/vendor/countdowntime/countdowntime.js"></script>
		<script src="<?= base_url() ?>assets/register/js/main.js"></script>

		>>>>>>> master
</body>

</html>
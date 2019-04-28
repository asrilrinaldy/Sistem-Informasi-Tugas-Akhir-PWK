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
	<title>Daftar SITA_PWK</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url() ?>assets/daftar/images/icons/favicon.ico" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/daftar/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/daftar/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/daftar/fonts/Linearicons-Free-v1.0.0/icon-font.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/daftar/vendor/animate/animate.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/daftar/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/daftar/vendor/animsition/css/animsition.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/daftar/vendor/select2/select2.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/daftar/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">

	<!--===============================================================================================-->

	<link href="<?php echo base_url() ?>assets/daftar/css/util.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/daftar/css/main.css" rel="stylesheet">
</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="<?= base_url('register/actionregister'); ?>">
					<span class="login100-form-title p-b-20">
						Daftar
					</span>

					<div class="wrap-input100 validate-input" data-validate="Nama wajib diisi">
						<span class="label-input100">Nama Lengkap</span>
						<input class="input100" type="text" name="Nama" id="Nama" placeholder="Nama...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="NIM wajib diisi">
						<span class="label-input100">NIM</span>
						<input class="input100" type="text" name="NIM" id="NIM" placeholder="NIM...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Format e-mail : username@student.itera.ac.id">
						<span class="label-input100">E-mail</span>
						<input class="input100" type="text" name="Email" id="Email" placeholder="E-mail...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="No. telp is wajib diisi">
						<span class="label-input100">No. Telp</span>
						<input class="input100" type="text" name="No_telepon" id="No_telepon" placeholder="Telepon...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Alamat wajib diisi">
						<span class="label-input100">Alamat</span>
						<input class="input100" type="text" name="Alamat" id="Alamat" placeholder="Alamat...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password wajib diisi">
						<span class="label-input100">Kata Sandi</span>
						<input class="input100" type="password" name="Password" id="Password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password wajib diisi">
						<span class="label-input100">Ulangi Kata Sandi</span>
						<input class="input100" type="password" name="Ulangi_password" id="Ulangi_password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									Saya setuju dan
									<a href="#" class="txt2 hov1">
										Menjamin Kebenaran Informasi diatas
									</a>
								</span>
							</label>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<div type="submit">
							<button class="login100-form-btn">
								Daftar
							</button>
						</div>

						<a href="<?= base_url('login'); ?>" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Masuk
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>


					</div>

				</form>

				<div class="login100-more" style="background-image: url('<?= base_url() ?>assets/daftar/images/bg-011.png');">
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



	<script src="<?= base_url() ?>/assets/daftar/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>/assets/daftar/vendor/animsition/js/animsition.min.js"></script>
	<script src="<?= base_url() ?>/assets/daftar/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>/assets/daftar/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>/assets/daftar/vendor/select2/select2.min.js"></script>
	<script src="<?= base_url() ?>/assets/daftar/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url() ?>/assets/daftar/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?= base_url() ?>/assets/daftar/vendor/countdowntime/countdowntime.js"></script>


	<script src="<?= base_url() ?>/assets/daftar/js/main.js"></script>

</body>

</html>
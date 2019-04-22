<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link href="<?php echo base_url()?>assets/register/images/icons/favicon.ico" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/register/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/register/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/register/fonts/Linearicons-Free-v1.0.0/icon-font.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/register/fonts/iconic/css/material-design-iconic-font.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/register/vendor/animate/animate.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/register/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/register/vendor/animsition/css/animsition.min.css" rel="stylesheet">	
	<link href="<?php echo base_url()?>assets/register/vendor/select2/select2.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/register/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">


	<link href="<?php echo base_url()?>assets/register/css/util.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/register/css/main.css" rel="stylesheet">
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-011.png');">
				<div class="login100-more" style="background-image: url('<?=base_url()?>assets/images/bg-011.png');">
					

				</div>
			</div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-8 p-b-8">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-25" >
						REGISTER
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Nama Lengkap</span>
						<input class="input100" type="text" name="name" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">NIM</span>
						<input class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="text" name="pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "No. telp is required">
						<span class="label-input100">No. Telp</span>
						<input class="input100" type="text" name="repeat-pass" placeholder="Telepon...">
						<span class="focus-input100"></span>
					</div>

					
					<span class="label-input100">Tempat dan Tanggal Lahir</span>
    	    			<br>
    	    			<td>
    	    				<input type="text" style="width: 100px" placeholder="Tempat">
    	       				<input type="date" style="width: 110px">
    	       				<span class="focus-input100"></span>
    	    			</td>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<br>
						<span class="label-input100">Alamat</span>
						<input class="input100" type="text" name="repeat-pass" placeholder="Alamat...">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div>
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign Up
							</button>
						</div>

						<a href="#" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<script src="<?=base_url()?>assets/register/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?=base_url()?>assets/register/vendor/animsition/js/animsition.min.js"></script>
	<script src="<?=base_url()?>assets/register/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url()?>assets/register/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/register/vendor/select2/select2.min.js"></script>
	<script src="<?=base_url()?>assets/register/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=base_url()?>assets/register/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?=base_url()?>assets/register/vendor/countdowntime/countdowntime.js"></script>
	<script src="<?=base_url()?>assets/register/js/main.js"></script>

</body>
</html>
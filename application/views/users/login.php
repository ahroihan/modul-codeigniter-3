<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Language" content="id-ID">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no"> -->
	<title><?php echo $title; ?></title>
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/logo.jpg') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/parsley/parsley.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/login/css/style.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/login/css/owl.carousel.min.css') ?>">
</head>

<body style="background: #000000" class="skin-blue">
	<div id="wrap">
		<div id="regbar">
			<img src="<?php echo base_url('assets/img/logo.jpg') ?>" width="40px" style="margin-right: 10px;">
			<span class="brand"><?php echo $title; ?></span>
			<h3>
				<a href="#" id="loginform">
					<img src="<?php echo base_url('assets/login/img/login-white.png'); ?>" alt="Login" width="25">
				</a>
			</h3>
			<div class="login">
				<div class="arrow-up"></div>
				<div class="formholder">
					<div class="randompad">
						<fieldset>
							<form action="<?php echo $action; ?>" method="POST" data-parsley-validate>
								<!-- hapus bagian  value="admin" -->
								<label><b>Username</b></label>
								<input type="text" name="username" autofocus required value="admin" />
								<label><b>Password</b></label>
								<input type="password" name="password" required value="admin" />
								<input type="submit" value="Login" />
							</form>
						</fieldset>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section>
		<div class="left-half">
			<div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
				<div class="item">
					<img style="border-radius:10px;" src="<?php echo base_url('assets/img/profile1.png') ?>" class="img-fluid mb-4" alt="logo">
				</div>
				<div class="item">
					<img style="border-radius:10px;" src="<?php echo base_url('assets/img/profile2.png') ?>" class="img-fluid mb-4" alt="logo">
				</div>
				<div class="item">
					<img style="border-radius:10px;" src="<?php echo base_url('assets/img/profile3.png') ?>" class="img-fluid mb-4" alt="logo">
				</div>
			</div>
		</div>
		<div class="right-half">
			<div style="padding: 60px 20px;">
				CONTACT US:<br><br><br>
				JL. XXXX No.40 xxxxx 1xxx7<br>
				pmwxb.xxxx.avc.id<br>
				WA : 081vvvvvv<br>
				Tlp : 021 – 55vvvvv, 5vvvvvvv<br>
				Fax. : 021 – xxxxxxxx<br><br>
				Instagram| Facebook | Twitter | Youtube
			</div>
		</div>
	</section>
	<script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.1.4.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/parsley/parsley.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/login/js/index.js') ?>"></script>
	<script src="<?php echo base_url('assets/login/js/owl.carousel.min.js') ?>"></script>
	<script>
		$(document).ready(function() {
			$("input").attr({
				'required': 'required',
				'autocomplete': 'off'
			});
		});
	</script>
</body>

</html>
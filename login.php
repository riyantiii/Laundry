<!DOCTYPE html>
<html>
</div>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){

		}
	}
	?>	
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Halaman Login</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="images/thumbs/pppp-removebg-preview.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../forms/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../forms/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/styles/icon-font.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
				
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="../assets/register.html">Register</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="images/thumbs/pppp-removebg-preview.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
 
							<h2 class="text-center text-primary">Belanja Lebih Mudah...</h2>
						</div>
						<form action="cek_login.php" method="post">
							<div class="select-role">
								<div class="btn-group btn-group-toggle" data-toggle="buttons">
									
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-login" name="username" placeholder="Username">
								<div class="input-group-append custom">
									<span class="input-group-text"></span>
								</div>
							</div>
							<div class="form-group">
								<input type="password" class="form-control form-login" name="password" placeholder="Password">
								<div class="input-group-append custom">
									<span class="input-group-text"></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password"><a href="forgot-password.html">Forgot Password</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
										<input type="submit" class="btn btn-primary btn-block tombol_login" value="LOGIN">
										<a href="index.php" class="btn btn-primary btn-block">Kembali</a>
									</div>
									<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="register.html">Register To Create Account</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="assets/vendors/scripts/core.js"></script>
	<script src="assets/vendors/scripts/script.min.js"></script>
	<script src="assets/vendors/scripts/process.js"></script>
	<script src="assets/vendors/scripts/layout-settings.js"></script>
</body>
</html>
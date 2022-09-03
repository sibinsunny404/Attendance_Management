<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
	<form method="POST" action="login_process.php">
		<div class="limiter">
			<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
				<div class="wrap-login100">
					<form class="login100-form validate-form">
						<span class="login100-form-logo">
						<i class="zmdi zmdi-account zmdi-hc-1x"></i>
						</span>
						<span class="login100-form-title p-b-34 p-t-27">
							Admin Log in
						</span>
						<?php
						if (@$_GET['Empty'] == true) {
						?>
							<div style="background-color:white;  border-radius: 10px;" class=" text-backgro text-danger text-center my-3"><?php echo $_GET['Empty'] ?></div>
						<?php
						}
						?>

						<?php
						if (@$_GET['invalid'] == true) {
						?>
							<div style="background-color:white;  border-radius: 10px;" class=" text-backgro text-danger text-center my-3"><?php echo $_GET['invalid'] ?></div>
						<?php
						}
						?>

						<?php
						if (@$_GET['sexpired'] == true) {
						?>

							<div style="background-color:white;  border-radius: 10px;" class=" text-backgro text-danger text-center my-3"><?php echo $_GET['sexpired'] ?></div>
						<?php
						}
						?>

						<div class="wrap-input100 validate-input" data-validate="Enter username">
							<input class="input100" type="text" name="uname" placeholder="Username">
							<span class="focus-input100" data-placeholder="&#xf207;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<input class="input100" type="password" name="pass" placeholder="Password">
							<span class="focus-input100" data-placeholder="&#xf191;"></span>
						</div>



						<div class="container-login100-form-btn">
							<button class="login100-form-btn" name="login">
								Login
							</button>
						</div>

						<div class="text-center p-t-30">
							<h5 style="color:aliceblue;">Student?</h5>
							<button style="border:1px;border-radius:20px;width:150px;height: 45px;" type="button" class="btn btn-info" ><a href="stud_login.php">Login Here</a></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</form>

	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>
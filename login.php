<?php

  session_start()

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main_1.css">
<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
		
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/img/img-01.png" alt="IMG">
				</div>

				<form action="signin_db.php" class="login100-form validate-form" method="post">

				<?php if (isset($_SESSION['error'])){?>
					<div class="alert alert-danger" role="alert">
						<?php 
						echo $_SESSION['error'];
						unset($_SESSION['error']);
						?>
					</div>
				<?php } ?>
				<?php if (isset($_SESSION['success'])){?>
					<div class="alert alert-success" role="alert">
						<?php 
						echo $_SESSION['success'];
						unset($_SESSION['success']);
						?>
					</div>
				<?php } ?>

					<span class="login100-form-title">
						เข้าสู่ระบบ
					</span>
					
					<div class="wrap-input100 validate-input" >
						<input type="email" class="input100" name="email" aria-describedby="Email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input type="password" class="input100" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button name="signin" type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="register.php">
							สมัครสมาชิก
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="assets/js/main_1.js"></script>

</body>
</html>
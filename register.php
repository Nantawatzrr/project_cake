<?php

  session_start();
  require_once 'config/db.php';
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
	<link rel="stylesheet" type="text/css" href="assets/css/main2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
		
			<div class="wrap-login100">
				<form action="signup_db.php"  method="post">
                
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

                <?php if (isset($_SESSION['warning'])){?>
                     <div class="alert alert-warning" role="alert">
                <?php 
                     echo $_SESSION['warning'];
                     unset($_SESSION['warning']);
                 ?>
                     </div>
                <?php } ?>
                
                <span class="login100-form-title pb-2">
						REGISTER SYSTEM
					</span>
                    <div class="wrap-input100 validate-input" >
						<input type="text" class="input100" name="firstname" aria-describedby="firstname" placeholder="Firstname">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" >
						<input type="text" class="input100" name="lastname" aria-describedby="lastname" placeholder="Lastname">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input mt-3">
                    <label for="department"></label>
                    <select class="focus-input100 text-center" name="department">
                        <option value="">--- Choose a department ---</option>
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="การเลขานุการ">การเลขานุการ</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                        <option value="ธุรกิจค้าปลีก">ธุรกิจค้าปลีก</option>
                        <option value="ออกแบบ">ออกแบบ</option>
                        <option value="คอมพิวเตอร์กราฟิก">คอมพิวเตอร์กราฟิก</option>
                        <option value="คหกรรม">คหกรรม</option>
                        <option value="อาหารและโภชนาการ">อาหารและโภชนาการ</option>
                        <option value="แฟชั่น">แฟชั่น</option>
                        <option value="การโรงเเรม">การโรงเเรม</option>
                        <option value="โลจิสติกส์">โลจิสติกส์</option>
                        <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
                    </select>
                    </div>
                    <div class="wrap-input100 validate-input mt-3">
                    <label for="class"></label>
                    <select name="class" class="focus-input100 text-center ">
                        <option value="">--- Choose a class ---</option>
                        <option value="ปวช.1/1">ปวช.1/1</option>
                        <option value="ปวช.1/2">ปวช.1/2</option>
                        <option value="ปวช.1/3">ปวช.1/3</option>

                        <option value="ปวช.2/1">ปวช.2/1</option>
                        <option value="ปวช.2/2">ปวช.2/2</option>
                        <option value="ปวช.2/3">ปวช.2/3</option>

                        <option value="ปวช.3/1">ปวช.3/1</option>
                        <option value="ปวช.3/2">ปวช.3/2</option>
                        <option value="ปวช.3/3">ปวช.3/3</option>

                        <option value="ปวส.1/1">ปวส.1/1</option>
                        <option value="ปวส.1/2">ปวส.1/2</option>
                        <option value="ปวส.1/3">ปวส.1/3</option>

                        <option value="ปวส.2/1">ปวส.2/1</option>
                        <option value="ปวส.2/2">ปวส.2/2</option>
                        <option value="ปวส.2/3">ปวส.2/3</option>
                    </select>
                    </div>
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
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input type="password" class="input100" name="c_password" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button name="signup" type="submit" class="login100-form-btn">
							SignUP
						</button>
					</div>
                
					
					
					

					<div class="text-center mt-3">
						<a class="txt2" href="login.php">
							คุณเป็นสมาชิกเเล้วใช่ไหม
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
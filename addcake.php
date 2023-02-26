<?php
    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['admin_login'])){
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบก่อน';
        header('location: login.php');
    }
    $user_id = $_SESSION['admin_login'];
    $sql = "SELECT * FROM users";
    $qUser = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php
            if (isset($_SESSION['admin_login'])){
                $user_id = $_SESSION['admin_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_OBJ);
            }
        ?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User UI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
 ]


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
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
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy - v1.3.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
        
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <p class="ms-auto mt-2 text-dark" href="#">ยินดีต้อนรับ <?php echo $row->firstname . ' ' . $row->lastname ?></p>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="admin.php">Home</a></li>
          <li><a href="admin.php">Menu</a></li>        
          <li class="dropdown"><span>SYSTEM</span><i class="bi bi-chevron-down dropdown-indicator"></i>
            <ul>
              <li><a href="logout.php">Logout</a></li>
              <li><a href="all_user.php">All User</a></li>
              <li><a href="addcake.php">Add Cake</a></li>
              <li><a href="cakeproduct.php">Product</a></li>
              <li><a href="recipient.php">Recipient</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">วิทยาลัยอาชีวศึกษานครปฐม<br>Week Cake</h2>
          <p data-aos="fade-up" data-aos-delay="100">จัดทำเพื่อให้นักศึกษาวิทยาลัยอาชีวะศึกษานครปฐม</p>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/484.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  

  

  <div class="mt-5 me-5 ms-5">
        <div class="row">
            <!-- TABLE -->
        <div class="container col-md-8 col-sm-12">
            <form action="cakestock.php"  method="post">
                
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
						เพิ่มสินค้า
					</span>
                    <div class="wrap-input100 validate-input" >
						<input type="text" class="input100" name="name_pd" aria-describedby="name_pd" placeholder="ชื่อเค้ก">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    
                    <div class="wrap-input100 validate-input" >
						<input type="text" class="input100" name="price_pd" aria-describedby="price_pd" placeholder="กำหนดราคา">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					
					
					<div class="container-login100-form-btn">
						<button name="addcake" type="submit" class="login100-form-btn">
							Add Cake
						</button>
					</div>
            </div>
        </div>
   </div>


  

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer mt-3">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              90 ถนน เทศา ตำบลพระปฐมเจดีย์ <br>
              อำเภอเมืองนครปฐม นครปฐม 73000<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> 063-336-8153<br>
              <strong>Email:</strong> nantawatzr@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Friday: 8AM</strong> - 17PM<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="https://www.facebook.com/profile.php?id=100027461245012" class="facebook"><i class="bi bi-facebook"></i></a>
          </div>
        </div>

      </div>
    </div>


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>















  <div id="preloader"></div>






























  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
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
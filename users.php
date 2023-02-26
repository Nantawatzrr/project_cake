<?php
    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['user_login'])){
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบก่อน';
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php
            if (isset($_SESSION['user_login'])){
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>USER INDEX</title>
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
        <p class="ms-auto mt-2 text-dark" href="">ยินดีต้อนรับ <?php echo $row['firstname'].' '. $row['lastname'] ?></p>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#menu">Menu</a></li>        
          <li class="dropdown"><span>SYSTEM</span><i class="bi bi-chevron-down dropdown-indicator"></i>
            <ul>
              <li><a href="logout.php">Logout</a></li>
              <li><a href="changepassword.php">Changepassword</a></li>
              <li><a href="edituser.php">EditData</a></li>
              <li><a href="cake_system.php">จองสินค้า</a></li>
              <li><a href="show_rs.php">สินค้าที่จอง</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    
    <!-- .navbar -->

      

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

  <main id="main">


    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Menu</h2>
          <p>Check Our <span>CAKE</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>ALL</h4>
            </a>
          </li><!-- End tab nav item -->


        </ul>
            <form action="cake_system.php">
        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>All CAKE</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/5.png" class="glightbox"><img src="assets/img/5.png" class="menu-img img-fluid" alt=""></a>
                <h4>เค้ก เนยสด</h4>
                <p class="ingredients">
                  ราคา ต่อ ปอน
                </p>
                <p class="price">
                160
                </p>
                <button type="submit" name="cake_buy" class="btn btn-danger">Buy Now</button>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/2.png" class="glightbox"><img src="assets/img/2.png" class="menu-img img-fluid" alt=""></a>
                <h4>เค้ก แยมผลไม้</h4>
                <p class="ingredients">
                  ราคา ต่อ ปอน
                </p>
                <p class="price">
                  190
                </p>
                <button type="submit" name="cake_buy" class="btn btn-danger">Buy Now</button>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/3.png" class="glightbox"><img src="assets/img/3.png" class="menu-img img-fluid" alt=""></a>
                <h4>เค้ก กาแฟ</h4>
                <p class="ingredients">
                  ราคา ต่อ ปอน
                </p>
                <p class="price">
                  180
                </p>
                <button type="submit" name="cake_buy" class="btn btn-danger">Buy Now</button>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item menu_css">
                <a href="assets/img/1.png" class="glightbox"><img src="assets/img/1.png" class="menu-img img-fluid" alt=""></a>
                <h4>เค้ก ช็อกโกแลต</h4>
                <p class="ingredients">
                ราคา ต่อ ปอน
                </p>
                <p class="price">
                  220
                </p>
                <button type="submit" name="cake_buy" class="btn btn-danger">Buy Now</button>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->
          </form>   
        </div>
      </div>
    </section><!-- End Menu Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.318048754566!2d100.06731341480715!3d13.819930799434436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2e5c243cc7c87%3A0x1e2896260e30270a!2z4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lit4Liy4LiK4Li14Lin4Lio4Li24LiB4Lip4Liy4LiZ4LiE4Lij4Lib4LiQ4Lih!5e0!3m2!1sth!2sth!4v1676613631241!5m2!1sth!2sth" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>90 ถนน เทศา ตำบลพระปฐมเจดีย์ อำเภอเมืองนครปฐม นครปฐม 73000</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>nantawatzr@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>063-336-8153</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div>
                  <strong>Mon-Firday:</strong> 8AM - 17PM;
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

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
</body>

</html>
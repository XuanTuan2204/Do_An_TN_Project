<?php
         session_start();
         include 'connect.php';
         include 'permission.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gogi House</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.7.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 10:30AM - 21:30PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>
            Xin chào: <span>
                     <?php 
                            include 'connect.php';
                              if (isset($_SESSION['TenTruyCap'])) {
                                  $TenTruyCap = $_SESSION['TenTruyCap'];
                                  $query= "SELECT TenNguoiDung FROM taikhoan WHERE TenTruyCap='$TenTruyCap'"; 
                                  $query_run = mysqli_query($connect,$query);
                              }
                              while ($num = mysqli_fetch_assoc ($query_run)) {
                                  $qty = $num['TenNguoiDung'];
                              }
                              echo "" . $qty . "";
                      ?>
          </li>
          <li><a href="logout.php">Thoát</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php"><img style="width: 130px; height: 80px;" src="assets/img/gogi.png"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar order-last order-lg-0">
              <ul>
                <li><a class="nav-link scrollto active" href="index_order.php">Order Today</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
      
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>GoGi House</span></h1>
          <h2>Delivering great food</h2>

          
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=8oPyUd5nc2M" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
     <section id="menu" class="menu section-bg">
          <div class="section-title" style="text-align: center;">
            <h2>Menu</h2>
            <p >Food Order History ----</p>
          </div>

          <table class="container">
            <thead>
              <tr>
                <th><h1>Số thứ tự</h1></th>
                <th><h1>Tên sản phẩm</h1></th>
                <th><h1>ảnh</h1></th>
                <th><h1>Số lượng</h1></th>
                <th><h1>Giá</h1></th>
                <th><h1>Thành tiền</h1></th>
                <th><h1>Ngày cập nhật</h1></th>
              </tr>
              <?php
                  include 'connect.php';
                  $sql="SELECT monan.TenMonAn, monan.Anh, monan.NoiDung,order_product.TenTruyCap,order_product.updateday, order_product.TrangThai,monan.Gia,order_product.SoLuong,(monan.Gia * order_product.SoLuong) as total FROM monan, order_product WHERE TenTruyCap='$TenTruyCap' AND monan.MaMonAn=order_product.MaMonAn";
                  $result=mysqli_query($connect,$sql);
                  $counter=1;
                ?>
                <?php
                  while($rows=mysqli_fetch_array($result)){
                ?>
            </thead>
            <tbody>
              <tr>
                <td ><?php echo $counter; ?></td>
                <td><?php echo $rows['TenMonAn']; ?></td>
                <td><img src="../upload/<?php echo $rows['Anh'] ?>" width="50" height="50" /></td>
                <td style="text-align: center;"><?php echo $rows['SoLuong']; ?></td>
                <td><?php $tien=$rows['Gia']; $formattedNum = number_format($tien, 0, ',', '.'); echo $formattedNum; ?></td>
                <td><?php $tien=$rows['total']; $formattedNum = number_format($tien, 0, ',', '.'); echo $formattedNum; ?></td>
                <td><?php echo $rows['updateday']; ?></td>
              </tr>
            </tbody>
            <?php $counter++; ?>
                        <?php } 
                      mysqli_close($connect);
                      ?>
          </table>
      
          <div style="margin-top: 20px;">
            <p style="float: left; margin-left: 110px;">Tổng món ăn :  <?php 
              include 'connect.php';
                $query= "SELECT COUNT(TenTruyCap) as Tong FROM order_product WHERE TenTruyCap='$TenTruyCap'"; 
                $query_run = mysqli_query($connect,$query);
            while ($num = mysqli_fetch_assoc ($query_run)) {
                $qty = $num['Tong'];
            }
            $formattedNum = number_format($qty, 0, ',', '.');
            echo ""  .$formattedNum. "" ; ?></p>
            <button style="float: right; margin-right: 110px;"><a href="index.php">Quay Lại</a></button>
          </div>
      
    </section><!-- End Menu Section -->
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>GoGi House</h3>
              <p>
                Lô A5 Nguyễn Văn Linh, phường Bình Hiên, quận Hải Châu Đà Nẵng +84<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> Gogihouse@gogi.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

   
  </footer><!-- End Footer -->
  <style>

.container th h1 {
    font-weight: bold;
    font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
    font-weight: normal;
    font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
     -moz-box-shadow: 0 2px 2px -2px #0E1119;
          box-shadow: 0 2px 2px -2px #0E1119;
}



.container td, .container th {
    padding-bottom: 2%;
    padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
    background-color: #1f293e42;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
    background-color: #2C3446;
}

.container th {
    background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
     -moz-box-shadow: 0 6px 6px -6px #0E1119;
          box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
    transition-duration: 0.4s;
    transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
  </style>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>


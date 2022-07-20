<?php 
  session_start();
  if (!isset($_SESSION['TenTruyCap'])) {
    header('Location: index.php');
}
?>
<?php
         include 'permission.php';
         include 'connect.php';
         $sql="SELECT * FROM `monan`";
         $result=mysqli_query($connect,$sql);
         /* Count table rows */
         $count=mysqli_num_rows($result);
         ?>
         <?php

         /* Check if button name "Submit" is active, do this */
         if(isset($_POST['Submit']))
         {
            $count=count($_POST["MaMonAn"]);
            $TenTruyCap = $_POST['TenTruyCap'];
            $MaMonAn = $_POST['MaMonAn'];
            $SoLuong = $_POST['SoLuong'];
            $SoBan = $_POST['SoBan'];

            for($i=0;$i<$count;$i++){
              if ($SoLuong[$i]>'0') {
                $sql = "INSERT INTO order_product (TenTruyCap,MaMonAn,SoLuong,SoBan) Value('" . $_POST['TenTruyCap'][$i] . "','" . $_POST['MaMonAn'][$i] . "','" . $_POST['SoLuong'][$i] . "','" . $_POST['SoBan'][$i] . "')";  
                $result=mysqli_query($connect,$sql);
                
              }
              $sql1 = "UPDATE order_product set SoBan='$SoBan' WHERE TenTruyCap='" . $_POST['TenTruyCap'][$i] . "' AND updateday=current_timestamp()";
              $result1=mysqli_query($connect,$sql1);
              // $sql1="DELETE FROM order_product WHERE SoLuong=0";      
              // $result1=mysqli_query($connect,$sql1);

            }
            echo "<script language='javascript'>alert('Đặt Món Thành Công');";
            header('location: quanlidsorder.php');
         }
         mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GoGi House</title>
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
            Xin chào: <span><?php 
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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="lichsuorder.php">Order History</a></li>
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

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="index_order.php" class="btn-book animated fadeInUp scrollto">View Your Menu</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=8oPyUd5nc2M" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Menu Section ======= -->
    
    <section id="menu" class="menu section-bg">
      <form action="index.php" method="POST">
      <div class="container" data-aos="fade-up">
        
          <div class="section-title">
            <h2>Menu</h2>
            <p>Check Our Tasty Menu</p>
            <div style="float: right;">
              <button><a href="index_order.php">Đã Order Món</a></button>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
             <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-Beef" >Beef</li>
              <li data-filter=".filter-Pork">Pork</li>
              <li data-filter=".filter-Ribs">Ribs</li>
              <li data-filter=".filter-Combo">Combo</li>
              <li data-filter=".filter-Dishes">Traditional Dishes</li>
              <li data-filter=".filter-Soup">Hot Pot Soup</li>
              <li data-filter=".filter-Noodle">Bibumbap Noodle</li>
            </ul>
            </div>
          </div>
          <style type="text/css">
            input {
              width: 50px;
            }
            
          </style>
          <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
            <?php
              include 'connect.php';
              $sql="SELECT * FROM `monan` where MaLoaiMonAn='L001' AND TrangThai=1";
              $result=mysqli_query($connect,$sql);
            ?>
            <?php
              while($rows=mysqli_fetch_array($result)){
            ?>
           
                <div class="col-lg menu-item filter-Beef">
             
              <input type="hidden" name="TenTruyCap[]" id="TenTruyCap" value="<?php echo $_SESSION['TenTruyCap'];  ?> ">
              <input type="hidden" name="MaMonAn[]" id="MaMonAn" value="<?php echo $rows['MaMonAn']; ?>">
                <img src="../upload/<?php echo $rows['Anh'] ?>" class="menu-img" alt=""/>
                <div class="menu-content">
                  <a><?php echo $rows['TenMonAn']; ?></a>
                  <div style="float: right;max-width: 800px; ">
                    <span style="margin-right: 40px"><?php $tien=$rows['Gia']; $formattedNum = number_format($tien, 0, ',', '.'); echo $formattedNum; ?>vnđ</span>
                    <input style="border: 0; color: #fff; background-color: #929395fc;" name="SoLuong[]" type="number" id="soluong" value="<?php echo $rows['SoLuong']; ?>">
                  </div>
                </div>
                <div class="menu-ingredients">
                  <?php echo $rows['NoiDung']; ?>
                </div>
              </div>
          
                <?php
                }
                ?>

            <?php
              include 'connect.php';
              $sql="SELECT * FROM `monan` where MaLoaiMonAn='L002' AND TrangThai=1";
              $result=mysqli_query($connect,$sql);
            ?>
            <?php
              while($rows=mysqli_fetch_array($result)){
            ?>
         
                <div class="col-lg menu-item filter-Pork">
              
              <input type="hidden" name="TenTruyCap[]" id="TenTruyCap" value="<?php echo $_SESSION['TenTruyCap'];  ?> ">
              <input type="hidden" name="MaMonAn[]" id="MaMonAn" value="<?php echo $rows['MaMonAn']; ?>">
                <img src="../upload/<?php echo $rows['Anh'] ?>" class="menu-img" alt=""/>
                <div class="menu-content">
                  <a><?php echo $rows['TenMonAn']; ?></a>
                  <div style="float: right;max-width: 800px; ">
                    <span style="margin-right: 40px"><?php $tien=$rows['Gia']; $formattedNum = number_format($tien, 0, ',', '.'); echo $formattedNum; ?>vnđ</span>
                    <input style="border: 0; color: #fff; background-color: #929395fc;" name="SoLuong[]" type="number" id="soluong" value="<?php echo $rows['SoLuong']; ?>">
                  </div>
                </div>
                <div class="menu-ingredients">
                  <?php echo $rows['NoiDung']; ?>
                </div>
              </div>
          
                <?php
                }
                ?>


            <?php
              include 'connect.php';
              $sql="SELECT * FROM `monan` where MaLoaiMonAn='L003' AND TrangThai=1";
              $result=mysqli_query($connect,$sql);
            ?>
            <?php
              while($rows=mysqli_fetch_array($result)){
            ?>
     
                <div class="col-lg menu-item filter-Ribs">
              
             
              <input type="hidden" name="TenTruyCap[]" id="TenTruyCap" value="<?php echo $_SESSION['TenTruyCap'];  ?> ">
              <input type="hidden" name="MaMonAn[]" id="MaMonAn" value="<?php echo $rows['MaMonAn']; ?>">
                <img src="../upload/<?php echo $rows['Anh'] ?>" class="menu-img" alt=""/>
                <div class="menu-content">
                  <a><?php echo $rows['TenMonAn']; ?></a>
                  <div style="float: right;max-width: 800px; ">
                    <span style="margin-right: 40px"><?php $tien=$rows['Gia']; $formattedNum = number_format($tien, 0, ',', '.'); echo $formattedNum; ?>vnđ</span>
                    <input style="border: 0; color: #fff; background-color: #929395fc;" name="SoLuong[]" type="number" id="soluong" value="<?php echo $rows['SoLuong']; ?>">
                  </div>
                </div>
                <div class="menu-ingredients">
                  <?php echo $rows['NoiDung']; ?>
                </div>
              </div>
         
                <?php
                }
                ?>

            <?php
              include 'connect.php';
              $sql="SELECT * FROM `monan` where MaLoaiMonAn='L004' AND TrangThai=1";
              $result=mysqli_query($connect,$sql);
            ?>
            <?php
              while($rows=mysqli_fetch_array($result)){
            ?>
            
                <div class="col-lg menu-item filter-Combo">
              
              
              <input type="hidden" name="TenTruyCap[]" id="TenTruyCap" value="<?php echo $_SESSION['TenTruyCap'];  ?> ">
              
              <input type="hidden" name="MaMonAn[]" id="MaMonAn" value="<?php echo $rows['MaMonAn']; ?>">
                <img src="../upload/<?php echo $rows['Anh'] ?>" class="menu-img" alt=""/>
                <div class="menu-content">
                  <a><?php echo $rows['TenMonAn']; ?></a>
                  <div style="float: right;max-width: 800px; ">
                    <span style="margin-right: 40px"><?php $tien=$rows['Gia']; $formattedNum = number_format($tien, 0, ',', '.'); echo $formattedNum; ?>vnđ</span>
                    <input style="border: 0; color: #fff; background-color: #929395fc;" name="SoLuong[]" type="number" id="soluong" value="<?php echo $rows['SoLuong']; ?>">
                  </div>
                </div>
                <div class="menu-ingredients">
                  <?php echo $rows['NoiDung']; ?>
                </div>
            </div>
                <?php
                }
                ?>

            <?php
              include 'connect.php';
              $sql="SELECT * FROM `monan` where MaLoaiMonAn='L005' AND TrangThai=1";
              $result=mysqli_query($connect,$sql);
            ?>
            <?php
              while($rows=mysqli_fetch_array($result)){
            ?>
            
                <div class="col-lg menu-item filter-Dishes">
              <input type="hidden" name="TenTruyCap[]" id="TenTruyCap" value="<?php echo $_SESSION['TenTruyCap'];  ?> ">
              
              <input type="hidden" name="MaMonAn[]" id="MaMonAn" value="<?php echo $rows['MaMonAn']; ?>">
                <img src="../upload/<?php echo $rows['Anh'] ?>" class="menu-img" alt=""/>
                <div class="menu-content">
                  <a><?php echo $rows['TenMonAn']; ?></a>
                  <div style="float: right;max-width: 800px; ">
                    <span style="margin-right: 40px"><?php $tien=$rows['Gia']; $formattedNum = number_format($tien, 0, ',', '.'); echo $formattedNum; ?>vnđ</span>
                    <input style="border: 0; color: #fff; background-color: #929395fc;" name="SoLuong[]" type="number" id="soluong" value="<?php echo $rows['SoLuong']; ?>">
                  </div>
                </div>
                <div class="menu-ingredients">
                  <?php echo $rows['NoiDung']; ?>
                </div>
            </div>
                <?php
                }
                ?>


            <?php
              include 'connect.php';
              $sql="SELECT * FROM `monan` where MaLoaiMonAn='L006' AND TrangThai=1";
              $result=mysqli_query($connect,$sql);
            ?>
            <?php
              while($rows=mysqli_fetch_array($result)){
            ?>
            
                <div class="col-lg menu-item filter-Soup">
              <input type="hidden" name="TenTruyCap[]" id="TenTruyCap" value="<?php echo $_SESSION['TenTruyCap'];  ?> ">
             
              <input type="hidden" name="MaMonAn[]" id="MaMonAn" value="<?php echo $rows['MaMonAn']; ?>">
                <img src="../upload/<?php echo $rows['Anh'] ?>" class="menu-img" alt=""/>
                <div class="menu-content">
                  <a><?php echo $rows['TenMonAn']; ?></a>
                 <div style="float: right;max-width: 800px; ">
                    <span style="margin-right: 40px"><?php $tien=$rows['Gia']; $formattedNum = number_format($tien, 0, ',', '.'); echo $formattedNum; ?>vnđ</span>
                    <input style="border: 0; color: #fff; background-color: #929395fc;" name="SoLuong[]" type="number" id="soluong" value="<?php echo $rows['SoLuong']; ?>">
                  </div>
                </div>
                <div class="menu-ingredients">
                  <?php echo $rows['NoiDung']; ?>
                </div>
            </div>
                <?php
                }
                ?>

            <?php
              include 'connect.php';
              $sql="SELECT * FROM `monan` where MaLoaiMonAn='L007' AND TrangThai=1";
              $result=mysqli_query($connect,$sql);
            ?>
            <?php
              while($rows=mysqli_fetch_array($result)){
            ?>
            
                <div class="col-lg menu-item filter-Noodle">
              <input type="hidden" name="TenTruyCap[]" id="TenTruyCap" value="<?php echo $_SESSION['TenTruyCap'];  ?> ">
             
              <input type="hidden" name="MaMonAn[]" id="MaMonAn" value="<?php echo $rows['MaMonAn']; ?>">
                <img src="../upload/<?php echo $rows['Anh'] ?>" class="menu-img" alt=""/>
                <div class="menu-content">
                  <a><?php echo $rows['TenMonAn']; ?></a>
                  <div style="float: right;max-width: 800px; ">
                    <span style="margin-right: 40px"><?php $tien=$rows['Gia']; $formattedNum = number_format($tien, 0, ',', '.'); echo $formattedNum; ?>vnđ</span>
                    <input style="border: 0; color: #fff; background-color: #929395fc;" name="SoLuong[]" type="number" id="soluong" value="<?php echo $rows['SoLuong']; ?>">
                  </div>
                </div>
                <div class="menu-ingredients">
                  <?php echo $rows['NoiDung']; ?>
                </div>
            </div>
                <?php
                }
                ?>
          </div>
        <div style="text-align: right; margin-bottom: 30px;">
                Số Bàn : <input type="number" name="SoBan" id="SoBan" value="<?php echo $rows['SoBan']; ?>" required>
        </div>
        <div style="float: right;">
                <input style="width: 80px; background-color:#cda45e ;" type="Submit" name="Submit" value="Đặt Món"> 
          </div>

      </form>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Check Our Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Architecto ut aperiam autem id</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/11.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/12.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/13.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/22.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/21.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</h2>
          <p>Organize Your Events in our Restaurant</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Parties</h3>
                  <div class="price">
                    <p><span>$189</span></p>
                  </div>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Private Parties</h3>
                  <div class="price">
                    <p><span>$290</span></p>
                  </div>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Parties</h3>
                  <div class="price">
                    <p><span>$99</span></p>
                  </div>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2672.595737955892!2d108.22731153453616!3d16.0344838944714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219fdf3c1c6db%3A0x46385e48c041ce7!2sGoGi%20House!5e0!3m2!1svi!2sus!4v1655527282323!5m2!1svi!2sus"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Lô A5 Nguyễn Văn Linh, phường Bình Hiên, quận Hải Châu Đà Nẵng +84</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  10:00 AM - 21:30 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>Gogihouse@gogi.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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


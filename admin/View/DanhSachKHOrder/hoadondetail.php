<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <?php include '../head.php'; ?> 
</head>
<body>
  <div class="container-scroller">
    
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="../../admin.php">
            <img src="../../asset/images/gogi.png" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="../../asset/images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">HeLLo, <span class="text-black fw-bold"><?php 
                            include 'connect.php';
                              if (isset($_SESSION['admin_name'])) {
                                  $admin_name = $_SESSION['admin_name'];
                                  $query= "SELECT name FROM admin WHERE admin_name='$admin_name'"; 
                                  $query_run = mysqli_query($connect,$query);
                              }
                              while ($num = mysqli_fetch_assoc ($query_run)) {
                                  $qty = $num['name'];
                              }
                              echo "" . $qty . "";
                      ?></span></h1>
            <h3 class="welcome-sub-text">Wish you a good day</h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-mail icon-lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                  <p class="fw-light small-text mb-0"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-settings m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                  <p class="fw-light small-text mb-0"> Private message </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                  <p class="fw-light small-text mb-0"> 2 days ago </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown"> 
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../asset/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../asset/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../asset/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="../../asset/images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../../asset/images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">
                  <?php 
                            include 'connect.php';
                              if (isset($_SESSION['admin_name'])) {
                                  $admin_name = $_SESSION['admin_name'];
                                  $query= "SELECT name FROM admin WHERE admin_name='$admin_name'"; 
                                  $query_run = mysqli_query($connect,$query);
                              }
                              while ($num = mysqli_fetch_assoc ($query_run)) {
                                  $qty = $num['name'];
                              }
                              echo "" . $qty . "";
                      ?>
                </p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
              <a class="dropdown-item" href="../logout.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include '../sidebar.php'; ?> 
      <!-- <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">UI Elements</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Quản Lý</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Quản Lý Người Dùng</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#">Người dùng</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#">Quyền Người Dùng</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Quản Lý Món Ăn</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">Món Ăn</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Quản Lý Danh sách Khách Hàng Gọi Món</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Hoá Đơn</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#thke" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Thống Kê</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item nav-category">pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              </ul>
            </div>
          </li>
          
        </ul>
      </nav> -->
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
              <div class="card card-rounded">
                <div class="card-body">
                  <div class="d-sm-flex justify-content-between align-items-start">
                      <div class="card-body">
                        <h1 class="card-title" style="text-align: center;">HOÁ ĐƠN THANH TOÁN</h1>
                        <hr>
                        
                    </div>
                  </div>
                  <div>
                    <div style="margin-left: 20px;">
                      <h4 style="text-align: center;"><u>Nhà Hàng :  GoGi House (Quán thịt nướng hàn quốc)</u></h4>
                      <p><b>Tài Khoản Khách Hàng  : <?php 
                            include 'connect.php';
                              if (isset($_GET['TenTruyCap'])) {
                                  $TenTruyCap = $_GET['TenTruyCap'];
                                  $query= "SELECT TenNguoiDung FROM taikhoan WHERE TenTruyCap='$TenTruyCap'"; 
                                  $query_run = mysqli_query($connect,$query);
                              }
                              while ($num = mysqli_fetch_assoc ($query_run)) {
                                  $qty = $num['TenNguoiDung'];
                              }
                              echo "" . $qty . "";
                      ?> </b></p>
                      <p><b>Số Bàn                : <?php echo $_GET['n']?></b></p>

                    </div>
                    <hr>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>STT</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Số Lượng</th>
                            <th>Giá</th>
                            <th>Ngày Cập Nhật</th>
                            <th>Thành tiền</th>
                          
                          </tr>
                           <?php
                              $key = $_GET['TenTruyCap'];
                              include 'connect.php';
                              $sql="SELECT order_product.SoBan, monan.TenMonAn,order_product.SoLuong,monan.Gia,monan.NoiDung,order_product.updateday,order_product.TenTruyCap,(monan.Gia * order_product.SoLuong) as total FROM monan, order_product WHERE monan.MaMonAn=order_product.MaMonAn AND order_product.SoLuong > 0 AND TenTruyCap='$key' AND date(updateday)=curdate()";
                              $result=mysqli_query($connect,$sql);

                              $counter=1;
                            ?>
                            <?php
                              while($rows=mysqli_fetch_array($result)){
                            ?>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"><?php echo $counter; ?></th>
                            <td><?php echo $rows['TenMonAn']; ?></td>
                            <td><?php echo $rows['SoLuong']; ?></td>
                            <td><?php $tien=$rows['Gia']; $formattedNum = number_format($tien, 0, ',', '.'); echo $formattedNum; ?></td>
                            <td><?php echo $rows['updateday']; ?></td>
                            <td><?php $tien=$rows['total']; $formattedNum = number_format($tien, 0, ',', '.'); echo $formattedNum; ?></td>
                          </tr>
                        </tbody>
                        <?php $counter++; ?>
                          <?php } 
                        mysqli_close($connect);
                        ?>
                      </table>
                      <hr>
                   </div>
                  <div style="margin-top: 20px; margin-left: 20px;">
                        <p style="float: left;">Tổng Tiền :  <?php 
                          include 'connect.php';
                            $query= "SELECT SUM(monan.Gia * order_product.SoLuong) AS tong FROM monan, order_product WHERE monan.MaMonAn=order_product.MaMonAn AND order_product.SoLuong > 0 AND TenTruyCap='$key' AND date(updateday)=curdate()"; 
                            $query_run = mysqli_query($connect,$query);
                        while ($num = mysqli_fetch_assoc ($query_run)) {
                            $qty = $num['tong'];
                        }
                        $formattedNum = number_format($qty, 0, ',', '.');
                        echo ""  .$formattedNum. "" ;
                         ?></p></br></br>
                        <p>Tổng tiền thành chữ : <?php echo '<b>'.convert_number_to_words($qty).'</b>'; ?></p>
                    </div>
                    <hr>
                  </div>
                </br>
                
                <div>
                  <button style="background: #125252; border: none; padding: 10px 12px; "><a href="hoadon.php">Quay Lại</a></button>
                 </div>
                  </div>
                </div>
              </div>
            </div>

          <style type="text/css">
                           button a{
                            text-decoration: none; 
                            color: #fff;
                           }
                         </style>
               
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <?php include '../endfooter.php'; ?>  


  <!-- End custom js for this page-->


  <?php
function convert_number_to_words($number) {
 
$hyphen      = ' ';
$conjunction = '  ';
$separator   = ' ';
$negative    = 'âm ';
$decimal     = ' phẩy ';
$dictionary  = array(
0                   => 'Không',
1                   => 'Một',
2                   => 'Hai',
3                   => 'Ba',
4                   => 'Bốn',
5                   => 'Năm',
6                   => 'Sáu',
7                   => 'Bảy',
8                   => 'Tám',
9                   => 'Chín',
10                  => 'Mười',
11                  => 'Mười một',
12                  => 'Mười hai',
13                  => 'Mười ba',
14                  => 'Mười bốn',
15                  => 'Mười năm',
16                  => 'Mười sáu',
17                  => 'Mười bảy',
18                  => 'Mười tám',
19                  => 'Mười chín',
20                  => 'Hai mươi',
30                  => 'Ba mươi',
40                  => 'Bốn mươi',
50                  => 'Năm mươi',
60                  => 'Sáu mươi',
70                  => 'Bảy mươi',
80                  => 'Tám mươi',
90                  => 'Chín mươi',
100                 => 'trăm',
1000                => 'ngàn',
1000000             => 'triệu',
1000000000          => 'tỷ',
1000000000000       => 'nghìn tỷ',
1000000000000000    => 'ngàn triệu triệu',
1000000000000000000 => 'tỷ tỷ'
);
 
if (!is_numeric($number)) {
return false;
}
 
if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
// overflow
trigger_error(
'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
E_USER_WARNING
);
return false;
}
 
if ($number < 0) {
return $negative . convert_number_to_words(abs($number));
}
 
$string = $fraction = null;
 
if (strpos($number, '.') !== false) {
list($number, $fraction) = explode('.', $number);
}
 
switch (true) {
case $number < 21:
$string = $dictionary[$number];
break;
case $number < 100:
$tens   = ((int) ($number / 10)) * 10;
$units  = $number % 10;
$string = $dictionary[$tens];
if ($units) {
$string .= $hyphen . $dictionary[$units];
}
break;
case $number < 1000:
$hundreds  = $number / 100;
$remainder = $number % 100;
$string = $dictionary[$hundreds] . ' ' . $dictionary[100];
if ($remainder) {
$string .= $conjunction . convert_number_to_words($remainder);
}
break;
default:
$baseUnit = pow(1000, floor(log($number, 1000)));
$numBaseUnits = (int) ($number / $baseUnit);
$remainder = $number % $baseUnit;
$string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
if ($remainder) {
$string .= $remainder < 100 ? $conjunction : $separator;
$string .= convert_number_to_words($remainder);
}
break;
}
 
if (null !== $fraction && is_numeric($fraction)) {
$string .= $decimal;
$words = array();
foreach (str_split((string) $fraction) as $number) {
$words[] = $dictionary[$number];
}
$string .= implode(' ', $words);
}
 
return $string;
}
?>
</body>

</html>


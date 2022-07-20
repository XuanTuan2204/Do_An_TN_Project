<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); ?>
<!DOCTYPE html>
<html>

<!-- Head -->
<head>

<title>Welcome to us</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

	<h1>Welcome to us</h1>

	<div class="w3layoutscontaineragileits">
	<h2>Login here</h2>
		<form action="#" method="post">
			<input type="text" Name="admin_name" placeholder="Username" required="">
			<input type="password" Name="password" placeholder="Password" required="">
			<ul class="agileinfotickwthree">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Remember me</label>
					<a href="#">Forgot password?</a>
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input type="submit" name="Login-submit" value="LOGIN">
				<p> To register new account <span>→</span> <a class="w3_play_icon1" href="#small-dialog1"> Click Here</a></p>
				<div class="clear"></div>
			</div>
		</form>
	</div>
	 <?php
                        //Gọi file connection.php ở bài trước
                        require_once("../database/connect.php");
                        // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
                        if (isset($_POST["Login-submit"])) {
                           // lấy thông tin người dùng
                           $admin_name = $_POST["admin_name"];
                           $password = $_POST["password"];
                           //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
                           //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
                          
                           if ($admin_name == "" || $password =="") {
                              echo "admin_name hoặc password bạn không được để trống!";
                           }else{
                              $sql = "select * from admin where admin_name = '$admin_name' and password = '$password'";
                              $query = mysqli_query($connect,$sql);
                              $num_rows = mysqli_fetch_array($query);
                              if ($num_rows==0) {
                                 echo "tên đăng nhập hoặc mật khẩu không đúng !";
                              }else {
                                    if($num_rows['permission_id'] == 'Q001')
                                    {
                                       $_SESSION['admin_name'] = $admin_name;
                                       header('location: ../admin/admin.php');
                                    }  
                                    else if($num_rows['permission_id'] == 'Q002')
                                    {
                                       $_SESSION['admin_name'] = $admin_name;
                                       header('location: ../admin/adminbep.php');
                                    }  
                              }
                           }
                        }
                        
                     ?>




	
	<!-- for register popup -->
	<!-- <div id="small-dialog1" class="mfp-hide">
		<div class="contact-form1">
			<div class="contact-w3-agileits">
				<h3>Register Form</h3>
				<form action="index.php" method="post">
						<div class="form-sub-w3ls">
							<input placeholder="Họ Tên" name="TenNguoiDung" class="mail" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Tài khoản" name="TenTruyCap" class="mail" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Mật Khẩu" name="MatKhau" type="password" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
						<div class="login-check">
							 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">I Accept Terms & Conditions</label>
						</div>
						<div class="submit-w3l">
							<input type="submit" name="Register-submit" value="Register">
						</div>
				</form>
			</div>
		</div>	
	</div> -->



	<!-- //for register popup -->
	
	<div class="w3footeragile">
		<p> &copy; 2017 Existing Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
	</div>

	
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<!-- pop-up-box-js-file -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box-js-file -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>

</body>
<!-- //Body -->

</html>
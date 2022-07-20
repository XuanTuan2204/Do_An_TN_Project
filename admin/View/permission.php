<?php  
if (isset($_SESSION['admin_name']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: /Login/loginadmin.php');
}
?>
<?php  
if (isset($_SESSION['TenTruyCap']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: ../client/TrangChu.php');
}
?>
<?php session_start();
if (isset($_SESSION['TenTruyCap'])){
unset($_SESSION['TenTruyCap']); // xóa session login
header('Location: TrangChu.php');
}
?>
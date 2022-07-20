<?php session_start();
include 'permission.php';
if (isset($_SESSION['admin_name'])){
unset($_SESSION['admin_name']); // xóa session login
header('Location: ../Login/loginadmin.php');
}
?>
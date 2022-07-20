<?php 
	include_once('connect.php');

	$name = $_POST['name'];
	$admin_name = $_POST['admin_name'];
	$password = $_POST['password'];
	$permission_id = $_POST['permission_id'];

	$sl = "insert into admin (name,admin_name,password,permission_id) Value('$name','$admin_name','$password','$permission_id')";

	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Thêm Tài Khoản Admin Thành Công');";
		echo "location.href='adminn.php';</script>";
		//header("location:theloai.php");
	}
	else
	{
		echo 'Lỗi: ',mysqli_error();
	}

?>
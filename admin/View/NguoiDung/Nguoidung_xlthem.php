<?php 
	include_once('connect.php');

	$TenNguoiDung = $_POST['TenNguoiDung'];
	$TenTruyCap = $_POST['TenTruyCap'];
	$MatKhau = $_POST['MatKhau'];

	$sl = "insert into taikhoan (TenNguoiDung,TenTruyCap,MatKhau) Value('$TenNguoiDung','$TenTruyCap','$MatKhau')";

	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Thêm Người Dùng Thành Công');";
		echo "location.href='nguoidungg.php';</script>";
		//header("location:theloai.php");
	}
	else
	{
		echo 'Lỗi: ',mysqli_error();
	}

?>
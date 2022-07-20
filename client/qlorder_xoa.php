<?php
	include('connect.php');
	echo $_GET['id'];
	echo $_GET['tt'];
	if(isset($_GET["id"]))
	{
		$key=$_GET["id"];

	}
	if ($_GET['tt']==0) {
		$sl="delete from order_product where id='$key'";
	}
	else{
		
		echo "<script language='javascript'>alert('Mục này đã được xử lý không thể xoá');";
		echo "location.href='quanlidsorder.php';</script>";
	}
	
	//if(mysql_query($sl))
	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Xoá Thành Công');";
			echo "location.href='quanlidsorder.php';</script>";
	}
?>

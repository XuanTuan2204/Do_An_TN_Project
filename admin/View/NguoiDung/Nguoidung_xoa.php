<?php
	include('connect.php');
	if(isset($_GET["ID"]))
	{
		$key=$_GET["ID"];

	}
		$sl="delete from taikhoan where ID='$key'";
	//if(mysql_query($sl))
	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Xoa thanh cong');";
			echo "location.href='nguoidungg.php';</script>";
	}
?>

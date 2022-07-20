<?php
	include('connect.php');
	if(isset($_GET["id_admin"]))
	{
		$key=$_GET["id_admin"];

	}
		$sl="delete from admin where id_admin='$key'";
	//if(mysql_query($sl))
	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Xoá Thành Công');";
			echo "location.href='admin.php';</script>";
	}
?>

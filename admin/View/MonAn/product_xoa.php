<?php
	include('connect.php');
	if(isset($_GET["MaMonAn"]))
	{
		$key=$_GET["MaMonAn"];

	}
		$sl="delete from monan where MaMonAn='$key'";
	//if(mysql_query($sl))
	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Xoá Thành Công');";
			echo "location.href='monan.php';</script>";
	}
?>

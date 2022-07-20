<?php 
	include_once('connect.php');
	$MaMonAn = $_POST['MaMonAn'];
	$MaLoaiMonAn = $_POST['MaLoaiMonAn'];
	$TenMonAn = $_POST['TenMonAn'];
	$TieuDe = $_POST['TieuDe'];

	$Anh=$_FILES['Anh']['name'];
    $anhminhhoa_tmp=$_FILES['Anh']['tmp_name'];
    move_uploaded_file($anhminhhoa_tmp,"../upload/".$Anh);

	$NoiDung = $_POST['NoiDung'];
	$NgayCapNhat = $_POST['NgayCapNhat'];
	$Gia = $_POST['Gia'];
	$TrangThai = $_POST['TrangThai'];
	
	$sl = "insert into monan (MaMonAn,MaLoaiMonAn,TenMonAn,TieuDe,Anh,NoiDung,NgayCapNhat,Gia,TrangThai) 
		Value('$MaMonAn','$MaLoaiMonAn','$TenMonAn','$TieuDe','$Anh','$NoiDung','$NgayCapNhat','$Gia','$TrangThai')";

	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Thêm Sản Phẩm Thành Công');";
		echo "location.href='monan.php';</script>";
		//header("location:theloai.php");
	}
	else
	{
		echo 'Lỗi: ',mysqli_error();
	}

?>
<?php 

  echo "đã qua đây";
  echo $_GET['MaMonAn'];
  echo $_GET['tt'];
  include_once('connect.php');
  $MaMonAn = $_GET['MaMonAn'];
  $tt = $_GET['tt'];
  if ($tt==0) {
    $sl = "UPDATE monan SET TrangThai ='1' WHERE MaMonAn='$MaMonAn'";
  }
  else{
    $sl = "UPDATE monan SET TrangThai ='0' WHERE MaMonAn='$MaMonAn'";
   }
  // $selectid = "SELECT 'TrangThai' FROM  'dishorder' WHERE 'id' = $id";

  // $sl = "UPDATE `dishorder` SET `TrangThai`=[value-9] WHERE 1";

  if(mysqli_query($connect,$sl))
  {
    // echo "<script language='javascript'>alert('Thay đổi thanh cong');";
    // // echo "location.href='demo_order.php';</script>";
    header("location:monan.php");
  }
  else
  {
    echo 'Lỗi: ',mysqli_error();
  }

?>
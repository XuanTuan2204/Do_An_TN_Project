<?php 

  echo "đã qua đây";
  echo $_GET['ID'];
  echo $_GET['tt'];
  include_once('connect.php');
  $ID = $_GET['ID'];
  $tt = $_GET['tt'];
  if ($tt==0) {
    $sl = "UPDATE taikhoan SET TrangThai ='1' WHERE ID='$ID'";
  }
  else{
    $sl = "UPDATE taikhoan SET TrangThai ='0' WHERE ID='$ID'";
   }
  // $selectid = "SELECT 'TrangThai' FROM  'dishorder' WHERE 'id' = $id";

  // $sl = "UPDATE `dishorder` SET `TrangThai`=[value-9] WHERE 1";

  if(mysqli_query($connect,$sl))
  {
    // echo "<script language='javascript'>alert('Thay đổi thanh cong');";
    // // echo "location.href='demo_order.php';</script>";
    header("location:nguoidungg.php");
  }
  else
  {
    echo 'Lỗi: ',mysqli_error();
  }

?>
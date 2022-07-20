<?php 
  echo "đã qua đây";
  echo $_GET['key'];
  echo $_GET['id'];
  echo $_GET['tt'];
  echo $_GET['n'];
  echo $_GET['sb'];
  include_once('connect.php');
  $key = $_GET['key'];
  $id = $_GET['id'];
  $tt = $_GET['tt'];
  $n = $_GET['n'];
  $sb = $_GET['sb'];

  if ($tt==0) {
    $sl = "UPDATE order_product SET TrangThai ='1' WHERE id=$id";
  }
  else{
    $sl = "UPDATE order_product SET TrangThai ='0' WHERE id=$id";
   }
  // $selectid = "SELECT 'TrangThai' FROM  'dishorder' WHERE 'id' = $id";

  // $sl = "UPDATE `dishorder` SET `TrangThai`=[value-9] WHERE 1";

  if(mysqli_query($connect,$sl))
  {
    // echo "<script language='javascript'>alert('Thay đổi thanh cong');";
    // // echo "location.href='demo_order.php';</script>";
    header("location:dsorder.php?TenTruyCap=$key&n=$n&SoBan=$sb");
  }
  else
  {
    echo 'Lỗi: ',mysqli_error();
  }

?>
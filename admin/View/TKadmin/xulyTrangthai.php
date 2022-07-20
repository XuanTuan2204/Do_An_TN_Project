<?php 

  echo "đã qua đây";
  echo $_GET['id_admin'];
  echo $_GET['tt'];
  include_once('connect.php');
  $id_admin = $_GET['id_admin'];
  $tt = $_GET['tt'];
  if ($tt==0) {
    $sl = "UPDATE admin SET status ='1' WHERE id_admin='$id_admin'";
  }
  else{
    $sl = "UPDATE admin SET status ='0' WHERE id_admin='$id_admin'";
   }
  // $selectid = "SELECT 'TrangThai' FROM  'dishorder' WHERE 'id' = $id";

  // $sl = "UPDATE `dishorder` SET `TrangThai`=[value-9] WHERE 1";

  if(mysqli_query($connect,$sl))
  {
    // echo "<script language='javascript'>alert('Thay đổi thanh cong');";
    // // echo "location.href='demo_order.php';</script>";
    header("location:adminn.php");
  }
  else
  {
    echo 'Lỗi: ',mysqli_error();
  }

?>
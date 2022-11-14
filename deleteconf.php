<?php

include '_dbconnect.php';

session_start();

if(isset($_GET['deleteid']))
{
  $id=$_GET['deleteid'];

  $dsql = "DELETE from cabs where regno = '$id'";
  $dresult = mysqli_query($conn, $dsql);

  if($dresult)
  {
    sleep(2);
    echo "<script> location.href='admin_avlcab.php'; </script>";
  }
  else{
    die("Error".mysqli_connect_error());
  }
}

 ?>

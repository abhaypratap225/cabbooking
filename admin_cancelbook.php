<?php

include '_dbconnect.php';

session_start();

if(isset($_GET['cancelid']))
{
  $id=$_GET['cancelid'];

  $sql = "UPDATE cabs SET available = 'Yes' WHERE cabs.regno = '$id'";
  $result=mysqli_query($conn, $sql);

  $dsql = "DELETE from booking where regno = '$id'";
  $dresult = mysqli_query($conn, $dsql);

  if($result)
  {
    //echo "<script> location.href='mybok.php'; </script>";
  }
  else{
    die("Error".mysqli_connect_error());
  }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cancelling....</title>
  </head>
  <body>
      <h1>Booking Cancelled Successfully! Redirecting in 2 Seconds...</h1>

       <script type="text/javascript">
       setTimeout(function() {
    window.location.href = "admin_bok.php";
 }, 1000);
       </script>

  </body>
</html>

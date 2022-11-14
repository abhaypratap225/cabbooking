<?php

include '_dbconnect.php';

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  echo "<script> location.href='uslog.php'; </script>";
  exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $pick = $_POST["pickup"];
  $dr = $_POST["drop"];

  if(isset($_GET['bookid']))
  {
    $id=$_GET['bookid'];

    $sql = "UPDATE cabs SET available = 'No' WHERE cabs.regno = '$id'";
    $result=mysqli_query($conn, $sql);

    $dsql = "Select * from cabs where cabs.regno='$id'";
    $dresult = mysqli_query($conn, $dsql);

    if($row=mysqli_fetch_assoc($dresult))
    {
      $type=$row['type'];
      $model=$row['model'];
      $reg=$row['regno'];
      $dname=$row['drivername'];
      $bookedby=$_SESSION['username'];

      $isql = "INSERT INTO `booking` (`type`, `model`, `regno`, `drivername`, `bookedby`, `pickup`, `dropl`) VALUES ('$type', '$model', '$reg', '$dname', '$bookedby', '$pick', '$dr')";
      $iresult = mysqli_query($conn, $isql);

      if($iresult)
      {
        echo "<script> location.href='mybok.php'; </script>";
      }
      else{
        die("Error".mysqli_connect_error());
      }
    }
  }
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Book Your Cab</title>
    <link rel="stylesheet" href="css/adlog.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0e3aa77966.js" crossorigin="anonymous"></script>
  </head>
  <body style="background-color : #d3f2f1;">

<!-- Navigation bar -->
    <nav class="navbar navbar-dark navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Cab Booking System - Minor Project</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
        <ul class="navbar-nav mb-3 my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adlog.html">Admin Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">User Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reg.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="avlcab.php">Back</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <h1 id="ces" style="margin-bottom: 0px;">Book Your Cab Now</h1>

    <?php echo'<form class="" action="user_cnfbook.php?bookid='.$_GET['bookid'].'" method="post">' ?>

      <div class="adform" style="margin-top: 60px; margin-bottom: 50px;">

        <h3 style="font-weight:600;">Enter Your Booking Details</h3><br>
        <div class="lineme">
          <h4 class="tinp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-location-crosshairs"></i>&nbsp;Pickup location :</h4>
          <input type="text" class="uname" name="pickup" value="">
        </div>
        <br>
        <div class="lineme">
          <h4 class="tinp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-location-dot"></i>&nbsp;Drop Location :</h4>
          <input type="text" class="upass" name="drop" value="">
        </div>
        <br>
        <hr>
        <button type="submit" name="button" class="btn btn-outline-secondary">Book Cab</button>
      </div>
    </form>


    <div class="footer">
      <h5 id="fhj">Minor Project</h5>
      <h6>Abhay Pratap Singh (0901CS201002)</h6>
    </div>

  </body>
</html>

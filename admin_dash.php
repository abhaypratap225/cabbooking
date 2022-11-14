<?php

  include '_dbconnect.php';

  $sql1 = "SELECT COUNT(*) AS `count` FROM `cabs`";
  $result1 = mysqli_query($conn, $sql1);
  $row1 = mysqli_fetch_assoc($result1);
  $count1 = $row1['count'];


  $sql2 = "SELECT COUNT(*) AS `count` FROM `cabs` where available = 'No'";
  $result2 = mysqli_query($conn, $sql2);
  $row2 = mysqli_fetch_assoc($result2);
  $count2 = $row2['count'];

  $sql3 = "SELECT COUNT(*) AS `count` FROM `cabs` where available = 'Yes'";
  $result3 = mysqli_query($conn, $sql3);
  $row3 = mysqli_fetch_assoc($result3);
  $count3 = $row3['count'];

  $sql4 = "SELECT COUNT(*) AS `count` FROM `users`";
  $result4 = mysqli_query($conn, $sql4);
  $row4 = mysqli_fetch_assoc($result4);
  $count4 = $row4['count'];

  $sql5 = "SELECT COUNT(DISTINCT drivername) AS `count` FROM `cabs`";
  $result5 = mysqli_query($conn, $sql5);
  $row5 = mysqli_fetch_assoc($result5);
  $count5 = $row5['count'];
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admindash.css">
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
            <a class="nav-link" href="uslog.php">User Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reg.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="adminpg.php">Back</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <h1 id="ces" style="margin-bottom: 55px;">Admin Dashboard</h1>

    <div class="row justify-content-around dip" style="margin-right : 80px; margin-left : 80px;">
      <div class="col-3 slc adcab">
        <h2 class="hdi">Total Cabs</h2>
        <i class="fa-solid fa-car"></i>
        <h4><?php  echo $count1; ?></h4>

      </div>

      <div class="col-3 slc avcab">
        <h2 class="hdi">Booked Cabs</h2>
        <i class="fa-solid fa-taxi"></i>
        <h4><?php  echo $count2; ?></h4>
      </div>

      <div class="col-3 slc bocab">
        <h2 class="hdi">Available Cabs</h2>
        <i class="fa-solid fa-car-on"></i>
        <h4><?php  echo $count3; ?></h4>
      </div>
    </div>

    <br><br>

    <div class="row justify-content-around dip" style="margin-right : 80px; margin-left : 80px;">
      <div class="col-3 slc dash">
        <h2 class="hdi">Registered users</h2>
        <i class="fa-solid fa-users"></i>
        <h4><?php  echo $count4; ?></h4>
      </div>

      <div class="col-3 slc regus">
        <h2 class="hdi">Drivers</h2>
        <i class="fa-sharp fa-solid fa-user"></i>
        <h4><?php  echo $count5; ?></h4>
      </div>

      <div class="col-3 slc logo">
        <h2 class="hdi">Admins</h2>
        <i class="fa-sharp fa-solid fa-user-tie"></i>
        <h4>1</h4>
      </div>

    </div>

    <div class="footer" style="margin-top : 50px; margin-bottom : 50px;">
      <h5 id="fhj">Minor Project</h5>
      <h6>Abhay Pratap Singh (0901CS201002)</h6>
    </div>

  </body>
</html>

<?php
  $alerts = false;
  $userexists = false;
  $found = 0;

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $err = "";
    include '_dbconnect.php';
    $username = $_POST["user"];
    $password = $_POST["pass"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    $exquery = "SELECT * from users WHERE username='$username'";
    $exists = mysqli_query($conn,  $exquery);

    if(!($data = mysqli_fetch_array($exists, MYSQLI_NUM)))
    {
      $sql = "INSERT INTO `users` (`username`, `password`, `fname`, `lname`) VALUES ('$username', '$password', '$fname', '$lname')";
      $result = mysqli_query($conn, $sql);
      $alerts = true;
    }
    else{
      $userexists = true;
    }
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Login</title>
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
            <a class="nav-link" href="uslog.php">User Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <h1 id="ces" style="margin-bottom: 0px;">CAB BOOKING SYSTEM</h1>

    <?php
    if($alerts)
    {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> You have been Registered and you can Login Now
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }

  if($userexists)
  {
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Username already Exists. Please try some other Username.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
    ?>

    <form class="" action="reg.php" method="post">
      <div class="adform" style="margin-top: 60px;">

        <h3 style="font-weight:600;">New User Registration</h3><br>

        <div class="lineme">
          <h4 class="tinp"><i class="fa-sharp fa-solid fa-book"></i>&nbsp;First Name :</h4>
          <input type="text" class="uname" name="fname" value="">
        </div>
        <br>
        <div class="lineme">
          <h4 class="tinp"><i class="fa-sharp fa-solid fa-address-book"></i>&nbsp;Last Name :</h4>
          <input type="text" class="upass" name="lname" value="">
        </div>
<br>
        <div class="lineme">
          <h4 class="tinp"><i class="fa-solid fa-user"></i>&nbsp;Username :</h4>
          <input type="text" class="uname" name="user" value="">
        </div>
        <br>
        <div class="lineme">
          <h4 class="tinp"><i class="fa-sharp fa-solid fa-lock"></i>&nbsp;Password :</h4>
          <input type="password" class="upass" name="pass" value="">
        </div>
        <br>
        <hr>
        <button type="submit" name="button" class="btn btn-outline-secondary reg">Submit</button>
      </div>
    </form>


    <p class="info">&nbsp;</p>



    <div class="footer"  style="margin-bottom : 30px;">
      <h5 id="fhj">Minor Project</h5>
      <h6>Abhay Pratap Singh (0901CS201002)</h6>
    </div>


    <script src="js/uslog.js" charset="utf-8"></script>
  </body>
</html>

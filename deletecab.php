<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Confirm Delete ?</title>
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
            <a class="nav-link active" href="#">User Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reg.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <h1 id="ces" style="margin-bottom: 0px;">Confirmation</h1>

    <form class="" action="uslog.php" method="post">
      <div class="adform" style="margin-top: 130px; margin-bottom: 80px;">

        <h3 style="font-weight:600;">Are you Sure you want to Delete <?php echo $_GET['deleteid']; ?>&nbsp;? </h3><br>
        <?php

        echo '
        <a href="deleteconf.php?deleteid='.$_GET['deleteid'].'"><button type="button" name="button" class="btn btn-outline-secondary btn-lg">Yes</button></a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="admin_avlcab.php"><button type="button" name="button" class="btn btn-outline-secondary btn-lg">No</button></a>
        ';

         ?>

      </div>
    </form>


    <p class="info">&nbsp;</p>



    <div class="footer">
      <h5 id="fhj">Minor Project</h5>
      <h6>Abhay Pratap Singh (0901CS201002)</h6>
    </div>

  </body>
</html>

<?php

include '_dbconnect.php';

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  echo "<script> location.href='uslog.php'; </script>";
  exit;
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Bookings</title>
    <link rel="stylesheet" href="css/adlog.css">
    <link rel="stylesheet" href="css/userpg.css">
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
            <a class="nav-link active" href="welcome.php">Back</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <h1 id="ces" style="margin-bottom: 80px;">My Bookings</h1>

  <table class="table mx-auto table-hover tsha" style="width: 80%;">
  <thead class="table-dark">
    <tr>
      <th id="th" scope="col" style = "border-radius: 8px 0px 0px 0px;">ID</th>
      <th id="th" scope="col">Type</th>
      <th id="th" scope="col">Model</th>
      <th id="th" scope="col">Reg. No.</th>
      <th id="th" scope="col">Driver Name</th>
      <th id="th" scope="col">Date Booked</th>
      <th id="th" scope="col">Pickup</th>
      <th id="th" scope="col">Drop</th>
      <th id="th" class="text-center" style = "border-radius: 0px 8px 0px 0px;" scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-light">

    <?php

    $sql = "Select * from `booking` where bookedby='".$_SESSION['username']."'";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
      while($row=mysqli_fetch_assoc($result))
      {
        $id=$row['bid'];
        $type=$row['type'];
        $model=$row['model'];
        $reg=$row['regno'];
        $dname=$row['drivername'];
        $cno=$row['bookingdate'];
        $pick=$row['pickup'];
        $dr=$row['dropl'];
        echo '
          <tr>
          <th scope="row">'.$id.'</th>
          <td>'.$type.'</td>
          <td>'.$model.'</td>
          <td>'.$reg.'</td>
          <td>'.$dname.'</td>
          <td>'.$cno.'</td>
          <td>'.$pick.'</td>
          <td>'.$dr.'</td>
          <td class="text-center"><a href="cancelbook.php?cancelid='.$reg.'"><button class="cancel">Cancel</button></a></td>
        </tr>';
      }
    }
      ?>
  </tbody>
</table>

    <div class="footer" style="margin-top : 130px;">
      <h5 id="fhj">Minor Project</h5>
      <h6>Abhay Pratap Singh (0901CS201002)</h6>
    </div>

    <style>

      a{
        text-decoration: none;
        color: inherit;
      }

      a:hover{
        color: white;
      }

      .cancel{
        border-radius : 5px;
        width : 80%;
        background-color : white;
        color : #EE4B2B;
        font-family : Montserrat;
        font-weight:600;
        border-style: solid;
        border-color: #EE4B2B;
        padding: 3px;
        transition: 0.5s;
      }

      .cancel:hover{
        background-color : #EE4B2B;
        border-color: #EE4B2B;
        color : white;
      }

      #th{
            background-color : #3BACB6;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);

        }

        .tsha{
          box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
        }

      }
    </style>

    <script src="js/user.js" charset="utf-8"></script>
  </body>
</html>

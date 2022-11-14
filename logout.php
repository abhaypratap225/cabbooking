<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != false)
{
  session_unset();
  session_destroy();

  echo "<script> location.href='uslog.php'; </script>";
  exit;
}


?>

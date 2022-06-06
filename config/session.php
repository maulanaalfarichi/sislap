<?php
session_start();
if (!isset($_SESSION['USERNAME']) and (!isset($_SESSION['PASSWORD']))) {
    $_SESSION['alert_public']='not_allowed';
    header("location:../public/login.php");
  }
 ?>

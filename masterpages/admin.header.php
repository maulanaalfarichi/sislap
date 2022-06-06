<?php 
include("../config/session.php");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title; ?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/simple-line-icons/css/simple-line-icons.css">

  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" />
  <script src="../assets/js/sweetalert.min.js"></script>
  <link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/rowReorder.dataTables.min.css">
  <link rel="stylesheet" href="../assets/css/responsive.dataTables.min.css">
  <style>
    .stepwizard-step p {
    margin-top: 0px;
    color:#000;
    }
    .stepwizard-row {
        display: table-row;
    }
    .stepwizard {
        display: table;
        width: 100%;
        position: relative;
    }
    .stepwizard-step button[disabled] {
        /*opacity: 1 !important;
        filter: alpha(opacity=100) !important;*/
    }
    .stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
        opacity:1 !important;
        color:#bbb;
    }
    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content:" ";
        width: 100%;
        height: 1px;
        background-color: #99f;
        z-index: 0;
    }
    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }
    .btn-circle {
        color: black;
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
    }
  </style>
</head>
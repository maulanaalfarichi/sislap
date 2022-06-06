<?php
include '../config/session.php';
$_SESSION['alert'] = 'update';

include("../config/koneksi.php");
$id = $_GET['id'];
		$kode_pelajaran			= $_POST['kode_pelajaran'];
		$mata_pelajaran 		= $_POST['mata_pelajaran'];
  
  // if (isset($_POST['submit'])) {

    $query = mysqli_query($connect, "UPDATE mata_pelajaran SET kode_pelajaran='$kode_pelajaran', mata_pelajaran='$mata_pelajaran'WHERE id=$id");

    header("Location:../admin/table_matapelajaran.php");
  // }

  ?>

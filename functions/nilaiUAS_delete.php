<?php 
include '../config/session.php';
  $_SESSION['alert'] = 'delete';
  
	include '../config/koneksi.php';
  $id 		= $_GET['id'];
  $query 	= mysqli_query($connect, "SELECT * FROM data_siswa WHERE id=$id");
  $data 	= mysqli_fetch_array($query);
  $nis		= $data['nis'];

  $query1 = mysqli_query($connect, "DELETE FROM nilai_uas WHERE nis=$nis");

  header("location:../admin/detail_dataSiswa.php?id=$id");

 ?>
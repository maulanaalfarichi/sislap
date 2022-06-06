<?php 
  include '../config/session.php';
  $_SESSION['alert'] = 'delete';

	include '../config/koneksi.php';
  $id 		= $_GET['id'];
  $query 	= mysqli_query($connect, "SELECT * FROM data_siswa WHERE id=$id");
  $data 	= mysqli_fetch_array($query);
  $nis		= $data['nis'];

  $query1 = mysqli_query($connect, "DELETE FROM data_ayah WHERE nis=$nis");
  $query2 = mysqli_query($connect, "DELETE FROM data_ibu WHERE nis=$nis");
  $query3 = mysqli_query($connect, "DELETE FROM data_wali WHERE nis=$nis");
  $query4 = mysqli_query($connect, "DELETE FROM data_siswa WHERE id=$id");

  header('Location: ../admin/table_datasiswa.php');

 ?>
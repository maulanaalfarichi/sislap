<?php 
  include '../config/session.php';
  $_SESSION['alert'] = 'delete';

  include '../config/koneksi.php';
  $id 		= $_GET['id'];
  $query 	= mysqli_query($connect, "SELECT * FROM tahun_lulus WHERE id=$id");
  $data 	= mysqli_fetch_array($query);
  $tahun_ajaran		= $data['tahun_ajaran'];

  $query1 = mysqli_query($connect, "DELETE FROM angakat_lulus WHERE tahun_ajaran='$tahun_ajaran'");
  $query2 = mysqli_query($connect, "DELETE FROM tahun_lulus WHERE tahun_ajaran='$tahun_ajaran'");

  header('Location: ../admin/table_angkatanlulus.php');

 ?>
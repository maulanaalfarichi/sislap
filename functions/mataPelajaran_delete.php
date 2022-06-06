<?php
include '../config/session.php';
$_SESSION['alert'] = 'delete';

  require_once '../config/koneksi.php';
  $id = $_GET['id'];
  $query = mysqli_query($connect, "DELETE FROM mata_pelajaran WHERE id=$id");
  header('Location: ../admin/table_matapelajaran.php');

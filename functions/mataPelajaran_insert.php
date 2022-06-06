<?php
	include '../config/session.php';
  	$_SESSION['alert'] = 'insert';

	// if (isset($_POST['submit'])) {
		include("../config/koneksi.php");
		$kode_pelajaran			= $_POST['kode_pelajaran'];
		$mata_pelajaran 		= $_POST['mata_pelajaran'];

    $query = mysqli_query($connect, "INSERT INTO mata_pelajaran (kode_pelajaran, mata_pelajaran) VALUES ('$kode_pelajaran', '$mata_pelajaran')");
	
    header("Location:../admin/table_matapelajaran.php");
	// }
?>

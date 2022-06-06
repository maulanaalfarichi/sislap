<?php
	include '../config/session.php';
  	$_SESSION['alert'] = 'insert';
	include '../config/koneksi.php';	
	$tahun_ajaran = $_POST['tahun_ajaran'];
	$mapel_uas = $_POST['mapel_uas'];
	$mapel_uasp = $_POST['mapel_uasp'];

	$i=0;
	foreach ($mapel_uas as $DataMapel) {

		mysqli_query($connect,("INSERT INTO angkatan_lulus (tahun_ajaran, mapel_uas, status) VALUES ('$tahun_ajaran', '$DataMapel', '0')"));
		$i++;
	} 

	$a=0;
	foreach ($mapel_uasp as $DataMapelp) {

		mysqli_query($connect,("INSERT INTO angkatan_lulus (tahun_ajaran, mapel_uas, status) VALUES ('$tahun_ajaran', '$DataMapelp', '1')"));
		$a++;
	} 

	mysqli_query($connect,("INSERT INTO tahun_lulus (tahun_ajaran) VALUES ('$tahun_ajaran')"));

    header("Location:../admin/table_angkatanlulus.php");
	
?>

<?php 
include '../config/session.php';
  $_SESSION['alert'] = 'insert';
  

include '../config/koneksi.php';
$id     = $_GET['id'];	

		$kode_pelajaran = $_POST['kode_pelajaran'];
		$nis 			= $_POST['nis'];
		$nilai 			= $_POST['nilai'];

$totalkode_pelajaran = sizeof($kode_pelajaran);

for($i=0;$i<$totalkode_pelajaran;$i++) {

    $Insertkode_pelajaran = $kode_pelajaran[$i];
    $Insertnis = $nis[$i];
    $Insertnilai = $nilai[$i];

    mysqli_query($connect,("INSERT INTO nilai_uasp (kode_pelajaran, nis, nilai) VALUES ('$Insertkode_pelajaran', '$Insertnis', '$Insertnilai')"));

}


	header("location:../admin/detail_dataSiswa.php?id=$id");
 ?>
<?php 
include '../config/session.php';
$_SESSION['alert'] = 'update';
  
include '../config/koneksi.php';
$id     = $_GET['id'];	

		$nis 					= $_POST['nis'];
		$kode_pelajaran 		= $_POST['kode_pelajaran'];
		$nilai 					= $_POST['nilai'];

$totalkode_kode_pelajaran = sizeof($kode_pelajaran);

for($i=0;$i<$totalkode_kode_pelajaran;$i++) {

    $Insertkode_pelajaran = $kode_pelajaran[$i];
    $Insertnilai = $nilai[$i];

    mysqli_query($connect,("UPDATE nilai_raport SET nilai=$Insertnilai  WHERE kode_pelajaran='$Insertkode_pelajaran' AND nis='$nis' "));

}


	header("location:../admin/detail_dataSiswa.php?id=$id");
 ?>
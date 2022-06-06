<?php
	include '../config/session.php';
 	 $_SESSION['alert'] = 'update';

	// if (isset($_POST['submit'])) {
	include("../config/koneksi.php");

	$id     = $_GET['id'];	

	$nis 					= $_POST['nis'];
	$nisn 					= $_POST['nisn'];
	$nomor_akta 			= $_POST['nomor_akta'];
	// $foto_siswa 			= $_POST['foto_siswa'];
	// $foto_siswa 			= $_FILES['foto_siswa']['name'];
	$nama_lengkap 			= $_POST['nama_lengkap'];
	$nama_panggilan 		= $_POST['nama_panggilan'];
	$tempat_lahir 			= $_POST['tempat_lahir'];
	$tanggal_lahir 			= $_POST['tanggal_lahir'];
	$jenis_kelamin 			= $_POST['jenis_kelamin'];
	$agama 					= $_POST['agama'];
	$kewarganegaraan 		= $_POST['kewarganegaraan'];
	$alamat 				= $_POST['alamat'];
	$tahun_ajaran 			= $_POST['tahun_ajaran'];
	$nomor_ijazah 			= $_POST['nomor_ijazah'];
	$id_siswa 				= $_POST['id_siswa'];
	// data page 2 - data ayah
	$nama_ayah 				= $_POST['nama_ayah'];
	$pendidikan_ayah 		= $_POST['pendidikan_ayah'];
	$pekerjaan_ayah 		= $_POST['pekerjaan_ayah'];
	$id_ayah 				= $_POST['id_ayah'];
	// data page 3 - data ibu
	$nama_ibu 				= $_POST['nama_ibu'];
	$pendidikan_ibu 		= $_POST['pendidikan_ibu'];
	$pekerjaan_ibu 			= $_POST['pekerjaan_ibu'];
	$id_ibu 				= $_POST['id_ibu'];
	// data page 3 - data wali murid
	$nama_wali 				= $_POST['nama_wali'];
	$pendidikan_wali 		= $_POST['pendidikan_wali'];
	$pekerjaan_wali 		= $_POST['pekerjaan_wali'];
	$hubungan_keluarga 		= $_POST['hubungan_keluarga'];
	$id_wali 				= $_POST['id_wali'];


	// update data siswa
	
    $query = mysqli_query($connect, "UPDATE data_siswa SET nis='$nis', nisn='$nisn', nomor_akta='$nomor_akta', nama_lengkap='$nama_lengkap', nama_panggilan='$nama_panggilan', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin=$jenis_kelamin, agama=$agama, kewarganegaraan=$kewarganegaraan, alamat='$alamat', tahun_ajaran='$tahun_ajaran', nomor_ijazah='$nomor_ijazah' WHERE id='$id_siswa' ") ;

    // update data ayah
    $query2 = mysqli_query($connect, "UPDATE data_ayah SET nama_ayah='$nama_ayah', pendidikan_ayah='$pendidikan_ayah', pekerjaan_ayah='$pekerjaan_ayah', nis='$nis' WHERE id='$id_ayah' ");

    // update data ibu
    $query3 = mysqli_query($connect, "UPDATE data_ibu SET nama_ibu='$nama_ibu', pendidikan_ibu='$pendidikan_ibu', pekerjaan_ibu='$pekerjaan_ibu', nis='$nis' WHERE id='$id_ibu' ");

    // update data wali murid
    $query4 = mysqli_query($connect, "UPDATE data_wali SET nama_wali='$nama_wali', pendidikan_wali='$pendidikan_wali', pekerjaan_wali='$pekerjaan_wali', hubungan_keluarga='$hubungan_keluarga', nis='$nis' WHERE id='$id_ibu' ");


	header("location:../admin/detail_dataSiswa.php?id=$id");
    
	// }
?>

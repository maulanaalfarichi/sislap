<?php
	include '../config/session.php';
  	$_SESSION['alert'] = 'insert';

	// if (isset($_POST['submit'])) {
	include("../config/koneksi.php");
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
	// data page 2 - data ayah
	$nama_ayah 				= $_POST['nama_ayah'];
	$pendidikan_ayah 		= $_POST['pendidikan_ayah'];
	$pekerjaan_ayah 		= $_POST['pekerjaan_ayah'];
	// data page 3 - data ibu
	$nama_ibu 				= $_POST['nama_ibu'];
	$pendidikan_ibu 		= $_POST['pendidikan_ibu'];
	$pekerjaan_ibu 			= $_POST['pekerjaan_ibu'];
	// data page 3 - data wali murid
	$nama_wali 				= $_POST['nama_wali'];
	$pendidikan_wali 		= $_POST['pendidikan_wali'];
	$pekerjaan_wali 		= $_POST['pekerjaan_wali'];
	$hubungan_keluarga 		= $_POST['hubungan_keluarga'];

	// insert data siswa
	
    $query = mysqli_query($connect, "INSERT INTO data_siswa (nis, nisn, nomor_akta, nama_lengkap, nama_panggilan, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, kewarganegaraan, alamat, tahun_ajaran, nomor_ijazah) VALUES ('$nis', '$nisn', '$nomor_akta', '$nama_lengkap', '$nama_panggilan', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$kewarganegaraan', '$alamat', '$tahun_ajaran', '$nomor_ijazah') ");
    // move_uploaded_file($_FILES['foto_siswa']['tmp_name'], "../assets/upload/".$_FILES['foto_siswa']['name']);

    // insert data ayah
    $query2 = mysqli_query($connect, "INSERT INTO data_ayah (nama_ayah, pendidikan_ayah, pekerjaan_ayah, nis) VALUES ('$nama_ayah', '$pendidikan_ayah', '$pekerjaan_ayah', '$nis') ");

    // insert data ibu
    $query3 = mysqli_query($connect, "INSERT INTO data_ibu (nama_ibu, pendidikan_ibu, pekerjaan_ibu, nis) VALUES ('$nama_ibu', '$pendidikan_ibu', '$pekerjaan_ibu', '$nis') ");

    // insert data wali murid
    $query4 = mysqli_query($connect, "INSERT INTO data_wali (nama_wali, pendidikan_wali, pekerjaan_wali, hubungan_keluarga, nis) VALUES ('$nama_wali', '$pendidikan_wali', '$pekerjaan_wali', '$hubungan_keluarga', '$nis') ");


    header("Location:../admin/table_datasiswa.php");
	// }
?>

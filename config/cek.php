<?php

session_start();
include("../config/koneksi.php") ;

	session_start();
	$username = $_POST['username'];
	$password = md5($_POST['password']);

    $query = mysqli_query($connect, "SELECT * FROM data_user WHERE username='$username' AND password='$password'");
    $rowcount = mysqli_num_rows($query);

if ($rowcount != 0) {
  	$_SESSION['USERNAME'] = $username;
  	$_SESSION['PASSWORD'] = $password;
  	$_SESSION['alert'] = 'login';
  	header("Location:../admin/");
}
else {
	$_SESSION['alert_public'] = "fail";
  	header("Location:../public/login.php");
}

 ?>



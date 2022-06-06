<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>e-Bisa</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<!-- Bootstrap core CSS     -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/paper-kit.css?v=2.1.0" rel="stylesheet"/>

	<!--     Fonts and icons     -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
	<link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="../assets/css/nucleo-icons.css" rel="stylesheet">
	<script src="../assets/js/sweetalert.min.js" type="text/javascript"></script>



</head>
<body>
	<!-- notifikasi -->
	<?php
// batas tes
if (isset($_SESSION['alert_public'])) {
  // awal copy
  if ($_SESSION['alert_public']=='fail') {
   ?>
      <script type="text/javascript">
    	swal("Kesalahan!", "Maaf, username atau password yang anda masukkan salah", "error");
  	</script>
   <?php
  }
  // batas copy
  // awal copy
  if ($_SESSION['alert_public']=='not_allowed') {
   ?>
      <script type="text/javascript">
			swal("Kesalahan!", "Maaf, anda harus login terlebih dahulu", "error");
		</script>
   <?php
  }
  // batas copy
  unset($_SESSION['alert_public']);
}
 ?>
	<!-- batas notifikasi -->

	<div class="wrapper" >
		<div class="page-header" style="background-image: url('../assets/images/wall.jpeg');">
			<div class="filter"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 ml-auto mr-auto">
						<div class="card card-register" style="margin-top: 0;">
							<h3 class="title">
								<img src="../assets/images/bjb.png" height="100px" alt="">
								<br>
								<br>
								<b>Login</b></h3>
							<form class="register-form" action="../config/cek.php" method="post">
								<label>Username</label>
								<input type="text" class="form-control" name="username" placeholder="Username">
								<label>Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password">
								<button type="submit" class="btn btn-info btn-block btn-round">Login</button>
							</form>
							<br>
						</div>
					</div>
				</div>
				<div class="footer register-footer text-center">
					<h6>&copy; <script>document.write(new Date().getFullYear())</script>, e-Bisa</h6>
				</div>
			</div>
		</div>
	</div>
</body>

<!-- Core JS Files -->
<script src="../assets/js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="../assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>

<script src="../assets/js/popper.js" type="text/javascript"></script>

<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>



</html>

<?php
require_once("config/database.php");
$page=isset($_GET['page']) ? ($_GET['page']) : "";
if($page=='action') {
	include "config/database.php";
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$query="SELECT * FROM users WHERE username='$user' AND password='$pass'";
	$cek=mysqli_query($koneksi,$query);
	$data=mysqli_fetch_array($cek);
	if ($data['username']==$user && $data['password']==$pass) {
		Session_start();
		$_SESSION['username']=$user;
			header("Location:index.php");
	}
	else {
		Echo "<script>
 alert('Maaf Username/Password Salah Atau Belum Terdaftar') window.location.href=('login.php'); </script>
"; } } ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sistem Informasi Tribina</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page bg-primary p-1">
<div class="login-box shadow bg-white rounded">
	<br>
	<div class="login-logo">
		<img src="dist/img/AdminLTELogonya.png" alt="Logo" style="width:35%;height:35%;" ><br>
		<a href="index.php"><p style="font-size:15px">Sistem Informasi Tribina<br>Dinas Pengendalian Penduduk dan Keluarga Berencana<br>
		Kota Salatiga</p></a>
	</div>
	<!-- /.login-logo -->
		<div class="card-body login-card-body">
			<form action="login.php?page=action" method="post">
				<div class="input-group mb-3">
					<input type="text" name="username" class="form-control" placeholder="Username">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" name="password" class="form-control" placeholder="Password">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-8">

					</div>
					<!-- /.col -->
					<div class="col-4">
						<button type="submit" class="btn btn-primary btn-block">Sign In</button>
					</div>
					<!-- /.col -->
				</div>
			</form>
		</div>
		<!-- /.login-card-body -->
	</div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

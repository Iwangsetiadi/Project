<?php 

session_start();

include "koneksi.php";

$err = "";
if (isset($_GET["err"]) && !empty($_GET ['err'])) {
	switch ($_GET ["err"]) {
		case 1:
			$err = "Username dan Password Kosong";
			break;
		case 2:
			$err = "Username Kosong";
			break;
		case 3:
			$err = "Password Kosong";
			break;
		case 4:
			$err = "Password Salah";
			break;
		case 5:
			$err = "Maaf Terjadi Kesalahan";
			break;
	}
}

$notif ="";
if (isset($_GET['notif']) && !empty($_GET['notif
	'])) {
	switch ($_GET('notif')) {
		case 1:
			$notif = "User berhasil dibuat, silahkan login";
			break;
	}
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Info Amga</title>
	<link rel="stylesheet" href="aset/fa/css/font-awesome.css">
	<link rel="stylesheet" href="aset/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="aset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="aset/plugins/iCheck/square/blue.css">
	<meta cotent="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no" name="viewport">
	<meta charset="utf-8">
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<b>INFO AMGA</b>
	</div>
	<div class="login-box-body">
		<p class="login-box-msg"><b>Login Form</b></p>
		<form action="vl_user.php" method="post">
			<div class="form-group has-feedback">
				<input type="text" name="Username" class="form-control" placeholder="Username"></input>
				<span class="form-control-feedback"><i class="fa fa-user"></i></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" name="Password" class="form-control" placeholder="Password"></input>
				<span class="form-control-feedback"><i class="fa fa-unlock"></i></span>
			</div>
			<div class="row">
				<div class="col-xs-8"></div>
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary">Login <i class="fa fa-sign-in"></i>
						
					</button>
				</div>
			</div>
			<br>
			<center>
				<font style="color: red;"><?php echo $err ?></font>
			</center>
			<center>
				<font style="color: green;"><?php echo $notif ?></font>
			</center>
			<br>
		</form>
	</div>
</div>
<script src="aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="aset/plugins/iCheck/icheck.min.js"></script>
</body>
</html>
<?php

include "../koneksi.php";

$Id_User			= $_GET['id'];
$Password_Lama		= $_POST["Password_Lama"];
$Password_Lama_Hash	= password_hash($Password_Lama, PASSWORD_DEFAULT);
$Password			= $_POST["Password"];
$Password_Hash		= password_hash($Password, PASSWORD_DEFAULT);
$md5				= md5($Password_Hash);

if ($cek = mysqli_query($konek, "SELECT * FROM user WHERE Id_User='$Id_User'")) {
	$r=mysqli_fetch_array($cek);
$md5				= md5($r['Password']);
		echo  '<br>Password_Lama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ' .$Password_Lama;
		echo  '<br>Password_Lama_Hash &nbsp;: ' .$Password_Lama_Hash;
		echo  '<br>Password Database&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ' .$r['Password'];
		echo  '<br>Password Database&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ' .$md5;
		die();
	
}
		die ("Terdapat Kesalahan : ".mysqli_error($konek));

?> 
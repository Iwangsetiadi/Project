<?php

include "../koneksi.php";

$Id_Usergroup_User	= $_POST["Id_Usergroup_User"];
$Username			= $_POST["User_Siswa"];
$Id_Siswa			= $_POST["User_Siswa"];
$Password			= $_POST["User_Siswa"];
$Password_Hash		= password_hash($Password, PASSWORD_DEFAULT);

if($add = mysqli_query($konek, "INSERT INTO user (Id_Usergroup_User, Id_Siswa, Username, Password) VALUES ('$Id_Usergroup_User', '$Id_Siswa', '$Username', '$Password_Hash')")){
	header("Location: user.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
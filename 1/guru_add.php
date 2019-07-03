<?php

include "../koneksi.php";

$NIP	= $_POST["NIP"];
$Nama_Guru	= $_POST["Nama_Guru"];
$Tempat_Lahir	= $_POST["Tempat_Lahir"];
$Tanggal_Lahir	= $_POST["Tanggal_Lahir"];
$JK	= $_POST["JK"];
$Alamat	= $_POST["Alamat"];

$Kode_Mapel_Guru	= $_POST["Kode_Mapel_Guru"];
$Id_Usergroup_User	=  2;
$Username			= $_POST["NIP"];
$Id_Guru			= $_POST["NIP"];
$Password			= $_POST["NIP"];
$Password_Hash		= password_hash($Password, PASSWORD_DEFAULT);


if($add = mysqli_query($konek, "INSERT INTO guru VALUES ('$NIP', '$Nama_Guru', '$Tempat_Lahir', '$Tanggal_Lahir', '$Alamat', '$JK', '$Kode_Mapel_Guru')")){
	if($add = mysqli_query($konek, "INSERT INTO user (Id_Usergroup_User, Id_Guru, Username, Password) VALUES ('$Id_Usergroup_User', '$Id_Guru', '$Username', '$Password_Hash')")){
	header("Location: guru.php");
	exit();
}
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
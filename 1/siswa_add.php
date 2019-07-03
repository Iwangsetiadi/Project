<?php

include "../koneksi.php";

$NIS			= $_POST["NIS"];
$Nama_Siswa		= $_POST["Nama_Siswa"];
$Tempat_Lahir	= $_POST["Tempat_Lahir"];
$Tanggal_Lahir	= $_POST["Tanggal_Lahir"];
$JK				= $_POST["JK"];
$Alamat			= $_POST["Alamat"];
$Agama			= $_POST["Agama"];
$Kode_Kelas_Siswa	= $_POST["Kode_Kelas_Siswa"];

$Id_Usergroup_User	= 3;
$Username			= $_POST["NIS"];
$Id_Siswa			= $_POST["NIS"];
$Password			= $_POST["NIS"];
$Password_Hash		= password_hash($Password, PASSWORD_DEFAULT);

if($add = mysqli_query($konek, "INSERT INTO siswa VALUES ('$NIS', '$Nama_Siswa', '$Tempat_Lahir', '$Tanggal_Lahir', '$Alamat', '$JK','$Agama', '$Kode_Kelas_Siswa')")){
	if($add = mysqli_query($konek, "INSERT INTO user (Id_Usergroup_User, Id_Siswa, Username, Password) VALUES ('$Id_Usergroup_User', '$Id_Siswa', '$Username', '$Password_Hash')")){
	header("Location: siswa.php");
	exit();
	}
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
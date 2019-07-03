<?php

include "../koneksi.php";

$NIP				= $_POST["NIP"];
$Nama_Guru			= $_POST["Nama_Guru"];
$Tempat_Lahir		= $_POST["Tempat_Lahir"];
$Tanggal_Lahir		= $_POST["Tanggal_Lahir"];
$Alamat				= $_POST["Alamat"];
$JK					= $_POST["JK"];
$Kode_Mapel_Guru	= $_POST["Kode_Mapel_Guru"];

if($edit = mysqli_query($konek, "UPDATE guru SET 
	
	Nama_Guru 			='$Nama_Guru', 
	Tempat_Lahir		='$Tempat_Lahir', 
	Tanggal_Lahir		='$Tanggal_Lahir', 
	Alamat				='$Alamat', 
	JK 					='$JK',  
	Kode_Mapel_Guru		='$Kode_Mapel_Guru' 
	WHERE 			NIP ='$NIP'")){
	header("Location: guru.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?> 
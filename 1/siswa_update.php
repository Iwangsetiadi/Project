<?php

include "../koneksi.php";

$NIS				= $_POST["NIS"];
$Nama_Siswa			= $_POST["Nama_Siswa"];
$Tempat_Lahir		= $_POST["Tempat_Lahir"];
$Tanggal_Lahir		= $_POST["Tanggal_Lahir"];
$Alamat				= $_POST["Alamat"];
$JK					= $_POST["JK"];
$Agama					= $_POST["Agama"];
$Kode_Kelas_Siswa	= $_POST["Kode_Kelas_Siswa"];

if($edit = mysqli_query($konek, "UPDATE siswa SET 
	
	Nama_Siswa 			='$Nama_Siswa', 
	Tempat_Lahir		='$Tempat_Lahir', 
	Tanggal_Lahir		='$Tanggal_Lahir', 
	Alamat				='$Alamat', 
	JK 					='$JK',  
	Agama 				='$Agama',  
	Kode_Kelas_Siswa		='$Kode_Kelas_Siswa' 
	WHERE 			NIS ='$NIS'")){
	header("Location: siswa.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?> 
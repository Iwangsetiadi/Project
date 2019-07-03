<?php

include "../koneksi.php";

$id=$_GET['id'];
$Kode_Siswa_Nilai			= $_POST["Kode_Siswa_Nilai"];
$Nilai						= $_POST["Nilai"];
$Bab						= $_POST["Bab"];

if($edit = mysqli_query($konek, "UPDATE nilai SET 
	
	Kode_Siswa_Nilai 	='$Kode_Siswa_Nilai',
	Nilai 				='$Nilai',
	Bab 				='$Bab'
	WHERE 			id ='$id'")){
	header("Location: nilai.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?> 
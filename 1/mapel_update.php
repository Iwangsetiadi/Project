<?php

include "../koneksi.php";

$Kode_Mapel			= $_POST["Kode_Mapel"];
$Nama_Mapel			= $_POST["Nama_Mapel"];

if($edit = mysqli_query($konek, "UPDATE mapel SET 
	
	Nama_Mapel 			='$Nama_Mapel'
	WHERE 			Kode_Mapel ='$Kode_Mapel'")){
	header("Location: mapel.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?> 
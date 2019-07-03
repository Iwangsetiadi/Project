<?php

include "../koneksi.php";

$Kode_Mapel	= $_POST["Kode_Mapel"];
$Nama_Mapel	= $_POST["Nama_Mapel"];

if($add = mysqli_query($konek, "INSERT INTO mapel VALUES ('$Kode_Mapel', '$Nama_Mapel')")){
	header("Location: mapel.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
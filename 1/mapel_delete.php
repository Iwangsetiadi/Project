<?php

include "../koneksi.php";

$Kode_Mapel	= $_GET["Kode_Mapel"];

if($delete = mysqli_query($konek, "DELETE FROM mapel WHERE Kode_Mapel='$Kode_Mapel'")){
	header("Location: mapel.php");
	exit();
}
die("Terapat Kesalahan :". mysqli_error($konek));

?>
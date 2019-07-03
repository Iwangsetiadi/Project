<?php

include "../koneksi.php";

$Kode_Mapel_Nilai	= $_POST["Kode_Mapel_Nilai"];
$Kode_Siswa_Nilai	= $_POST["Kode_Siswa_Nilai"];
$Nilai	= $_POST["Nilai"];
$Bab	= $_POST["Bab"];

if($add = mysqli_query($konek, "INSERT INTO nilai VALUES ('','$Kode_Mapel_Nilai','$Kode_Siswa_Nilai', '$Nilai', '$Bab')")){
	header("Location: nilai.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
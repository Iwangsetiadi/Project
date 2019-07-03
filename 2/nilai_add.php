<?php

include "../koneksi.php";

$Kode_Mapel_Nilai	= $_POST["Kode_Mapel_Nilai"];
$Kode_Siswa_Nilai	= $_POST["Kode_Siswa_Nilai"];
$Nilai	= $_POST["Nilai"];
$Bab	= $_POST["Bab"];
$Kode_Guru = $_POST["Kode_Guru"];

if($add = mysqli_query($konek, "INSERT INTO nilai VALUES ('','$Kode_Mapel_Nilai','$Kode_Siswa_Nilai', '$Nilai', '$Bab', '$Kode_Guru')")){
	header("Location: nilai.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
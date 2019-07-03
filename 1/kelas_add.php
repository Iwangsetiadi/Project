<?php

include "../koneksi.php";

$Kode_Kelas	= $_POST["Kode_Kelas"];
$Kode_Jenjang_Kelas	= $_POST["Kode_Jenjang_Kelas"];
$Kode_Jurusan_Kelas	= $_POST["Kode_Jurusan_Kelas"];
$Kode_Rombel_Kelas	= $_POST["Kode_Rombel_Kelas"];

if($add = mysqli_query($konek, "INSERT INTO kelas VALUES ('$Kode_Kelas', '$Kode_Jenjang_Kelas', '$Kode_Jurusan_Kelas', '$Kode_Rombel_Kelas')")){
	header("Location: kelas.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
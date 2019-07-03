<?php

include "../koneksi.php";

$NIS	= $_GET["NIS"];

if($delete = mysqli_query($konek, "DELETE FROM siswa WHERE NIS='$NIS'")){
	if($delete = mysqli_query($konek, "DELETE FROM user WHERE Username='$NIS'")){
	header("Location: siswa.php");
	exit();
}
}

die("Terapat Kesalahan :". mysqli_error($konek));

?>
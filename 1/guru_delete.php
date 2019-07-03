<?php

include "../koneksi.php";

$NIP	= $_GET["NIP"];

if($delete = mysqli_query($konek, "DELETE FROM guru WHERE NIP='$NIP'")){
	if($delete = mysqli_query($konek, "DELETE FROM user WHERE Username='$NIP'")){
	header("Location: guru.php");
	exit();
	}
}
die("Terapat Kesalahan :". mysqli_error($konek));

?>
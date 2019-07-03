<?php

include "../koneksi.php";

$name	= $_POST["name"];
$email			= $_POST["email"];
$subject			= $_POST["subject"];
$message		= $_POST["message"];

if($add = mysqli_query($konek, "INSERT INTO kontak VALUES ('', '$name', '$email', '$subject', '$message')")){
	header("Location: contact.php?pesan=Berhasil Terkirim");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
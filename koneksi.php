<?php 

$konek = mysqli_connect("localhost", 'id7977673_rooot','qwertyuiop', 'id7977673_siakad');

if (mysqli_connect_errno()) {
	printf("Gagal Terkoneksi : ".mysqli_connect_error()
		);
	exit();
	}


?>
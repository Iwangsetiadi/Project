<?php
session_start();
include "../koneksi.php";

$Id_User			= $_GET['id'];
$Password_Lama		= $_POST["Password_Lama"];
$Password_Lama_Hash	= password_hash($Password_Lama, PASSWORD_DEFAULT);
$Password			= $_POST["Password"];
$Password_Hash		= password_hash($Password, PASSWORD_DEFAULT);


$query = mysqli_query ($konek, "SELECT * FROM user WHERE Id_User='$Id_User'");

if ($_POST){
	$queryuser = mysqli_query ($konek, "SELECT * FROM user WHERE Id_User='$Id_User'");
	$user = mysqli_fetch_array ($queryuser);
	if($user){
			if (password_verify($Password_Lama, $user["Password"])){

					if($edit = mysqli_query($konek, "UPDATE user SET 
						Password 				='$Password_Hash'
						WHERE 			Id_User ='$Id_User'")){
						header("Location: index.php");
						exit();
					}
				}
				else{
					echo "Password Salah";
					exit();
				}
			}
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));
	
?>
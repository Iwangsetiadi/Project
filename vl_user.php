<?php
session_start();
include "koneksi.php";

$Username = $_POST["Username"];
$Password = $_POST["Password"];

$query = mysqli_query ($konek, "SELECT * FROM user WHERE Username='$Username' AND Password='$Password'");

if ($_POST){
	
	$queryuser = mysqli_query ($konek, "SELECT * FROM user 
	LEFT JOIN guru ON Id_Guru = NIP  
	LEFT JOIN mapel ON Kode_Mapel_Guru = Kode_Mapel
	
	WHERE Username='$Username'");
		
	$user = mysqli_fetch_array ($queryuser);
	
	if($user){
			if (password_verify($Password, $user["Password"])){
				
				$_SESSION["Username"] 			= $user["Username"];
				$_SESSION["Password"] 			= $user["Password"];
				$_SESSION["Id_Usergroup_User"] 	= $user["Id_Usergroup_User"];
				$_SESSION["Id_User"] 			= $user["Id_User"];
				$_SESSION["Id_Guru"] 			= $user["Id_Guru"];
				$_SESSION["Kode_Mapel"] 		= $user["Kode_Mapel"];
				$_SESSION["Nama_Mapel"] 		= $user["Nama_Mapel"];
				$_SESSION["Foto"]				= $user["Foto"];
				$_SESSION["Login"] 				= true;
				
				if ($_SESSION["Id_Usergroup_User"] == 1){
					header ("Location: 1/index.php");
					exit();
				}
				else if($_SESSION["Id_Usergroup_User"] == 2){
					header ("Location: 2/index.php");
					exit();
				}
				else if($_SESSION["Id_Usergroup_User"] == 3){
					header ("Location: 3/index.php");
					exit();
				}
				else{
					header("Location :pagenotfound.php");
					exit();
				}
			}
			else
			{
				header ("Location: index.php?Err=4");
				exit();
			}
	}
	else if (empty ($Username) && empty ($Password)){
		header ("Location: index.php?Err=1");
		exit();
	}
	else if(empty ($Username)){
		header ("Location: index.php?Err=2");
		exit();
	}
	else if(empty ($Password)){
		header ("Location: index.php?Err=3");
		exit();
	}
	else{
		//header ("Location: index.php?Err=5");
		exit();
	}
}
	
?>
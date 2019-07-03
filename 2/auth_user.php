<?php 

	if (!isset($_SESSION['Login']) || $_SESSION["Login"] != true ){
		header("location: ../pagenotfound.php");
	}
	elseif ($_SESSION["Id_Usergroup"] = 2) {
		$_SESSION["Login"] = true;
	}
	else{
		header("location: ../pagenotfound.php");
	}

 ?>
<?php

function changeFRinscript(){
	session_start();
	$_SESSION['langue']="fr";
	return "Location: ../inscription.php";
}



header(changeFRinscript());
?>
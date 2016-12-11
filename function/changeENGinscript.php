<?php

function changeENGinscript(){
	session_start();
	$_SESSION['langue']="eng";
	return "Location: ../inscriptionENG.php"
}

header(changeENGinscript());
?>

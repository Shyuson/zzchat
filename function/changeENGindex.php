<?php

function changeENGindex(){
	session_start();
	$_SESSION['langue']="eng";
	return "Location: ../indexENG.php";
}

header(changeENGindex());
?>
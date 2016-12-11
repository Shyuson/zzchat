<?php

function changeFR(){
	session_start();
	$_SESSION['langue']="fr";
	return "Location: ../pagechat.php";
}

header(changeFR());
?>
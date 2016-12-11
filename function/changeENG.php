<?php


function changeENG(){
	session_start();
	$_SESSION['langue']="eng";
	return "Location: ../pagechatENG.php";
}


header(changeENG());
?>
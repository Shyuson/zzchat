<?php

function changeFRindex(){
	session_start();
	$_SESSION['langue']="fr";
	return "Location: ../index.php" ;
}

header(changeFRindex());
?>
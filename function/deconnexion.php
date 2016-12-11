<?php

function deconnexion(){
	session_start();
	file_put_contents(__DIR__.'/../data/online.txt', str_replace($_SESSION['prenom']."<br>"."\n", "", file_get_contents(__DIR__.'/../data/online.txt')));
	//session_destroy();

	if ($_SESSION['langue']=="fr") {
		$result="Location: ../index.php" ;
	else{
		$result="Location: ../indexENG.php" ;
	}
	return $result;
}

header(deconnexion());
?>

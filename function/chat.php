<?php

$nom = $_POST['nom'];
$message = $_POST['message'];


if(!preg_match("#^ #", $message) && !empty($message)){
	$ligne = $nom.">".$message."<br>";
	$leFichier = fopen(__DIR__.'/../data/ac.txt', 'a+');
	fputs($leFichier, $ligne."\n");
	fclose($leFichier);
}
?>

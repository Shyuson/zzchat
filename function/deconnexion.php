<?php
session_start();
file_put_contents(__DIR__.'/../data/online.txt', str_replace($_SESSION['prenom']."<br>"."\n", "", file_get_contents(__DIR__.'/../data/online.txt')));
//session_destroy();

if ($_SESSION['langue']=="fr") {
	header("Location: ../index.php");}
else{
	header("Location: ../indexENG.php");
}
?>

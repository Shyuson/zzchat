<?php
file_put_contents(__DIR__.'/../data/online.txt', str_replace($_SESSION['prenom']."<br>"."\n", "", file_get_contents(__DIR__.'/../data/online.txt')));
setcookie('cookie', $_SESSION['prenom'], time()+3600, "/");

//var_dump($_COOKIE['cookie']);

if ($_SESSION['langue']=="fr") {
	
	header("Location: ../index.php");}
else{
	
	header("Location: ../indexENG.php");
}
?>

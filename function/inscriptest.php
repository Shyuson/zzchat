<?php 
session_start();
$login = $_POST['pseudo'];
$pass = $_POST['password'];
$confim = $_POST['password2'];
$exist = false;

$data = fopen(_DIR__.'/../data/data.txt', 'a');




while (! feof($data)) {
	# code...
	$pseudo = fgets($data);
	$mdp = fgets($data);

	$pseudo = substr( $pseudo , 0, -1);
	$mdp = substr( $mdp , 0, -1);
	
	if ($pass == $mdp) {
		if ($pseudo == $login) {
			$exist=true;
		}
	}

}
echo "salut";

if (! $exit) {
	$login = $login."\n";
	$pass = $pass."\n";
	fputs($data, $login);
	fputs($data, $pass);
}

fclose($data);
var_dump($data);
/*
if(! $exist){
	if ($_SESSION['langue']=="fr"){
		header('Location: ../index.php');
	}
	else{
		header('Location: ../indexENG.php');
	}
}
else{
		header('Location: ../error.html');
}

/*
if ($login == "root" AND $pass == "toor") {
	echo "bienvenue";
	header('Location: page2.php');	# code...
}
else {
	header('Location: index.php');
}*/
?>

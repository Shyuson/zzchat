<?php 
session_start();
$login = $_POST['pseudo'];
$pass = $_POST['password'];
$confim = $_POST['password2'];
$exist = false;
$problemControl = true;


var_dump(preg_match('#^[0-9a-zA-Z]{3,}$#',$login));
var_dump(preg_match('#^[0-9a-zA-Z]{3,}$#',$pass));

if (preg_match('#^[0-9a-zA-Z]{3,}$#',$login)==1){
	
	if (preg_match('#^[0-9a-zA-Z]{3,}$#',$pass)==1) {


		$problemControl=false;

		$data = fopen(__DIR__.'/../data/data.txt', 'r+');


		while (! feof($data)) {
			# code...
			$pseudo = fgets($data);
			$mdp = fgets($data);

			$pseudo = substr( $pseudo , 0, -1);
			$mdp = substr( $mdp , 0, -1);
			var_dump($pseudo);
			var_dump($mdp);
			
			if ($pass == $mdp) {
				if ($pseudo == $login){
					$exist=true;
				}
			}

		}


		if (! $exit) {
			$login = $login."\n";
			$pass = $pass."\n";
			fputs($data, $login);
			fputs($data, $pass);
		}
	}
	
}


if((!$exist) & (!$problemControl)) {
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

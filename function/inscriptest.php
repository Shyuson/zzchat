<?php 
session_start();
$login = $_POST['pseudo'];
$pass = $_POST['password'];
$confim = $_POST['password2']; //Inutilisé pour l'instant
$exist = false;     //Par défaut, on suppose que l'utilisateur n'est pas inscrit
$problemControl = true; //Par défaut, on suppose que l'utilisateur a entré des caractères interdits

if (preg_match('#^[0-9a-zA-Z]{3,}$#',$login)==1){
	
	if (preg_match('#^[0-9a-zA-Z]{3,}$#',$pass)==1) {

		$problemControl=false; //On indique qu'il n'y a pas de problème de caractères interdits

		$data = fopen(__DIR__.'/../data/data.txt', 'r+');   //On ouvre le fichier contenant les logins et mdps

		while (! feof($data)) {
			$pseudo = fgets($data);
			$mdp = fgets($data);

			$pseudo = substr( $pseudo , 0, -1);
			$mdp = substr( $mdp , 0, -1);
			
			if ($pass == $mdp) {
				if ($pseudo == $login){
					$exist=true;      //L'utilisateur est déjà inscrit dans le fichier "data.txt"
				}
			}

		}


		if (! $exist) {   //Si l'utilisateur n'est pas encore inscrit
			$login = $login."\n";
			$pass = $pass."\n";
			fputs($data, $login);  //On inscrit son login
			fputs($data, $pass);   //On inscrit son mot de passe
		}
	}
	
}


if((!$exist) && (!$problemControl)) {    //Si l'utilisateur n'est pas encore inscrit et s'il n'a pas entré de caractères interdits
	if ($_SESSION['langue']=="fr"){
		header('Location: ../index.php'); //Renvoi vers la page de connexion
	}
	else{
		header('Location: ../indexENG.php');
	}
}
else{
		header('Location: ../error.html');  //Sinon, renvoi vers la page d'erreur
}

?>

<?php 
include("function.php");
$login = $_POST['pseudo'];
$pass = $_POST['password'];
$confim = $_POST['password2']; //Unused for now
$exist = false;     //Par défaut, on suppose que l'utilisateur n'est pas inscrit
$problemControl = true; //Par défaut, on suppose que l'utilisateur a entré des caractères interdits
//$hache = password_hash
if (preg_match('#^[0-9a-zA-Z]{3,}$#',$login)==1){
	
	if (preg_match('#^[0-9a-zA-Z]{3,}$#',$pass)==1) {

		$problemControl=false; //On indique qu'il n'y a pas de problème de caractères interdits

		$data = fopen(__DIR__.'/../data/data.txt', 'r+');   //On ouvre le fichier contenant les logins et mdps

		while (! feof($data)) {
			$pseudo = recupID($data);
			$mdp = recupID($data);
			//var_dump(md5($pass));
			if (CorrectPass($mdp ,$pass ,$pseudo ,$login)){
					$exist=true;      //L'utilisateur est déjà inscrit dans le fichier "data.txt"
				}
			}

		}


		if (! $exist) {   //Si l'utilisateur n'est pas encore inscrit
			$login = $login."\n";
			$pass=crypt($pass, "abcd");
			$pass = $pass."\n";
			fputs($data, $login);  //On inscrit son login
			fputs($data, $pass);   //On inscrit son mot de passe
		}
	}
	
}



header(direction2($exist, $problemControl));
?>

<!******************************************/
/*             inscriptest.php             */
/*******************************************/
/* This file verify if the user is         */
/* registered yet                          */
/*******************************************/>

<?php 
include("function.php");
$login = $_POST['pseudo'];
$pass = $_POST['password'];
$confim = $_POST['password2']; //Unused for now
$exist = false;     //By default, we suppose that the user is not registered yet
$problemControl = true; //By default, we suppose that the user entered forbidden characters
if (preg_match('#^[0-9a-zA-Z]{3,}$#',$login)==1){
	
	if (preg_match('#^[0-9a-zA-Z]{3,}$#',$pass)==1) {

		$problemControl=false; //We suppose that there is no forbidden character entered

		$data = fopen(__DIR__.'/../data/data.txt', 'r+');   //On ouvre le fichier contenant les logins et mdps

		while (! feof($data)) {
			$pseudo = recupID($data);
			$mdp = recupID($data);
			//var_dump(md5($pass));
			if (CorrectPass($mdp ,$pass ,$pseudo ,$login)){
					$exist=true;      //The user is registered already
				}
			}

		}


		if (! $exist) {   //If the user is not registered yet
			$login = $login."\n";
			$pass=crypt($pass, "abcd");
			$pass = $pass."\n";
			fputs($data, $login);  //The login is written
			fputs($data, $pass);   //The password is written
		}
	}
	
}



header(direction2($exist, $problemControl));
?>

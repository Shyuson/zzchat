<?php 
include("online.php");
include("function.php");
$login = $_POST['pseudo'];   //Gets the name written in the "pseudo" bar
$pass = $_POST['password'];  //Gets the password written in the "password" bar
$permision = false;          //By default, access to the tchat is denied

if((isset($login))&&(isset($pass))){
	$data = fopen(__DIR__.'/../data/data.txt', 'r+'); //Opens the data.txt file, where passwords and logins are stocked

	while (! feof($data)) {

		
		$pseudo=recupID($data);
		$mdp=recupID($data);

		if (CorrectPass($mdp , $pass, $pseudo,$login)) {
				if(! dejaOnline($login)){
					$permision=true;
					$PresentList = fopen(__DIR__.'/../data/online.txt', 'a+');
					fputs($PresentList, $login.'<br>'."\n");
					$_SESSION['prenom'] = $login ;
					fclose($PresentList);
				}
			}
	}
	fclose($data);
}


header(direction($permision));
?>

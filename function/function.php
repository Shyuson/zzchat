<!*****************************************/
/*           function.php                 */
/******************************************/
/* This file contains all the php         */
/* functions that we would have tested    */
/* with PHPUnit.                          */
/******************************************/>


<! Each one of these language functions sets
le laguage variable to "fr" or "eng", and
returns the location of the wanted file in
the wanted language.>
<?php
function changeFRinscript () {
	$_SESSION['langue']="fr";
	return "Location: ../inscription.php";
}
function changeENG () {
	$_SESSION['langue']="eng";
	return "Location: ../pagechat.php";
}
function changeENGindex() {
	$_SESSION['langue']="eng";
	return "Location: ../indexENG.php";
}
function changeENGinscript () {
	$_SESSION['langue']="eng";
	return "Location: ../inscriptionENG.php";
}
function changeFR () {
	$_SESSION['langue']="fr";
	return "Location: ../pagechat.php";
}
function changeFRindex () {
	$_SESSION['langue']="fr";
	return "Location: ../index.php";
}


/*The following function looks if the message doesn't starts
with a blank space, and if the message bar isn't empty.
Then, it writes the message in the ac.txt file.*/

function writeMessage($nom , $message){

	if(!preg_match("#^ #", $message) && !empty($message)){
		$ligne = $nom.">".$message."<br>";
		$leFichier = fopen(__DIR__.'/../data/ac.txt', 'a+');
		fputs($leFichier, $ligne."\n");
		fclose($leFichier);
	}
}



/* The following deconnexion function erases 
the user login from the online.txt file, and 
brings the user back to the login page.*/

function deconnexion(){
	file_put_contents(__DIR__.'/../data/online.txt', str_replace($_SESSION['prenom']."<br>"."\n", "", file_get_contents(__DIR__.'/../data/online.txt')));
	setcookie('cookie', $_SESSION['prenom'], time()+3600, "/");

	if ($_SESSION['langue']=="fr") {
		
		return "Location: ../index.php";
	}
	else{
		
		return "Location: ../indexENG.php";
	}
}


function recupID($data_v){
	$result=fgets($data_v);
	$result=substr($result,0,-1);
	return $result;
}


/*This function compares the pasword hash stored in the 
data.txt file, and the hash of the password the user 
just entered. If the hashes match, it returns true.*/	
function CorrectPass($mdp_v , $pass_v, $pseudo, $login){
	$result=false;
	if ($mdp_v == crypt($pass_v, "abcd")){
             if ($pseudo == $login) {
		$result=true;
	}
}
return $result;
}

/* This function redirects the user to the tchat page
in English or in French, or to the error.html page.*/
function direction($permision_v) {
	if ($permision_v) {
		if($_SESSION['langue']=="fr"){
			return "Location: ../pagechat.php";
		}
		else{
			return "Location: ../pagechatENG.php";
		}
	}
	else {
		return "Location: ../error.html";
	}
}

/* This function redirects the user to the index page
in English or in French, or to the error.html page.*/
function direction2($exist , $problemControl){
if((!$exist) && (!$problemControl)) {    //Si l'utilisateur n'est pas encore inscrit et s'il n'a pas entré de caractères interdits
	if ($_SESSION['langue']=="fr"){
		return ('Location: ../index.php'); //Renvoi vers la page de connexion
	}
	else{
		return ('Location: ../indexENG.php');
	}
}
else{
		return ('Location: ../error.html');  //Sinon, renvoi vers la page d'erreur
}
}
?>

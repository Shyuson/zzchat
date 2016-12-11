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

function writeMessage($nom , $message){

	if(!preg_match("#^ #", $message) && !empty($message)){
		$ligne = $nom.">".$message."<br>";
		$leFichier = fopen(__DIR__.'/../data/ac.txt', 'a+');
		fputs($leFichier, $ligne."\n");
		fclose($leFichier);
	}
}

function deconnexion(){
	file_put_contents(__DIR__.'/../data/online.txt', str_replace($_SESSION['prenom']."<br>"."\n", "", file_get_contents(__DIR__.'/../data/online.txt')));
	setcookie('cookie', $_SESSION['prenom'], time()+3600, "/");

	//var_dump($_COOKIE['cookie']);

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
	
	function CorrectPass($mdp_v , $pass_v, $pseudo, $login){
		$result=false;
		if ($mdp_v == crypt($pass_v, "abcd")){
                          if ($pseudo == $login) {
				$result=true;
			}
		}
		return $result;
	}

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

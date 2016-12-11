<!*******************************/
/*         online.php           */
/********************************/
/* This file verify if teh user */
/* is online already, so that   */
/* we don't have the same user  */
/* online twice                 */
/********************************/>

<?php
function dejaOnline( $pseudo ){
	$resultat= false;
	$fichier=fopen(__DIR__.'/../data/online.txt', 'r+');
	while (! feof($fichier)) {
		$user = fgets($fichier);
		$user = substr( $user , 0, -5);
		if ($user == $pseudo) {
			$resultat=true;
		}
	}
	return $resultat; //Returns true if the user is in the online.txt file
}

?>

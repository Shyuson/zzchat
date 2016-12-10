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
	return $resultat; //On revoie true si on a bien trouvé l'utilisateur dans le fichier des utilisateurs actuellement connectés
}

?>

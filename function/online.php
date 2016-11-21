<?php



function dejaOnline( $pseudo ){
	$resultat= false;
	$fichier=fopen(__DIR__.'/../data/online.txt', 'r+');
	while (! feof($fichier)) {
		# code...
		$user = fgets($fichier);
		$user = substr( $user , 0, -1);
		if ($user == $pseudo) {
			$resultat=true;
			# code...
		}
	}
	return $resultat;
}



?>
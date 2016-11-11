<?php 
$login = $_POST['pseudo'];
$pass = $_POST['password'];
$permision = false;




$data = fopen('data.txt', 'r+');




while (! feof($data)) {
	# code...
	$pseudo = fgets($data);
	$mdp = fgets($data);

	$pseudo = substr( $pseudo , 0, -1);
	$mdp = substr( $mdp , 0, -1);
	
	if ($pass == $mdp) {
		//echo "reussi2";
		if ($pseudo == $login) {
			# code...
		
			$permision=true;
		# code...
			//echo "reussi1";
		}
	}

}






if ($permision) {
	header('Location: page2.php');# code...
}
else {
	header('Location: index.php');
}

fclose($data);

/*
if ($login == "root" AND $pass == "toor") {
	echo "bienvenue";
	header('Location: page2.php');	# code...
}
else {
	header('Location: index.php');
}*/
?>



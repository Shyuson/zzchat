<?php 
$login = $_POST['pseudo'];
$pass = $_POST['password'];
$exist = false;

$data = fopen('data.txt', 'a+');




while (! feof($data)) {
	# code...
	$pseudo = fgets($data);
	$mdp = fgets($data);

	$pseudo = substr( $pseudo , 0, -1);
	$mdp = substr( $mdp , 0, -1);
	
	if ($pass == $mdp) {
		if ($pseudo == $login) {
			$exist=true;
		}
	}

}

if (! $exit) {
	$login = $login."\n";
	$pass = $pass."\n";
	fputs($data, $login);
	fputs($data, $pass);
}

fclose($data);

header('Location: index.php');

/*
if ($login == "root" AND $pass == "toor") {
	echo "bienvenue";
	header('Location: page2.php');	# code...
}
else {
	header('Location: index.php');
}*/
?>

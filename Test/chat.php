<?php

$nom = $_POST['nom'];
$message = $_POST['message'];

$ligne = $nom.">".$message."<br>";

$leFichier = file('ac.htm');             //On lit le fichier ac.htm et on stocke la réponse dans une variable (de type tableau)

array_unshift($leFichier, $ligne);       //On ajoute le texte calculé dans la ligne précédente au début du tableau

file_put_contents('ac.htm', $leFichier);

 ?>


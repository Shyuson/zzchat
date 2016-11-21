<?php

$nom = $_POST['nom'];
$message = $_POST['message'];

$ligne = $nom.">".$message."<br>";



$leFichier = fopen(__DIR__.'/../data/ac.txt', 'a+');


fputs($leFichier, $ligne."\n");

/*
$leFichier = file('data/ac.txt');             //On lit le fichier ac.htm et on stocke la réponse dans une variable (de type tableau)
console.log($leFichier);


array_unshift($leFichier, $ligne);       //On ajoute le texte calculé dans la ligne précédente au début du tableau

file_put_contents('data/ac.txt', $leFichier); // on écrit dans le fichier
*/
 ?>


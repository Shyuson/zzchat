<?php
session_start();
var_dump($_SESSION['prenom']);

file_put_contents(__DIR__.'/../data/online.txt', str_replace($_SESSION['prenom']."<br>"."\n", "", file_get_contents(__DIR__.'/../data/online.txt')));
session_destroy();

header("Location: ../index.html");
?>
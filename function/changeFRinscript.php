<?php
session_start();
$_SESSION['langue']="fr";
header("Location: ../inscription.php");
?>
<?php
include("function.php");
$nom = $_POST['nom'];
$message = $_POST['message'];


writeMessage($nom , $message);
?>

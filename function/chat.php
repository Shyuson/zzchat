/* This function includes the function.php file
and writes a message in the ac.txt file.*/
<?php
include("function.php");
$nom = $_POST['nom'];
$message = $_POST['message'];


writeMessage($nom , $message);
?>

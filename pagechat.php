<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Insertion, copie et suppression de données</title>
  </head>
  <body>
 

   <fieldset>
   <p>Les utilisateur connecté sont :</p> <br>
    <div id=onlineUser>

    </div>
    <br>
     <legend>Un chat en jQuery</legend>

      <div id="conversation"></div><br />

      <form action="#" method="post">
      <?php echo $_SESSION['prenom']; ?><br>
        <input type="hidden" id="nom" value="<?php echo $_SESSION['prenom']; ?>" size="6">

        <input type="text" id="message" size="27">

        <button type="button" id="envoyer" title="Envoyer">Envoyer</button>
      </form>
      <a href="function/deconnexion.php">deconnexion</a> 
    </fieldset>

    <script src="./librairie/jquery-3.1.1.js"></script>
    <script src="./script/SendMessage.js"></script>
  </body>
</html>
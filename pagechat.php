 <?php  session_start();     //    décommenter ce messsage si ça ne marche pas
var_dump($_SESSION['langue']);
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Bienvenue sur ZZchat</title>
  </head>
  <body>
  <a id="FR" href="./function/changeFR.php"> <button type="button">FR</button> </a>
  <a id="ENG" href="./function/changeENG.php"> <button type="button">ENG</button> </a>
   <fieldset>
    <legend>Les utilisateurs actuellement connectés sont :</legend>
    <div id=onlineUser>

    </div>
    <br>
     

  </fieldset>
  <fieldset>
    <legend>Conversation</legend>
      <div id="conversation"></div><br />
      <button id='btnBold' value='Bold'>Bold</button>
      <button id='btnI' value='Italic'>Italic</button>
      <form action="#" method="post">
      <?php echo $_SESSION['prenom']; ?><br>
        <input type="hidden" id="nom" value="<?php echo $_SESSION['prenom']; ?>" size="6">

        <input type="text" id="message" size="27">

        <button type="button" id="envoyer" title="Envoyer">Envoyer</button>
      </form>
      <a href="function/deconnexion.php">Déconnexion</a> 
    </fieldset>




    <script src="./librairie/jquery-3.1.1.js"></script>
    <script src="./script/SendData.js" > </script>
    <script src="./script/SendMessage.js"></script>
    <script type="text/javascript">
      function ChangeText(elementID, openTag, closeTag) {
        var textArea = $('#' + elementID);
        var len = textArea.val().length;
        var start = textArea[0].selectionStart;
        var end = textArea[0].selectionEnd;
        var selectedText = textArea.val().substring(start, end);
        var replacement = openTag + selectedText + closeTag;
        textArea.val(textArea.val().substring(0, start) + replacement + textArea.val().substring(end, len));
      }

      $('#btnBold').click(function() {
          ChangeText("message", "<strong>", "</strong>");
      });

      $('#btnI').click(function() {
          ChangeText("message", "<I>", "</I>");
      });
    </script>
  </body>
</html>

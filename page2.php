<!DOCTYPE html>

<html>

    <head>

        <!-- En-tête de la page -->

        <meta charset="utf-8" />

        <title>Le chat</title>

    </head>


    <body>
    	<?php
	        $user = $_GET['user'];
	        echo "Bonjour  ";
			echo $user;
		?>


    	<nav>
		    <p>Les ZZ present sur le chat</p>
		    <?php
	        $present=fopen('presentList.txt', 'r+');
		    while (! feof($present)) {
				# code...
				$pseudo = fgets($present);
				echo $pseudo;
			}
			?>
		</nav>



		<section>
			Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
		</section>




		<section>
			<form method="POST" action="traitement.php">

		        Pseudo : <input type="text" name="pseudo" id="pseudo" /><br />

		        Message : <textarea name="message" id="message"></textarea><br />

		        <input type="submit" name="submit" value="Envoyez votre message !" id="envoi" />
		    </form>
		</section>
    </body>

</html>







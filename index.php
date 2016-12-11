<!/***********************************************/
/*                  index.html                   */
/*************************************************/
/*This is the first page when someone types the  */
/*URL fc.isima.fr/~zhxu7/zzchat. This is also the*/
/*logging page.                                  */
/*************************************************/>

<?php
if(!isset($_SESSION)){ 
session_start();} //Launches a session when the user gets to this page for the first time
$_SESSION['langue']="fr"; //The default language is French
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Bienvenue sur ZZchat</title>
	<link rel="stylesheet" type="text/css" href="./librairie/bootstrap.min.css">  <!Loading of the Bootstrap css file>
</head>

<body>
	<a id="FR" href="./function/changeFRindex.php"> <button type="button">FR</button> </a>
  	<a id="ENG" href="./function/changeENGindex.php"> <button type="button">ENG</button> </a>  <!Language buttons>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Bienvenue sur ZZchat</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					
					<! Beginning of the form>
					<form class="form-horizontal" action="./function/check.php" method="post"> 
					<!The ./function/check.php file will check what the user put in the bars>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Identifiant</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="pseudo" id="pseudo"  placeholder="Entrez votre identifiant" value = "<?php if(isset($_COOKIE['cookie'])){echo $_COOKIE['cookie'];}?>"/> <!Login bar>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Mot de passe</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="password" class="form-control" name="password" id="password"  placeholder="Entrez votre mot de passe"/>  <!Password bar>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<a href="inscription.php">Inscription</a> <!Register link>
						</div>
						<div class="login-register">
				            <input type="submit" id="submit" value="connexion">
				         </div>
					</form>
				</div>
			</div>
		</div>
		<script src="./librairie/jquery-3.1.1.js"> </script>

	</body>
</html>


<!/************************************************/
/*                indexENG.php                    */
/**************************************************/
/* This is the english index.php page             */
/**************************************************/>
<?php
if(!isset($_SESSION)){
session_start();}
$_SESSION['langue']="eng";
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Welcome to ZZchat</title>
	<link rel="stylesheet" type="text/css" href="./librairie/bootstrap.min.css">
</head>

<body>
	<a id="FR" href="./function/changeFRindex.php"> <button type="button">FR</button> </a>
  	<a id="ENG" href="./function/changeENGindex.php"> <button type="button">ENG</button> </a>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Welcome to ZZchat</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" action="./function/check.php" method="post">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Login</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="pseudo" id="pseudo"  placeholder="Enter your login"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<!<button type="button" class="btn btn-primary btn-lg btn-block login-button"> 
							<a href="inscriptionENG.php">Register</a> 
							<!</button>


						</div>
						<div class="login-register">
				            <input type="submit" id="submit" value="Login">
				         </div>
					</form>
				</div>
			</div>
		</div>
		<script src="./librairie/jquery-3.1.1.js"> </script>

	</body>
</html>


<?php
session_start();
$_SESSION['langue']="eng";
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Register to ZZchat</title>
	<link rel="stylesheet" type="text/css" href="./librairie/bootstrap.min.css">
</head>

<body>
	<a id="FR" href="./function/changeFRinscript.php"> <button type="button">FR</button> </a>
  	<a id="ENG" href="./function/changeENGinscript.php"> <button type="button">ENG</button> </a>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Register to ZZchat</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" action="./function/inscriptest.php" method="post">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Login</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="pseudo" id="pseudo"  placeholder="Chose your login"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="password" class="form-control" name="password" id="password"  placeholder="Chose your Password"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Confirmation</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="password" class="form-control" name="password2" id="password2"  placeholder="Confirm your password"/>
								</div>
							</div>
						</div>

						<div class="login-register">
				            <input type="submit" id="submit" value="Register">
				         </div>
					</form>
				</div>
			</div>
		</div>
		<script src="./librairie/jquery-3.1.1.js"> </script>

	</body>
</html>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Pixel's Online Food Shop</title>
	</head>
	<body>
		<?php session_start(); ?>
		<h1>Welcome to Pixel's Online Food Shop! Please register here.</h1>
		
		<form action="handleForm.php" method="POST">
			<div class="fields">
				<p>USERNAME: <input type="text" placeholder="Enter desired username here" name="registerUsernameTextField" size="25"></p>
				<p>PASSWORD: <input type="password" placeholder="Enter desired password here" name="registerPasswordTextField" size="25"></p>
				<p><input type="submit" value="REGISTER" name="registerButton"></p>
			</div>
		</form>
		<p><input type="submit" value="I ALREADY HAVE AN ACCOUNT" name="exitRegister" onclick="location.href='login.php'"></p>
	</body>
</html>
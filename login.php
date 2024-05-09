<html>
	<head>
		<title>Pixel's Online Food Shop</title>
	</head>
	<body>
		<h1>Welcome to Pixel's Online Food Shop! Please log in.</h1>

		<form action="handleForm.php" method="POST">
			<p>USERNAME: <input type="text" placeholder="Enter your username here" name="usernameTextField"></p>
			<p>PASSWORD: <input type="password" placeholder="Enter your password here" name="passwordTextField"></p>
			<p><input type="submit" value="LOGIN" name="loginButton"></p>
		</form>
		
		<p><input type="submit" value="REGISTER" name="registerButton" onclick="location.href='register.php'"></p>
	</body>
</html>
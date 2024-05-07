<?php 
	session_start();

	if(!isset($_SESSION['username'])) {
		header('Location: login.php');
	} 
?>

<html>
	<head>
		<title>Pixel's Online Food Shop</title>
	</head>
	<body>
		<h2>Welcome to my online food shop, <span style="color: red;"><?php echo $_SESSION['username']; ?></span>! Here is my menu:</h2>
		<p><input type="submit" value="LOG OUT" name="logoutButton" onclick="location.href='logout.php'"></p>
		<ul>
			<li><b>Burger</b> - 50 PHP</li>
			<li><b>Fries</b> - 40 PHP</li>
			<li><b>Burger Steak</b> - 60 PHP</li>
			<li><b>Fried Chicken</b> - 60 PHP</li>
			<li><b>Spaghetti</b> - 55 PHP</li>
		</ul>
		
		<form action="calculateOrder.php" method="POST">
			Choose your order: 
			<select name="foodSelectField">
				<option value="burger">Burger</option>
				<option value="fries">Fries</option>
				<option value="burgerSteak">Burger Steak</option>
				<option value="friedChicken">Fried Chicken</option>
				<option value="spaghetti">Spaghetti</option>
			</select> <br><br>
			Quantity: <input type="text" name="quantityTextField"> <br><br>
			Cash: <input type="text" name="cashTextField"> <br><br>
			<input type="submit" value="ORDER!" name="orderButton">
		</form>
	</body>
</html>
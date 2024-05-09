<?php 
	session_start();
	
	require_once('dbConfig.php');
	require_once('functions.php');

	// executed if register button is clicked
	if (isset($_POST['registerButton'])) {
		$username = $_POST['registerUsernameTextField'];
		$password = password_hash($_POST['registerPasswordTextField'], PASSWORD_DEFAULT);

		// error if input fields are empty
		if(empty($username) || empty($password)){
			echo '<script> 
			alert("The input field is empty!");
			window.location.href = "register.php";
			</script>';
		}else{
			// return to login page after successful registration
			if(addUser($conn, $username, $password)){
				header('Location: login.php');
			// error if username already exists
			}else{
				echo '<script> 
				alert("The username is already taken!");
				window.location.href = "register.php";
				</script>';
			}
		}
	}

	// executed if login button is clicked
	if(isset($_POST['loginButton'])) {
		$username = $_POST['usernameTextField'];
		$password = $_POST['passwordTextField'];

		// error if input fields are empty
		if(empty($username) && empty($password)) {
			echo "<script>
			alert('Input fields are empty!');
			window.location.href='login.php'
			</script>";
		}else{
			// proceed to online shop after successful login
			if(login($conn, $username, $password)) {
				header('Location: orderMenu.php');
			// error if incorrect username/password
			}else{
				echo "<script>
				alert('The username and/or passowrd is incorrect!');
				window.location.href='login.php'
				</script>";
			}
		}
	}
?>
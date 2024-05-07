<?php 
	session_start();
	require_once('dbConfig.php');
	require_once('functions.php');

	// executed if register button is clicked
	if (isset($_POST['registerButton'])) {
		$username = $_POST['registerUsernameTextField'];
		$password = password_hash($_POST['registerPasswordTextField'], PASSWORD_DEFAULT);

		if(empty($username) || empty($password)) {
			echo '<script> 
			alert("The input field is empty!");
			window.location.href = "register.php";
			</script>';
		}else{
			if(addUser($conn, $username, $password)) {
				header('Location: login.php');
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
		// get username and password from index.php
		$username = $_POST['usernameTextField'];
		$password = $_POST['passwordTextField'];

		if(empty($username) && empty($password)) {
			echo "<script>
			alert('Input fields are empty!');
			window.location.href='login.php'
			</script>";
		}else{
			if(login($conn, $username, $password)) {
				header('Location: orderMenu.php');
			}else{
				echo "<script>
				alert('The username and/or passowrd is incorrect!');
				window.location.href='login.php'
				</script>";
			}
		}
	}
?>
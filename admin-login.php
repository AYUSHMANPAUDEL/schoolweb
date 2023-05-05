<?php
try {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";
    
    if (!empty($username) && !empty($password) && $username === "ram" && $password === "123") {
        // Redirect the user to the second website if the username and password are correct
        header('Location: admin-dashboard.php');
        exit;
    }
    elseif(empty($username)&& empty($password)){

    }
     else {
        // Display an error message if the username or password is incorrect or if either field is empty
        echo "Wrong username or password.";
    }
} catch (Exception $e) {
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: sans-serif;
		}

		.container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.login-form {
			position: relative;
			padding: 40px;
			background-color: white;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			border-radius: 10px;
			animation: slide-in 0.5s ease-out forwards;
			transform: translateX(-100%);
		}

		.login-form h2 {
			text-align: center;
			margin-bottom: 20px;
			color: #2980b9;
		}

		.login-form label {
			display: block;
			margin-bottom: 8px;
			color: #555;
		}

		.login-form input[type="text"],
		.login-form input[type="password"] {
			width: 100%;
			padding: 8px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		.login-form input[type="submit"] {
			width: 100%;
			padding: 10px;
			background-color: #2980b9;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		.login-form input[type="submit"]:hover {
			background-color: #2c3e50;
		}

		@keyframes slide-in {
			to {
				transform: translateX(0);
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<form class="login-form" method="post" action="">
			<h2>Admin Login</h2>
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>

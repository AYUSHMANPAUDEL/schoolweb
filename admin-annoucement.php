<?php
include 'connect.php';

if(isset($_POST['send'])){
	$title = $_POST['title'];
	$content = $_POST['content'];
	$date = date('y-m--d h:i:s');
	$sql_insert = mysqli_query($con,"INSERT INTO message(title,content) VALUES ('$title','$content')");

	if($sql_insert){
		echo"<script>alert('Message sent successfully');</script>";

	}
	else{
		echo mysqli_error($con);
		exit;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}
		
		header {
			background-color: #87CEEB;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
		
		nav {
			background-color: #eee;
			padding: 10px;
			text-align: center;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			border-bottom: 1px solid #ccc;
		}
		
		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			display: inline-block;
		}
		
		nav li {
			display: inline-block;
			margin-right: 20px;
		}
		
		nav a {
			color: #333;
			text-decoration: none;
			padding: 10px;
			border-radius: 5px;
			transition: background-color 0.3s ease;
		}
		
		nav a:hover {
			background-color: #333;
			color: #fff;
		}
		
		section {
			padding: 20px;
			margin: 20px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			background-color: #fff;
		}
		
		footer {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
		
		@media screen and (max-width: 768px) {
			nav ul {
				display: block;
				margin: 10px 0;
			}
			
			nav li {
				display: block;
				margin-right: 0;
				margin-bottom: 10px;
			}
		}
		form {
			background-color: #fff;
			max-width: 600px;
			margin: 20px auto;
			padding: 20px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			border-radius: 5px;
		}
		
		input[type="text"], textarea {
			display: block;
			width: 100%;
			margin: 10px 0;
			padding: 10px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
			resize: none;
			font-size: 16px;
			font-family: Arial, sans-serif;
			color: #333;
			background-color: #f2f2f2;
		}
		
		input[type="submit"] {
			display: block;
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: none;
			background-color: #87CEEB;
			color: #fff;
			font-size: 16px;
			font-family: Arial, sans-serif;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		
		input[type="submit"]:hover {
			background-color: #333;
		}
		
		@media screen and (max-width: 768px) {
			form {
				max-width: 100%;
				margin: 20px;
			}
		}
	</style>
</head>
<body>
	<header>
		<h1>Admin Annoucement</h1>
	</header>
	
	<nav>
		<ul>
			<li><a href="admin-dashboard.php">Dashboard</a></li>
			<li><a href="admin-annoucement.php">Annoucement</a></li>
			<li><a href="admin-result.php">Result</a></li>
			<li><a href="#">Students Data</a></li>
			<li><a href="#">Settings</a></li>
			<li><a href="admin-login.php">Logout</a></li>
		</ul>
	</nav>
	<form action="admin-annoucement.php" method="post">
		<label for="title">Title:</label>
		<input type="text" id="title" name="title" required>
		
		<label for="content">Content:</label>
		<textarea id="content" name="content" required></textarea>
		<input type="checkbox" id="notification" name="notification">
		<label for="notification">Give Notifications To Student:</label>
		
		<input type="submit" value="Submit" name="send">
	</form>
</body>
</html>

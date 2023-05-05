<?php


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
			background-color: #333;
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
	</style>
</head>
<body>
	<header>
		<h1>Admin Dashboard</h1>
	</header>
	
	<nav>
		<ul>
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Users</a></li>
			<li><a href="#">Orders</a></li>
			<li><a href="#">Products</a></li>
			<li><a href="#">Settings</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
	</nav>
	
	<section>
		<h2>Welcome, Admin!</h2>
		<p>You can use the navigation bar above to access various sections of the admin dashboard.</p>
	</section>
	
	<footer>
		<p>&copy; 2023 Admin Dashboard. All rights reserved.</p>
	</footer>
</body>
</html>

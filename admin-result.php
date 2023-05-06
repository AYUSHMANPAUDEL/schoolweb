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
	</style>
</head>
<body>
	<header>
		<h1>Admin Result</h1>
	</header>
	
	<nav>
		<ul>
			<li><a href="#">Dashboard</a></li>
			<li><a href="admin-annoucement.php">Annoucement</a></li>
			<li><a href="admin-result.php">Result</a></li>
			<li><a href="#">Students Data</a></li>
			<li><a href="#">Settings</a></li>
			<li><a href="admin-login.php">Logout</a></li>
		</ul>
	</nav>
	<iframe src="https://docs.google.com/spreadsheets/d/1bvYFxgD46hQcC1xLnz49E4H81MJQ7KNBMnmKvKQcXVA/edit#gid=0" width="100%" height="500" frameborder="0" scrolling="no"></iframe>

</body>
</html>

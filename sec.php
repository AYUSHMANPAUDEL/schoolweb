<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-N/iI/aLrQZR8zstPgJKGv4NfX4VV4iSwWsI+jLFx5y5H5Ji/5S60UDMWgD0lZmR9XU0JlsU8d6xwpO6zBZ/Tw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://kit.fontawesome.com/86206dfed9.js" crossorigin="anonymous"></script>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: sans-serif;
		}

		.sidebar {
			position: fixed;
			top: 0;
			left: 0;
			width: 200px;
			height: 100%;
			background-color: #007bff;
			padding: 20px;
		}

		.logo {
			display: flex;
			align-items: center;
			margin-bottom: 30px;
		}

		.logo img {
			width: 50px;
			height: 50px;
			margin-right: 10px;
		}

		.logo h2 {
			color: white;
			font-size: 24px;
			margin: 0;
		}

		.menu {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.menu li {
			margin-bottom: 10px;
		}

		.menu a {
			display: block;
			color: white;
			font-size: 18px;
			text-decoration: none;
			padding: 10px;
			border-radius: 5px;
			transition: all 0.3s ease-in-out;
		}

		.menu a:hover {
			background-color: #0056b3;
		}

		#school-logo {
			width: 30%;
			height: 50px;
		}

		#noti-logo {
			padding: 10px;
		}

		#current {
			background-color: #0056b3;
		}
		@media only screen and (max-width: 768px) {
  .sidebar {
    position: static;
    width: 100%;
    height: auto;
    padding: 10px;
  }
  
  .menu a {
    padding: 5px;
    font-size: 16px;
  }
  
  #school-logo {
    width: 50%;
    height: auto;
  }
  
  #noti-logo {
    padding: 5px;
  }
}
	
	</style>
  <script>
function baka() {
  var icon = document.getElementById("noti-logo");
  icon.style.color = "#ffffff";
  setTimeout(function() {
    icon.style.color = "#002461";
    alert("hello baka");
  }, 100);
}


    </script>
</head>
<body>
	<div class="sidebar">
		<div class="logo">
			<h2>SkyRider</h2>
			<div class="notification">
      <i class="fa-solid fa-bell fa-xl" style="color: #002461;" onclick="baka()" id="noti-logo"></i>
      </div>
		</div>
		<ul class="menu">
			<li><a href="sec.php" id="current">Home</a></li>
			<li><a href="result.html">Result</a></li>
			<li><a href="#">Notes</a></li>
			<li><a href="#">Gallery</a></li>
		</ul>
	</div>
</body>
</html>

<?php
include 'connect.php';



?>

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
    display: flex;
    flex-direction: column;
    position: static;
    width : 100%;
    height: auto;
    padding: 10px;
  }

  .logo {
    flex-direction: column;
      margin-bottom: 10px;
      text-align: center;
  }
  #noti-logo{
	padding-top: 50px;
  }

  .menu {
    display: flex;
      justify-content: space-around;
      margin-top: 10px;
  }

  .menu li {
    margin-bottom: 5px;
  }

  .menu a {
    font-size: 16px;
      padding: 5px;	
  }
  
  #school-logo {
    width: 50%;
    height: auto;
  }
  
  #noti-logo {
    padding: 5px;
  }
}
.notification {
		position: relative;
		display: inline-block;
	}

	.notification .badge {
		position: absolute;
		top: -10px;
		right: -10px;
		padding: 5px 10px;
		border-radius: 50%;
		background-color: red;
		color: white;
	}
	.notification-panel {
		position: absolute;
    top: 100%;
    right: 0;
    z-index: 999;
	border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 320px;
	width: 250px;
	height: 600px;
    padding: 20px;
	margin-right: -300px;
    display: none;
}

@media only screen and (max-width: 768px) {
	.notification-panel {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 90%;
        max-width: unset;
  }
}

.notification.active .notification-panel {
  display: block;
}

  /* Style for the close button */
  .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 20px;
    cursor: pointer;
  }


	</style>
  <script>
function toggleNotificationPanel() {
  var icon = document.getElementById("noti-logo");
  var notification = document.querySelector('.notification');
  var panel = document.querySelector('.notification-panel');
  notification.classList.toggle('active');
  panel.style.display = panel.style.display === 'block' ? 'none' : 'block';
  icon.style.color = '#fff'; // Change color to white
  setTimeout(function() {
    icon.style.color = '#002461'; // Change color back to original
  }, 100); // 
}

var notification = document.querySelector('.notification');
notification.addEventListener('click', toggleNotificationPanel);

    </script>
</head>
<body>
	<div class="sidebar">
		<div class="logo">
			<h2>SkyRider</h2>
			<div class="notification">
  <i class="fa-solid fa-bell fa-xl" style="color: #002461;" onclick="toggleNotificationPanel()" id="noti-logo"></i>
  <div class="notification-panel" id="notification-panel">
    <span class="close-btn" onclick="toggleNotificationPanel()">&times;</span>
   <?php
	$sql_get = mysqli_query($con, "SELECT * FROM message WHERE status = 0");
	if (mysqli_num_rows($sql_get) > 0) {
	  while ($result = mysqli_fetch_assoc($sql_get)) {
		echo '<p>' . $result['content'] . '</p>';
	  }
	}
	?>
  </div>
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

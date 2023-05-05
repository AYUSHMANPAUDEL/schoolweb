  <?php
  error_reporting(0);
  $email = $_POST['gmail'];
  $pss = $_POST['password'];
  $o = "";

  $a = substr($email,-16);
  if (!empty($email) && !empty($pss) && $a === "@skyrider.edu.np") {
    $o = "true";
    // header('Location: sec.php');
    // exit;
  }
  elseif ($a != "@skyrider.edu.np"){
    $o = "false";
  }
  ?>
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>SkyRider School</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/86206dfed9.js" crossorigin="anonymous"></script>
      <script>
        function toggleLoginBox() {
    var loginBox = document.getElementById('login-box');
    
    if (loginBox.style.display === 'block') {
      loginBox.style.display = 'none';
    } else {
      loginBox.style.display = 'block';
    }
  }
    </script>
    <script>
      <?php
    if($o == "false"){
      echo "alert('PLEASE USE SCHOOL ACCOUNT WHILE USING SCHOOL WEBSITE');";
    }
    elseif($o=="true"){
    echo "location.href='sec.php'"; 
    }

  ?>
      </script>
      <style>
        .carousel-item::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
  }

  .carousel-item img {
    object-fit: cover;
  }

          #carouselExampleCaptions{
              margin-top: -15px;
          }
          .carousel-item img {
    height: 750px;
  }
  #log{
    margin-top: 13px;
  }
  .login-box {
          position: absolute;
          top: 70px;
          width: 220px;
          height: auto;
          background-color: #fff;
          border-radius: 10px;
          border: 1px solid #ccc;
          box-shadow: 0 0 10px #ccc;
          display: none;
          padding: 10px;
        
        }
        #sub{
          background-color: green;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 50%;
        font-size:15px;
        }
        #sub:hover {
        background-color: blue;
      }
      
      

        </style>
      </head>
    <body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      <nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3 fixed-top">
          <a class="navbar-brand" href="index.php">Skyrider</a>
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="#scrollspyHeading1">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#scrollspyHeading2">Instructors</a>
            </li>
            <a class="nav-link" href="#" onclick="toggleLoginBox()">
    <i class="fa-solid fa-user fa-lg" style="color: #005eff; border-radius: 50%; padding: 5px; background-color: #f5f5f5;" id="log"></i>
  </a>
    <!-- login for student start -->
  <div class="login-box" id="login-box">
    <form method="post" action="index.php">
      <label for="email">Email:</label>
      <input type="text" name="gmail" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" name="password" required>
      <br>
      <button type="submit" id="sub">Login</button>
    </form>
  </div>
  <!-- Login for student end -->

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="im1.jpg" class="d-block w-100" alt="..."id="imm1">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="realbg.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="bg3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
          <h4 id="scrollspyHeading1">About Us</h4>
          <p>...</p>
          <h4 id="scrollspyHeading2">Second heading</h4>
          <p>...</p>
          <h4 id="scrollspyHeading3">Third heading</h4>
          <p>...</p>
          <h4 id="scrollspyHeading4">Fourth heading</h4>
          <p>...</p>
          <h4 id="scrollspyHeading5">Fifth heading</h4>
          <p>...</p>
        </div>
  </body>
  </html>

<?php
try {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";
    
    if (!empty($username) && !empty($password) && $username === "ram" && $password === "123") {
        // Redirect the user to the second website if the username and password are correct
        header('Location: sec.php');
        exit;
    } else {
        // Display an error message if the username or password is incorrect or if either field is empty
        echo "Wrong username or password.";
    }
} catch (Exception $e) {
}
?>


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="admin.php">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username"><br><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
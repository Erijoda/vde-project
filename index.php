<?php
session_start();
if (isset($_SESSION['user_id'])) {
  header("Location: home.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/normalize.css">
  <title>Enkelt medlemsregister</title>
</head>
<body>
  <div id="container">
    <div>
      <h1>Login</h1>
      <form method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username">
        <label for="password">Password:</label>
        <input type="password" name="password">
        <input type="submit" name="login" value="Login">
      </form>
    </div>
    <div>
      <h1>Register</h1>
      <form method="POST">

      </form>
    </div>
  </div>
</body>
</html>
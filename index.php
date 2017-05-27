<?php
session_start();
if (isset($_SESSION['user_id'])) {
  header("Location: home.php");
  die();
}
$username = "";
$username_taken = false;
$firstname = "";
$lastname = "";

if(isset($_POST['register'])) {
  $username = $_POST['username'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <title>Enkelt medlemsregister</title>
</head>
<body>
  <div id="container">
    <div>
      <h1>Login</h1>
      <form method="POST">
        <div>
          <label for="username">Username:</label>
          <input type="text" name="username">
        </div>
        <div>
          <label for="password">Password:</label>
          <input type="password" name="password">
        </div>
        <input type="submit" name="login" value="Login">
      </form>
    </div>
    <div>
      <h1>Register</h1>
      <form method="POST">
        <div>
          <label for="username">Username:</label>
          <input type="text" name="username" value="<?php echo $username;?>">
          <?php
           if (isset($_POST['register']) && empty($username)) {
              echo '<span class="error">You must supply a username.</span>';
            }
            if (isset($_POST['register']) && $username_taken) {
              echo '<span class="error">The username is already taken.</span>';
            }
          ?>
        </div>
        <div>
          <label for="password">Password:</label>
          <input type="password" name="password">
          <?php
            if (isset($_POST['register']) && ($_POST['password'] != $_POST['password2'])) {
              echo '<span class="error">The passwords does not match.</span>';
            }
            if (isset($_POST['register']) && empty($_POST['password'])) {
              echo '<span class="error">You must supply a password.</span>';
            }
          ?>
        </div>
        <div>
          <label for="password2">Confirm password:</label>
          <input type="password" name="password2">
          <?php
            if (isset($_POST['register']) && ($_POST['password'] != $_POST['password2'])) {
              echo '<span class="error">The passwords does not match.</span>';
            }
            if (isset($_POST['register']) && empty($_POST['password'])) {
              echo '<span class="error">You must supply a password.</span>';
            }
          ?>
        </div>
        <div>
          <label for="firstname">Firstname:</label>
          <input type="text" name="firstname" value="<?php echo $firstname;?>">
        </div>
        <div>
          <label for="lastname">Lastname:</label>
          <input type="text" name="lastname" value="<?php echo $lastname;?>">
        </div>
        <input type="submit" name="register" value="Register">
      </form>
    </div>
  </div>
</body>
</html>
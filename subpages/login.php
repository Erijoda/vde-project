<?php
$error['login'] = "";

if (isset($_POST['login'])) {
  if (!$userService->login($_POST['username'], $_POST['password'])) {
    $error['login'] = '<span class="error">Username and/or password wrong.</span>';
  } else {
      header("Location: home.php");
      die();
  }
}

?>
<div>
  <h1>Login</h1>
  <form method="POST">
    <div>
      <label for="username">Username:</label>
      <input type="text" name="username" value="<?php if (isset($_POST['username'])) echo $_POST['username'];?>">
    </div>
    <div>
      <label for="password">Password:</label>
      <input type="password" name="password">
    </div>
    <input type="submit" name="login" value="Login"><?php echo $error['login'];?>
  </form>
</div>
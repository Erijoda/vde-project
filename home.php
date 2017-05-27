<?php
require_once('bootstrap.php');

if(isset($_GET['logout'])) {
    if($userService->logout()){
      header("Location: index.php");
      die();
    }
}
if ($userService->isLoggedIn()) {
  header("Location: index.php");
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
  <title>Document</title>
</head>
<body>
  <?php if (isset($_SESSION['user_id'])) { ?>
   You are logged in now. <a href="?logout=1">Log out</a>
  <?php } ?>
</body>
</html>
<?php
require_once('bootstrap.php');

if(isset($_GET['logout'])) {
    if($userService->logout()){
      header("Location: index.php");
      die();
    }
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
  You are logged in now. <a href="?logout=1">Log out</a>
</body>
</html>
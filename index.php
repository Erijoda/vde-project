<?php
require_once('bootstrap.php');

if ($userService->isLoggedIn()) {
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
  <link rel="stylesheet" href="css/main.css">
  <title>Enkelt medlemsregister</title>
</head>
<body>
  <div id="container">
    <?php include("subpages/login.php"); ?>
    <?php include("subpages/register.php"); ?>
  </div>
</body>
</html>
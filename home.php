<?php
require_once('bootstrap.php');

if(isset($_GET['logout'])) {
    if($userService->logout()){
      header("Location: index.php");
      die();
    }
}
if (!$userService->isLoggedIn()) {
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
  <title>Home</title>
</head>
<body>
   <div id="container">
       <div>
           You are now logged in. <a href="?logout=1">Log out</a>
       </div>
       <div>
           <h1>Userlist:</h1>
           <table>
               <thead>
               <tr>
                   <th>Id</th>
                   <th>Username</th>
                   <th>Firstname</th>
                   <th>Lastname</th>
               </tr>
               </thead>
               <tbody>
               <?php
               foreach ($db->query("SELECT (id, username, firstname, lastname) FROM users ORDER BY id ASC") as $row) {
                echo "<tr>";
                 echo "<td>{$row['id']}</td>";
                 echo "<td>{$row['username']}</td>";
                 echo "<td>{$row['firstname']}</td>";
                 echo "<td>{$row['lastname']}</td>";
                 echo "</tr>";
               }
               ?>
               </tbody>
           </table>
       </div>
   </div>
</body>
</html>
<?php
session_start();
require_once('db-connection.class.php');
require_once('user-service.class.php');

$db = new DBConnection();
$userService = new UserService($db);

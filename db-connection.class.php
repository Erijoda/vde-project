<?php

class DBConnection extends PDO {
  public function __construct() {
    $config = include('config/db.config.php');
    try {
      parent::__construct("mysql:host={$config['host']};dbname={$config['db']};charset={$config['charset']}", $config['username'], $config['password'], $config['options']);
    } catch(PDOException $e) {
      echo "Un unexpected error occured when trying to connect to the database.<br>{$e->getMessage()}";
    }
  }
}
<?php

class DBConnection extends PDO {
  public function __construct() {
    $config = include('config/db.config.php');
    parent::__construct("mysql:host={$config['host']};dbname={$config['db']};charset={$config['charset']}", $config['username'], $config['password'], $config['options']);
  }
}
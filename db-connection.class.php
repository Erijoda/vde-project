<?php
$config = include('config/db.config.php');

class DBConnection extends PDO {
  public function __construct() {
    parent::__construct("mysql:host={$config['host']};dbname={$config['db']};charset={$config['charset']}", $config['username'], $config['password'], $config['options']);
  }
}
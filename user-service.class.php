<?php

class UserService {
  private $dbContext;

  public function __construct($dbContext) {
    $this->dbContext = $dbContext;
    echo $this->saltPassword();
  }

  private function saltPassword($password, $username) {
    $config = include('config/db.config.php');
    return $config['salt'].$username.$password;
  }
}

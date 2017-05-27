<?php
$config = include('config/db.config.php');

class UserService {
  private $dbContext;

  public function __construct($dbContext) {
    $this->dbContext = $dbContext;
    echo $this->saltPassword();
  }

  private function saltPassword($password, $username) {
    return $config['salt'].$username.$password;
  }
}

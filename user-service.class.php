<?php

class UserService {
  private $dbContext;

  public function __construct($dbContext) {
    $this->dbContext = $dbContext;
  }

  public function isLoggedIn() {
      if (isset($_SESSION['user_id'])) {
          return true;
      }
      return false;
  }

  public function login($username, $password) {
    try {
      $stmt = $this->dbContext->prepare("SELECT id, password FROM users WHERE username=:username LIMIT 1");
      $stmt->bindParam(':username', $username);
      $stmt->execute();
      $user = $stmt->fetch();

      if ($stmt->rowCount > 0) {
        if (password_verify($this->saltPassword($password, $username), $user['password'])) {
          $_SESSION['user_id'] = $user['id'];
          return true;
        } else {
          return false;
        }
      } else {
        return false;
      }
    } catch(PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function logout() {
    unset($_SESSION['user_id']);
    return true;
  }

  public function register($username, $password, $firstname = "", $lastname = "") {
      if (empty($username) || empty($password)) return false;
      try {
          $stmt = $this->dbContext->prepare("INSERT INTO users (username, password, firstname, lastname) VALUES(:username, :password, :firstname, :lastname)");
          $stmt->bindParam(':username', $username);
          $stmt->bindParam(':password', password_hash($this->saltPassword($password, $username)));
          $stmt->bindParam(':firstname', $firstname);
          $stmt->bindParam(':lastname', $lastname);

          return $stmt->execute();
      } catch(PDOException $e) {
        echo $e->getMessage();
      }
  }

  private function saltPassword($password, $username) {
    $config = include('config/db.config.php');
    return $config['salt'].$username.$password;
  }
}

<?php

class User {
  private $id;
  private $username;
  private $password;
  private $firstname;
  private $lastname;

  public function __construct($id, $username, $password, $firstname = "", $lastname = "") {
    $this->id = $id;
    $this->username = $username;
    $this->password = $password;
    $this->firstname = $firstname;
    $this->lastname = $lastname;
  }
}
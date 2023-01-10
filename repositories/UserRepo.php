<?php

// Require the User class
require_once 'models/User.php';

class UserRepository {
  private $users = [];

  public function __construct() {
    // Load the users from a database or file
    $this->users = [
      new User(1, 'John Doe', 'john@example.com'),
      new User(2, 'Jane Smith', 'jane@example.com'),
      new User(3, 'Bob Williams', 'bob@example.com'),
    ];
  }

  public function findAll() {
    return $this->users;
  }

  public function findById($id) {
    // Code to find a user with the given ID
  }

  public function save(User $user) {
    // Code to save a user to the database or file
  }

  public function delete($id) {
    // Code to delete a user from the database or file
  }
}

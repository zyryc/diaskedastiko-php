<?php

// Require the User class
require_once 'models/user.php';
require_once 'repositories/UserRepo.php';

class UsersController {
  private $repo;

  public function __construct() {
    $this->repo = new UserRepository();
  }

  public function index() {
    // $json = Jsonifier::jsonify($this->users);
    // print_r("expression");
    view("users",['users' => $this->repo->findAll()]);
  }

  public function show($id) {
    // Code to display a single user with the given ID
  }

  public function create() {
    // Code to create a new user
  }

  public function update($id) {
    // Code to update an existing user with the given ID
  }

  public function delete($id) {
    // Code to delete an existing user with the given ID
  }
}

// I hope this helps! Let me know if you have any further questions.

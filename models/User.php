<?php

class User {
  public $id;
  public $name;
  public $email;

  public function __construct($id, $name, $email) {
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
  }
    public function __sleep() {
    return ['id', 'name', 'email'];
  }

public function __wakeup() {
    // Do any necessary initialization when unserializing the object
  }
}

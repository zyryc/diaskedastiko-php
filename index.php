<?php

// Check if Composer dependencies are installed
if (file_exists('vendor/autoload.php')) {
  // Load Composer dependencies
  require 'vendor/autoload.php';
}

// Autoload the model, controller, and repository files
spl_autoload_register(function ($class) {
  // Convert the class name to a path
  $path = str_replace('\\', '/', $class) . '.php';

  // Check if the file exists
  if (file_exists($path)) {
    // Require the file
    require $path;
  }
});
require 'engine/view.php';

// Require the router file
require 'engine/router.php';
require 'routes.php';
require 'engine/jsonifyer.php';



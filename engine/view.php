<?php 

class View
{
  
  function render($template, $data = []) {
  // Extract the data variables into local variables
  extract($data);

  // Start output buffering
  ob_start();

  // Include the template file
  include "views/$template.php";

  // Get the contents of the output buffer
  $html = ob_get_clean();

  // Return the HTML
  return $html;
}
}

function view($template, $data = []){
  $view = new View();

   echo $view->render($template, $data);
}
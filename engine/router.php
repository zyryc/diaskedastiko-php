<?php
class Router
{
    private $routes = [];

    public function get($path, $controller, $action)
    {
        $this->routes[] = [
            "method" => "GET",
            "path" => $path,
            "controller" => $controller,
            "action" => $action,
        ];
    }

    public function put($path, $controller, $action)
    {
        $this->routes[] = [
            "method" => "PUT",
            "path" => $path,
            "controller" => $controller,
            "action" => $action,
        ];
    }

    public function post($path, $controller, $action)
    {
        $this->routes[] = [
            "method" => "POST",
            "path" => $path,
            "controller" => $controller,
            "action" => $action,
        ];
    }

    public function delete($path, $controller, $action)
    {
        $this->routes[] = [
            "method" => "DELETE",
            "path" => $path,
            "controller" => $controller,
            "action" => $action,
        ];
    }
    public function run()
    {
        // Get the request method and path from the server
        $method = $_SERVER["REQUEST_METHOD"];
        $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

        // Loop through the routes and match the request method and path to a route
        foreach ($this->routes as $route) {
            // print_r($path);
            if ($route["method"] == $method && $route["path"] == $path) {
                // If a match is found, create an instance of the controller and call the action method
                // $controller = new $route['controller']();
                // print_r($route['controller']);
                // $controller->{$route['action']}();
                // return;
                $phpfile = "";
                $php_file_path = $route["controller"];
                $php_path_parts = explode("/", $route["controller"]);
                foreach ($php_path_parts as $path) {
                    if (strpos($path, ".php") !== false) {
                        $phpfile = $path;
                    }
                }
                require $php_file_path;
                // $controller = new ($route["controller"])();
                $the_controller = str_replace(".php", "", $phpfile);
                try {
                    $controller = new $the_controller();
                    $controller->{$route["action"]}();
                } catch (Exception $e) {
                    // echo "Message: " . $e->getMessage();
                }
                return;
            }
        }

        // If no matching route is found, send a 404 response
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
    }
}

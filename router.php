<?php

// router.php
class Router {
    private $routes = [];

    public function addRoute($method, $url, $callback) {
        $this->routes[] = ['method' => $method, 'url' => $url, 'callback' => $callback];
    }

    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach ($this->routes as $route) {
            if ($method == $route['method'] && $url == $route['url']) {
                call_user_func($route['callback']);
                return;
            }
        }

        // Handle 404 if no route matches
        http_response_code(404);
        echo "404 Not Found";
    }
}

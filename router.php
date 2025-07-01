<?php

// router.php
// class Router {
//     private $routes = [];

//     public function addRoute($method, $url, $callback) {
//         $this->routes[] = ['method' => $method, 'url' => $url, 'callback' => $callback];
//     }

//     public function dispatch() {
//         $method = $_SERVER['REQUEST_METHOD'];
//         $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//         foreach ($this->routes as $route) {
//             if ($method == $route['method'] && $url == $route['url']) {
//                 call_user_func($route['callback']);
//                 return;
//             }
//         }

//         // Handle 404 if no route matches
//         http_response_code(404);
//         echo "404 Not Found";
//     }
// }


$url = isset($_GET['id']) ? $_GET["id"] : "";
$url = explode("/", rtrim($url,"/"));

switch ($url[0]) {  
    case "transaction":
        require_once __DIR__. "/transaction.php";
        break;

    case "/":
        require_once __DIR__."/index.php";
        break;
    
    case "admin":
        require_once __DIR__."/admin/index.php";
        break;

    case "admin/view":
        require_once __DIR__."/admin/view_transactions.php";
        break;

    case "admin/create":
        require_once __DIR__."/admin/form.php";
        break;
    case "admin/create_balance":
        require_once __DIR__."/admin/create_balance.php";
        break;
        
    default:
    require_once __DIR__."/404.php";
    break;
}
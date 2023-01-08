<?php

require("../vendor/autoload.php");

use App\Controllers\ApoyosController;
use App\Controllers\DiscentesController;
use App\Controllers\PcController;
use Router\RouterHandler;

$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);

echo "<pre>";
var_dump($slug);
echo "</pre>";

$resource = $slug[0] == "" ? "/" : $slug[0];
// $id hace referencia a pk
$id = $slug[1] ?? null;

$router = new RouterHandler;

switch($resource) {
    case '/':
        // echo "HOME PAGE";
        require("../source/views/home.html");
        break;
    
    case 'discentes':
        echo "DISCENTES PAGE";
        $method = $_POST["method"] ?? "get";
        $router->set_method($method);
        $router->set_data($_POST);
        $router->route(DiscentesController::class, $id);
        break;
    
    case 'apoyos':
        echo "APOYOS PAGE";
        $method = $_POST["method"] ?? "get";
        $router->set_method($method);
        $router->set_data($_POST);
        $router->route(ApoyosController::class, $id);
        break;
    
    case 'pc':
        echo "PC PAGE";
        $method = $_POST["method"] ?? "get";
        $router->set_method($method);
        $router->set_data($_POST);
        $router->route(PcController::class, $id);
}
<?php

require("../vendor/autoload.php");

use App\Controllers\ApoyosController;
use App\Controllers\DiscentesController;
use App\Controllers\PcController;
use Router\RouterHandler;

$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);

// echo "<pre>";
// var_dump($slug);
// echo "</pre>";

$resource = $slug[0] == "" ? "/" : $slug[0];
// $id hace referencia a pk
$id = $slug[1] ?? null;
$res = $slug[2] ?? null;

$router = new RouterHandler;

switch($resource) {
    case '/':
        // echo "HOME PAGE";
        require("../source/views/home.php");
        break;
    
    // case 'login':
    //     // echo "LOGIN";
    //     require("../source/login.php");
    //     break;

    case 'discentes':
        // echo "DISCENTES PAGE";
        $method = $_POST["method"] ?? "get";
        $router->set_method($method);
        $router->set_data($_POST);
        $router->route(DiscentesController::class, $id, $res);
        break;
    
    case 'apoyos':
        // echo "APOYOS PAGE";
        $method = $_POST["method"] ?? "get";
        $router->set_method($method);
        $router->set_data($_POST);
        $router->route(ApoyosController::class, $id, $res);
        break;
    
    case 'pc':
        // echo "PC PAGE";
        $method = $_POST["method"] ?? "get";
        $router->set_method($method);
        $router->set_data($_POST);
        $router->route(PcController::class, $id, $res);
}
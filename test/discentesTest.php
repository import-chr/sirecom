<?php

require "../vendor/autoload.php";

use App\Controllers\DiscentesController;

$discente_controller = new DiscentesController();

$discente_controller->store([
    "matricula" => "D-8445574",
    "nombre" => "Yael",
    "apellido" => "Salgado"
]);

// $discente_controller->index();

// $discente_controller->show("D-7334463");

// $discente_controller->update([
//     "matricula" => "D-1234567",
//     "nombre" => "chch",
//     "apellido" => "lrlr"
// ], "D-7334463");

// $discente_controller->destroy("D-1234567");

?>
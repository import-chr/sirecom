<?php

require "../vendor/autoload.php";

use App\Controllers\DiscentesController;

$discente_controller = new DiscentesController();

$discente_controller->store([
    "matricula" => "D-2336985",
    "nombre" => "Francisco",
    "apellido" => "Medina"
]);

// $discente_controller->index();

// $discente_controller->show("D-7334463");

// $discente_controller->update([
//     "matricula" => "D-1234567",
//     "nombre" => "chch",
//     "apellido" => "lrlr"
// ], "D-7334463");

// $discente_controller->destroy("D-1234567");
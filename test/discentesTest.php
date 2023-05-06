<?php

require "../vendor/autoload.php";

use App\Controllers\DiscentesController;

$discente_controller = new DiscentesController;

// $discente_controller->store([
//     "matricula" => "D-1597536",
//     "nombre" => "Juan",
//     "apellidop" => "Salgado",
//     "apellidom" => "Perez",
// ]);

$discente_controller->index();

// $discente_controller->show("D-1597536");

// $discente_controller->update([
//     "matricula" => "D-1597536",
//     "nombre" => "Luis",
//     "apellidop" => "Perez",
//     "apellidom" => "Perez",
// ], "D-1597536");

// $discente_controller->destroy("D-1597536");
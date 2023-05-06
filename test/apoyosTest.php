<?php

require "../vendor/autoload.php";

use App\Controllers\ApoyosController;

$apoyos_controller = new ApoyosController;

// $apoyos_controller->store([
//     "matricula" => "C-4523687",
//     "nombre" => "Juan",
//     "apellidop" => "Hernandez",
//     "apellidom" => "Gomez"
// ]);

$apoyos_controller->index();

// $apoyos_controller->show("C-4523687");

// $apoyos_controller->update([
//     "matricula" => "C-4523687",
//     "nombre" => "David",
//     "apellidop" => "Hernandez",
//     "apellidom" => "Gonzalez"
// ], "C-4523687");

// $apoyos_controller->destroy("C-4523687");
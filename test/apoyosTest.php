<?php

require "../vendor/autoload.php";

use App\Controllers\ApoyosController;

$apoyos_controller = new ApoyosController;

$apoyos_controller->store([
    "matricula" => "A-10063594",
    "nombre" => "Petra",
    "apellido" => "Hernandez"
]);

// $apoyos_controller->index();

// $apoyos_controller->show("A-10059375");

// $apoyos_controller->update([
//     "matricula" => "A-10059375",
//     "nombre" => "Paola",
//     "apellido" => "Martinez"
// ], "A-10061486");

// $apoyos_controller->destroy("A-10059375");
<?php

require "../vendor/autoload.php";

use App\Controllers\PcController;

$pc_controller = new PcController;
// $pc_controller->store([
//     "discente_matricula" => "D-7334463",
//     "direccion_MAC" => "00:1B:44:11:3A:B7",
//     "sistema_operativo" => "Windows",
//     "procesador" => "Intel Core i3-11",
//     "memoria_RAM" => 8,
//     "marca" => "Acer",
//     "modelo" => "Aspire 3",
//     "fecha_registro" => date("Y-m-d H:i:s"),
//     "apoyos_matricula" => "A-10085643",
// ]);

// $pc_controller->index();

// $pc_controller->show(4);

$pc_controller->update([
    "direccion_MAC" => "11:2C:55:22:4B:C8",
    "sistema_operativo" => "Windows",
    "procesador" => "Intel Core i5-11",
    "memoria_RAM" => 16,
    "marca" => "HP",
    "modelo" => "Pavilion 15"
], 5);

// $pc_controller->destroy(4);
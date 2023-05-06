<?php

require "../vendor/autoload.php";

use App\Controllers\PcController;

$pc_controller = new PcController;

// $pc_controller->store([
//     "direccion_mac" => "00:1B:44:11:3A:D0",
//     "sis_op" => "Windows",
//     "procesador" => "Intel Core i3-11",
//     "ram_gb" => 8,
//     "marca" => "Acer",
//     "modelo" => "Aspire 3"
// ]);

$pc_controller->index();

// $pc_controller->show(12);

// $pc_controller->update([
//     "direccion_mac" => "00:1B:44:11:3A:D9",
//     "sis_op" => "Windows",
//     "procesador" => "Intel Core i5-12",
//     "ram_gb" => 16,
//     "marca" => "Acer",
//     "modelo" => "Aspire 3"
// ], 12);

// $pc_controller->destroy(12);
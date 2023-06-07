<?php

session_start();

// Verificar si el botón de "Cerrar sesión" ha sido presionado
if(isset($_POST['logout'])) {
    // Destruir todas las variables de sesión
    session_unset();
    
    // Destruir la sesión
    session_destroy();
    
    // Redireccionar a la página de inicio de sesión o a otra página deseada
    header("Location: /sirecom/source/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../source/img/EMI.png" type="image/png">
    <link rel="stylesheet" href="../source/css/tables-style.css">
    <link rel="stylesheet" href="../source/css/navbar-style.css">
    <link rel="stylesheet" href="../source/css/buttons-style.css">
    <link rel="stylesheet" href="../source/icons/uicons-solid-rounded/css/uicons-solid-rounded.css">
    <title>Computadoras</title>
</head>
<body>
    <header class="header edge-space mid-container">
        <a class="nav" href="/sirecom/public"><h3 class="logo">SIRECOM</h3></a>
        <nav>
            <ul class="nav__links">
                <li><a class="nav" href="discentes">Discentes</a></li>
                <li><a class="nav" href="pc">Computadoras</a></li>
                <li><a class="nav" href="apoyos">Apoyos Didácticos</a></li>
            </ul>
        </nav>
        <form method="post" action="">
            <button type="submit" name="logout" class="btn">Cerrar sesión</button>
        </form>
    </header>
    <div class="container">
        <h1>Computadoras</h1>

        <table class="content-table sticky">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Dirección MAC</th>
                    <th>Sistema Operativo</th>
                    <th>Procesador</th>
                    <th>Memoria RAM</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <!-- <tr>Fecha de Registro</tr> -->
                    <th><i class="fi-sr-edit"></th>
                    <th><i class="fi-sr-trash"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $result): ?>
                    <tr>
                        <td><?= $result["id_pc"] ?></td>
                        <td><?= $result["direccion_mac"] ?></td>
                        <td><?= $result["sis_op"] ?></td>
                        <td><?= $result["procesador"] ?></td>
                        <td><?= $result["ram_gb"] ?></td>
                        <td><?= $result["marca"] ?></td>
                        <td><?= $result["modelo"] ?></td>
                        <!-- <td><?= $result["fecha_registro"] ?></td> -->
                        <td><a id="update" class="update" href="pc/edit/<?= $result["id_pc"] ?>"><i class="fi-sr-edit"></a></td>
                        <td><a class="trash" href="pc/delete/<?= $result["id_pc"] ?>"><i class="fi-sr-trash"></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a class="url-register" href="pc/create">Nueva Computadora</a>
    </div>
    <script src="../source/js/delete-alert.js"></script>
</body>
</html>
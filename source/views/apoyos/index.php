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
    <title>Personal de Apoyos Didácticos</title>
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
        <h1>Personal de Apoyos Didácticos</h1>

        <table class="content-table sticky">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th><i class="fi-sr-edit"></th>
                    <th><i class="fi-sr-trash"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $result): ?>
                    <tr>
                        <td data-href="apoyos/show/<?= $result["matricula"] ?>"><?= $result["matricula"] ?></td>
                        <td><?= $result["nombre"] ?></td>
                        <td><?= $result["apellidop"] ?></td>
                        <td><?= $result["apellidom"] ?></td>
                        <td><a id="update" class="update" href="apoyos/edit/<?= $result["matricula"] ?>"><i class="fi-sr-edit"></a></td>
                        <td><a id="trash" class="trash" href="apoyos/delete/<?= $result["matricula"] ?>"><i class="fi-sr-trash"></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a class="url-register" href="apoyos/create">Nuevo Personal</a>
    </div>
    <script src="../source/js/delete-alert.js"></script>
    <script src="../source/js/clickable-rows.js"></script>
</body>
</html>
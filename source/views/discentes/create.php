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
    <link rel="icon" href="../../source/img/EMI.png" type="image/png">
    <link rel="stylesheet" href="../../source/css/form-style.css">
    <link rel="stylesheet" href="../../source/css/navbar-style.css">
    <link rel="stylesheet" href="../../source/css/buttons-style.css">
    <title>Nuevo Discente</title>
</head>
<body>
    <header class="header edge-space mid-container">
        <a class="nav" href="/sirecom/public"><h3 class="logo">SIRECOM</h3></a>
        <nav>
            <ul class="nav__links">
                <li><a class="nav" href="../discentes">Discentes</a></li>
                <li><a class="nav" href="../pc">Computadoras</a></li>
                <li><a class="nav" href="../apoyos">Apoyos Didácticos</a></li>
            </ul>
        </nav>
        <form method="post" action="">
            <button type="submit" name="logout" class="btn">Cerrar sesión</button>
        </form>
    </header>
    <div class="form-register">
        <h4>Nuevo Discente</h4>
        <form action="/sirecom/public/discentes" method="post">
            <div>
                <label for="matricula">Matrícula</label>
                <input class="type-data" type="text" name="matricula" id="matricula matricula_discente">
            </div>

            <div>
                <label for="nombre">Nombre</label>
                <input class="type-data" type="text" name="nombre" id="nombre nombre_discente">
            </div>

            <div>
                <label for="apellidop">Apellido Paterno</label>
                <input class="type-data" type="text" name="apellidop" id="apellidop apellido_discente">
            </div>
            
            <div>
                <label for="apellidom">Apellido Materno</label>
                <input class="type-data" type="text" name="apellidom" id="apellidom apellido_discente">
            </div>

            <input type="hidden" name="method" value="store">

            <div class="btn-container">
                <button class="btn" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>
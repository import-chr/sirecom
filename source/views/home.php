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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="icon" href="../source/img/EMI.png" type="image/png">
    <link rel="stylesheet" href="../source/css/home-styles.css">
    <link rel="stylesheet" href="../source/css/navbar-style.css">
    <link rel="stylesheet" href="../source/css/buttons-style.css">
    <link rel="stylesheet" href="../source/icons/uicons-solid-rounded/css/uicons-solid-rounded.css">
    <!-- Go Live -->
    <link rel="stylesheet" href="../css/home-styles.css">
    <link rel="stylesheet" href="../css/navbar-style.css">
    <link rel="stylesheet" href="../icons/uicons-solid-rounded/css/uicons-solid-rounded.css">
    <title>Inicio</title>
</head>
<body>
    <!-- <script>
    swal({
        title: 'Bienvenido',
        text: 'Has ingresado a tu cuenta',
        icon: 'success',
        button: 'Continuar',
    });
    </script> -->
    <div class="main-container">
        <header class="header edge-space mid-container">
            <h3 class="logo">SIRECOM</h3>
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

        <div class="title-container mid-container sub-header">
            <div id="title">
                <h1 class="title glitched">SIRECOM</h1>
            </div>
        </div>

        <div class="full-container mid-container">
            <div class="ref-container">
                <div class="sub-ref" id="p-1">
                    <a href="discentes" class="linker" id="linker-discentes">
                        <i class="fi-sr-user"></i>
                        <p>Discentes</p>
                    </a>
                </div>

                <div class="sub-ref" id="p-2">
                    <a href="pc" class="linker" id="linker-pc">
                        <i class="fi-sr-computer"></i>
                        <p>Computadoras</p>
                    </a>
                </div>

                <div class="sub-ref" id="p-3">
                    <a href="apoyos" class="linker" id="linker-apoyos">
                        <i class="fi-sr-users"></i>
                        <p>Personal de Apoyos Didácticos</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer edge-space mid-container"></div>
    </div>
</body>
</html>
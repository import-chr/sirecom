<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="icon" href="../source/img/EMI.png" type="image/png">
    <!-- <link rel="icon" href="../img/EMI.png" type="image/png"> -->
    <link rel="stylesheet" href="../source/css/login.css">
    <!-- <link rel="stylesheet" href="../css/login.css"> -->
    <title>SIRECOM</title>
</head>

<?php

$server = "localhost";
$database = "sirecom";
$port = "5432";
$username = "postgres";
$password = "root";

session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: /sirecom/public');
    exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $matricula = $_POST['user'];
    $contrasena = $_POST['pass'];

    $conn = new PDO("pgsql:host=$server;port=$port;dbname=$database", $username, $password);

    $query = "SELECT * FROM admin WHERE matricula = :user AND contrasena = :pass";
    $statement = $conn->prepare($query);
    $statement->bindParam(':user', $matricula);
    $statement->bindParam(':pass', $contrasena);
    $statement->execute();
    $resultLog = $statement->fetch(PDO::FETCH_ASSOC);

    if($resultLog) {
        // Establecer una variable de sesión para indicar que el usuario ha iniciado sesión
        $_SESSION['logged_in'] = true;
        $_SESSION['usuario'] = $_REQUEST['user'];
        // $_SESSION['clave'] = $_REQUEST['pass'];
        // Redirigir a la ruta deseada
        header('Location: /sirecom/public');
        exit();
    } else {
    }
}

?>

<body>
    <div class="wrapper">
        <div class="imag">
            <img class="emi-logo" src="../source/img/EMI.png" alt="EMI">
            <!-- <img class="emi-logo" src="../img/EMI.png" alt="EMI"> -->
        </div>

        <div class="container">
            <h1>¡Bienvenido!</h1>
            <form class="form" method="post">
                <input type="text" placeholder="Matricula" name="user">
                <input type="password" placeholder="Contraseña" name="pass">
                <button type="submit" id="login-button">Ingresar</button>
            </form>
        </div>

        <!-- <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
            <script>
                swal({
                    title: 'Bienvenido',
                    text: 'Has ingresado a tu cuenta',
                    icon: 'success',
                    button: 'Continuar',
                });
            </script>
        <?php endif; ?> -->

        <?php if(isset($resultLog) && !$resultLog): ?>
            <script>
                swal({
                    title: 'Lo siento',
                    text: 'Verifica tus datos',
                    icon: 'error',
                    button: 'Aceptar',
                });
            </script>
        <?php endif; ?>
        
        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../source/css/form-style.css">
    <link rel="stylesheet" href="../../../source/css/navbar-style.css">
    <link rel="stylesheet" href="../../../source/css/buttons-style.css">
    <title>Editar Computadora</title>
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
    </header>
    <div class="form-register">
        <h4>Editar Computadora</h4>
        <form action="/sirecom/public/pc" method="post">
            <div>
                <label for="direccion_mac">Dirección MAC</label>
                <input class="type-data" type="text" name="direccion_mac" id="mac-addr" placeholder="<?= $result_null[0]["direccion_mac"] ?>">
            </div>

            <div>
                <label for="sis_op">Sistema Operativo</label>
                <input class="type-data" type="text" name="sis_op" id="so" placeholder="<?= $result_null[0]["sis_op"] ?>">
            </div>

            <div>
                <label for="procesador">Procesador</label>
                <input class="type-data" type="text" name="procesador" id="prosc" placeholder="<?= $result_null[0]["procesador"] ?>">
            </div>

            <div>
                <label for="ram_gb">Memoria RAM</label>
                <input class="type-data" type="text" name="ram_gb" id="ram" placeholder="<?= $result_null[0]["ram_gb"] ?>">
            </div>

            <div>
                <label for="marca">Marca</label>
                <input class="type-data" type="text" name="marca" id="marca" placeholder="<?= $result_null[0]["marca"] ?>">
            </div>

            <div>
                <label for="modelo">Modelo</label>
                <input class="type-data" type="text" name="modelo" id="modelo" placeholder="<?= $result_null[0]["modelo"] ?>">
            </div>

            <input type="hidden" name="pk" value="<?= $result_null[0]["id_pc"] ?>">
            <input type="hidden" name="method" value="edit">

            <div class="btn-container">
                <button class="btn" type="submit">Actualizar</button>
            </div>
        </form>
    </div>
</body>
</html>
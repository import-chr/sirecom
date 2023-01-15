<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../source/css/form-style.css">
    <link rel="stylesheet" href="../../source/css/navbar-style.css">
    <link rel="stylesheet" href="../../source/css/buttons-style.css">
    <title>Nueva Computadora</title>
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
        <h4>Nueva Computadora</h4>
        <form action="/sirecom/public/pc" method="post">
            <div>
                <label for="discente_matricula">Matrícula Discente</label>
                <input class="type-data" type="text" name="discente_matricula" id="dis-mtr">
            </div>

            <div>
                <label for="direccion_MAC">Dirección MAC</label>
                <input class="type-data" type="text" name="direccion_MAC" id="mac-addr">
            </div>

            <div>
                <label for="sistema_operativo">Sistema Operativo</label>
                <input class="type-data" type="text" name="sistema_operativo" id="so">
            </div>

            <div>
                <label for="procesador">Procesador</label>
                <input class="type-data" type="text" name="procesador" id="prosc">
            </div>

            <div>
                <label for="memoria_RAM">Memoria RAM</label>
                <input class="type-data" type="text" name="memoria_RAM" id="ram">
            </div>

            <div>
                <label for="marca">Marca</label>
                <input class="type-data" type="text" name="marca" id="marca">
            </div>

            <div>
                <label for="modelo">Modelo</label>
                <input class="type-data" type="text" name="modelo" id="modelo">
            </div>

            <!-- <div>
                <label for="fecha_registro">Fecha</label>
                <input type="text" name="fecha_registro" id="date">
            </div> -->

            <div>
                <label for="apoyos_matricula">Matrícula Personal</label>
                <input class="type-data" type="text" name="apoyos_matricula" id="apellido_discente">
            </div>

            <input type="hidden" name="method" value="store">

            <div class="btn-container">
                <button class="btn" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Computadora</title>
</head>
<body>
    <form action="/SIRECOM/public/pc" method="post">
        <div>
            <label for="discente_matricula">Matrícula Discente</label>
            <input type="text" name="discente_matricula" id="dis-mtr">
        </div>

        <div>
            <label for="direccion_MAC">Dirección MAC</label>
            <input type="text" name="direccion_MAC" id="mac-addr">
        </div>

        <div>
            <label for="sistema_operativo">Sistema Operativo</label>
            <input type="text" name="sistema_operativo" id="so">
        </div>

        <div>
            <label for="procesador">Procesador</label>
            <input type="text" name="procesador" id="prosc">
        </div>

        <div>
            <label for="memoria_RAM">Memoria RAM</label>
            <input type="text" name="memoria_RAM" id="ram">
        </div>

        <div>
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca">
        </div>

        <div>
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo">
        </div>

        <!-- <div>
            <label for="fecha_registro">Fecha</label>
            <input type="text" name="fecha_registro" id="date">
        </div> -->

        <div>
            <label for="apoyos_matricula">Matrícula Personal</label>
            <input type="text" name="apoyos_matricula" id="apellido_discente">
        </div>

        <input type="hidden" name="method" value="post">

        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
</body>
</html>
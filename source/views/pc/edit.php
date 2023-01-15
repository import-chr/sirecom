<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../source/css/form-style.css">
    <link rel="stylesheet" href="../../../source/css/buttons-style.css">
    <title>Editar Computadora</title>
</head>
<body>
    <div class="form-register">
        <h4>Editar Computadora</h4>
        <form action="/sirecom/public/pc" method="post">
            <div>
                <label for="discente_matricula">Matrícula Discente</label>
                <input class="type-data" type="text" name="discente_matricula" id="dis-mtr" placeholder="<?= $result_null[0]["discente_matricula"] ?>">
            </div>

            <div>
                <label for="direccion_MAC">Dirección MAC</label>
                <input class="type-data" type="text" name="direccion_MAC" id="mac-addr" placeholder="<?= $result_null[0]["direccion_MAC"] ?>">
            </div>

            <div>
                <label for="sistema_operativo">Sistema Operativo</label>
                <input class="type-data" type="text" name="sistema_operativo" id="so" placeholder="<?= $result_null[0]["sistema_operativo"] ?>">
            </div>

            <div>
                <label for="procesador">Procesador</label>
                <input class="type-data" type="text" name="procesador" id="prosc" placeholder="<?= $result_null[0]["procesador"] ?>">
            </div>

            <div>
                <label for="memoria_RAM">Memoria RAM</label>
                <input class="type-data" type="text" name="memoria_RAM" id="ram" placeholder="<?= $result_null[0]["memoria_RAM"] ?>">
            </div>

            <div>
                <label for="marca">Marca</label>
                <input class="type-data" type="text" name="marca" id="marca" placeholder="<?= $result_null[0]["marca"] ?>">
            </div>

            <div>
                <label for="modelo">Modelo</label>
                <input class="type-data" type="text" name="modelo" id="modelo" placeholder="<?= $result_null[0]["modelo"] ?>">
            </div>

            <div>
                <label for="apoyos_matricula">Matrícula Personal</label>
                <input class="type-data" type="text" name="apoyos_matricula" id="apellido_discente" placeholder="<?= $result_null[0]["apoyos_matricula"] ?>">
            </div>

            <input type="hidden" name="method" value="post">

            <div class="btn-container">
                <button class="btn" type="submit">Actualizar</button>
            </div>
        </form>
    </div>
</body>
</html>
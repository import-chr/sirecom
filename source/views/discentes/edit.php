<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../source/css/form-style.css">
    <link rel="stylesheet" href="../../../source/css/buttons-style.css">
    <title>Editar Discente</title>
</head>
<body>
    <div class="form-register">
        <h4>Editar Discente</h4>
        <form action="/sirecom/public/discente" method="post">
            <div>
                <label for="matricula">Matrícula</label>
                <input class="type-data" id="matricula" type="text" name="matricula" id="matricula_discente" placeholder="<?= $result_null[0]["matricula"] ?>">
            </div>

            <div>
                <label for="nombre">Nombre</label>
                <input class="type-data" id="nombre" type="text" name="nombre" id="nombre_discente" placeholder="<?= $result_null[0]["nombre"] ?>">
            </div>

            <div>
                <label for="apellido">Apellido</label>
                <input class="type-data" id="apellido" type="text" name="apellido" id="apellido_discente" placeholder="<?= $result_null[0]["apellido"] ?>">
            </div>

            <input type="hidden" name="method" value="post">

            <div class="btn-container">
                <button class="btn" type="submit">Actualizar</button>
            </div>
        </form>
    </div>
</body>
</html>
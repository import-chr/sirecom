<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../source/css/form-style.css">
    <link rel="stylesheet" href="../../source/css/buttons-style.css">
    <title>Nuevo Discente</title>
</head>
<body>
    <div class="form-register">
        <h4>Nuevo Discente</h4>
        <form action="/sirecom/public/discentes" method="post">
            <div>
                <label for="matricula">Matrícula</label>
                <input class="type-data" id="matricula" type="text" name="matricula" id="matricula_discente">
            </div>

            <div>
                <label for="nombre">Nombre</label>
                <input class="type-data" id="nombre" type="text" name="nombre" id="nombre_discente">
            </div>

            <div>
                <label for="apellido">Apellido</label>
                <input class="type-data" id="apellido" type="text" name="apellido" id="apellido_discente">
            </div>

            <input type="hidden" name="method" value="post">

            <div class="btn-container">
                <button class="btn" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>
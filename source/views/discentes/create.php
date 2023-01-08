<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Discente</title>
</head>
<body>
    <form action="/SIRECOM/public/discentes" method="post">
        <div>
            <label for="matricula">Matrícula</label>
            <input type="text" name="matricula" id="matricula_discente">
        </div>

        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre_discente">
        </div>

        <div>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido_discente">
        </div>

        <input type="hidden" name="method" value="post">

        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
</body>
</html>
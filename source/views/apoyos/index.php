<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal de Apoyos Didácticos</title>
</head>
<body>
    <table>
        <thead>
            <th>
                <tr>Matrícula</tr>
                <tr>Nombre</tr>
                <tr>Apellido</tr>
            </th>
        </thead>
        <tbody>
            <?php foreach ($results as $result): ?>
                <tr>
                    <td><?= $result["matricula"] ?></td>
                    <td><?= $result["nombre"] ?></td>
                    <td><?= $result["apellido"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="/SIRECOM/public/discentes/create">Nuevo Discente</a>
</body>
</html>
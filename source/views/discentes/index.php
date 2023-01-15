<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../source/css/tables-style.css">
    <link rel="stylesheet" href="../source/icons/uicons-solid-rounded/css/uicons-solid-rounded.css">
    <title>Discentes</title>
</head>
<body>
    <div class="container">
        <h1>Discentes</h1>

        <table class="content-table sticky">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th><i class="fi-sr-trash"></th>
                    <th><i class="fi-sr-edit"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $result): ?>
                    <tr>
                        <td data-href="discentes/show/<?= $result["matricula"] ?>"><?= $result["matricula"] ?></td>
                        <td><?= $result["nombre"] ?></td>
                        <td><?= $result["apellido"] ?></td>
                        <td><a class="trash" href="discentes/delete/<?= $result["matricula"] ?>"><i class="fi-sr-trash"></a></td>
                        <td><a id="update" class="update" href="discentes/edit/<?= $result["matricula"] ?>"><i class="fi-sr-edit"></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a class="url-register" href="discentes/create">Nuevo Discente</a>
    </div>
    <script src="../source/js/delete-alert.js"></script>
    <script src="../source/js/clickable-rows.js"></script>
</body>
</html>
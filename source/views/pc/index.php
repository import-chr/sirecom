<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../source/css/tables-style.css">
    <link rel="stylesheet" href="../source/icons/uicons-solid-rounded/css/uicons-solid-rounded.css">
    <title>Computadoras</title>
</head>
<body>
    <div class="container">
        <h1>Computadoras</h1>

        <table class="content-table sticky">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Matrícula Discente</th>
                    <th>Dirección MAC</th>
                    <th>Sistema Operativo</th>
                    <th>Procesador</th>
                    <th>Memoria RAM</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <!-- <tr>Fecha de Registro</tr> -->
                    <th>Matrícula Personal</th>
                    <th><i class="fi-sr-trash"></th>
                    <th><i class="fi-sr-edit"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $result): ?>
                    <tr>
                        <td><?= $result["pc_id"] ?></td>
                        <td><?= $result["discente_matricula"] ?></td>
                        <td><?= $result["direccion_MAC"] ?></td>
                        <td><?= $result["sistema_operativo"] ?></td>
                        <td><?= $result["procesador"] ?></td>
                        <td><?= $result["memoria_RAM"] ?></td>
                        <td><?= $result["marca"] ?></td>
                        <td><?= $result["modelo"] ?></td>
                        <!-- <td><?= $result["fecha_registro"] ?></td> -->
                        <td><?= $result["apoyos_matricula"] ?></td>
                        <td><a class="trash" href="pc/delete/<?= $result["pc_id"] ?>"><i class="fi-sr-trash"></a></td>
                        <td><a id="update" class="update" href="pc/edit/<?= $result["pc_id"] ?>"><i class="fi-sr-edit"></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a class="url-register" href="pc/create">Nueva Computadora</a>
    </div>
    <script src="../source/js/delete-alert.js"></script>
</body>
</html>
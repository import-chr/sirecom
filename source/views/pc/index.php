<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computadoras</title>
</head>
<body>
    <table>
        <thead>
            <th>
                <tr>ID</tr>
                <tr>Matrícula Discente</tr>
                <tr>Dirección MAC</tr>
                <tr>Sistema Operativo</tr>
                <tr>Procesador</tr>
                <tr>Memoria RAM</tr>
                <tr>Marca</tr>
                <tr>Modelo</tr>
                <!-- <tr>Fecha de Registro</tr> -->
                <tr>Matrícula Personal</tr>
            </th>
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
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="/SIRECOM/public/pc/create">Nuevo Discente</a>
</body>
</html>
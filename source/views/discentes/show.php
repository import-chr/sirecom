<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../source/css/tables-style.css">
    <link rel="stylesheet" href="../../../source/css/navbar-style.css">
    <link rel="stylesheet" href="../../../source/icons/uicons-solid-rounded/css/uicons-solid-rounded.css">
    <title>Discente</title>
</head>
<body>
    <header class="header edge-space mid-container">
        <a class="nav" href="/sirecom/public"><h3 class="logo">SIRECOM</h3></a>
        <nav>
            <ul class="nav__links">
                <li><a class="nav" href="../../discentes">Discentes</a></li>
                <li><a class="nav" href="../../pc">Computadoras</a></li>
                <li><a class="nav" href="../../apoyos">Apoyos Didácticos</a></li>
                <li class="profile"><span class="fi-sr-user"> </span><?= $userLogged ?></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>
            <?= $result_null[0]["nombre"] ?>
            <?= $result_null[0]["apellidop"] ?>
            <?= $result_null[0]["apellidom"] ?>
        </h1>

        <h4>
            <?= $result_null[0]["matricula"] ?>
        </h4>

        <table class="content-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Dirección MAC</th>
                    <th>Sistema Operativo</th>
                    <th>Procesador</th>
                    <th>Memoria RAM</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <!-- <tr>Fecha de Registro</tr> -->
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $res): ?>
                    <tr>
                        <td><?= $res["id_pc"] ?></td>
                        <td><?= $res["direccion_mac"] ?></td>
                        <td><?= $res["sis_op"] ?></td>
                        <td><?= $res["procesador"] ?></td>
                        <td><?= $res["ram_gb"] ?></td>
                        <td><?= $res["marca"] ?></td>
                        <td><?= $res["modelo"] ?></td>
                        <!-- <td><?= $res["fecha_registro"] ?></td> -->
                        <td><a class="trash" href="pc/delete/<?= $res["id_pc"] ?>"><i class="fi-sr-trash"></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
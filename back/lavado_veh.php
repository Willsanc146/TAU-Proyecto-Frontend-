<?php

include '../db/conexion.php';

    // Número de registros por página
    $registrosPorPagina = 5;

    // Obtener la página actual
    if (isset($_GET['pagina'])) {
        $paginaActual = $_GET['pagina'];
    } else {
        $paginaActual = 1;
    }

    // Calcular el offset para la consulta SQL
    $offset = ($paginaActual - 1) * $registrosPorPagina;
    $querylavado = mysqli_query($conexion, "SELECT lavado_car.*, colaboradores.nombre, colaboradores.apellido FROM lavado_car INNER JOIN colaboradores ON lavado_car.colaborador = colaboradores.id LIMIT $registrosPorPagina OFFSET $offset");

    // Consulta para obtener el total de registros
    $totalRegistros = mysqli_num_rows(mysqli_query($conexion, "SELECT * FROM lavado_car"));

    // Calcular el número total de páginas
    $totalPaginas = ceil($totalRegistros / $registrosPorPagina);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/lavado_veh.css" />
    <link rel="shortcut icon" href="img/Icono.ico" type="image/x-icon" />
    <title>Ingreso vehiculos</title>
</head>

<body>
    <header>
        <a href="../index.html"><img src="../img/Logo.png" alt="Logo"></a>
        <h1>Autolavado Willsanc</h1>
        <a href="../back/logout.php">
            <h5>cerrar sesión</h5>
        </a>
    </header>
    <main>
        <section>
            <div class="vehiculo_form">
                <div class="formulario">
                    <h1>Ingreso de Vehiculos</h1>
                    <form action="../back/almacenar_veh.php" method="POST">
                        <h2>Ingresar vehiculo</h2>
                        <select class="select_css" type="varchar" name="tipo" id="tipo">
                            <option value="automovil">Automovil</option>
                            <option value="camioneta">Camioneta</option>
                            <option value="motocicleta">Motocicleta</option>
                        </select>
                        <input class="input_css" type="text" name="placa"
                            placeholder="Digite la placa del vehículo sin espacios" />
                        <select class="select_css" type="number" name="combo" id="combo">
                            <option value="1">Combo 1-Automovil</option>
                            <option value="11">Combo 1-Camioneta</option>
                            <option value="2">combo 2-Automovil</option>
                            <option value="21">combo 2-Camioneta</option>
                            <option value="3">combo 3-Automovil</option>
                            <option value="31">combo 3-Camioneta</option>
                            <option value="4">combo 4-Automovil</option>
                            <option value="41">combo 4-Camioneta</option>
                            <option value="5">combo 5-Automovil</option>
                            <option value="51">combo 5-Camioneta</option>
                            <option value="6">combo 6-motocicleta</option>
                            <option value="7">combo 7-motocicleta</option>
                            <option value="8">combo 8-motocicleta</option>
                        </select>
                        <select class="select_css" type="number" name="colaborador" id="colaborador">
                            <option value="1">Luis Angel Guerrero</option>
                            <option value="2">Antonio Luis Rosales</option>
                        </select>
                        <input class="input_submit" type="submit" name="submit_car" value="guardar">
                    </form>
                </div>
            </div>
        </section>

        <section class=tabla_veh_container>
            <table id="tabla_veh" class="tabla_veh">
                <thead>
                    <tr class="myHead">
                        <th>id</th>
                        <th>Tipo</th>
                        <th>Placa</th>
                        <th>Combo</th>
                        <th>Nombre Colaborador</th>
                        <th>Apellido Colaborador</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    while ($datos = mysqli_fetch_array($querylavado)) {
                        $id = $datos['id'];
                        $tipo = $datos['tipo'];
                        $placa = $datos['placa'];
                        $combo = $datos['combo'];
                        $nombreC = $datos['nombre'];
                        $apellidoC = $datos['apellido'];

                        echo'
                        <tr>
                            <td>'.$id.'</td>
                            <td>'.$tipo.'</td>
                            <td>'.$placa.'</td>
                            <td>'.$combo.'</td>
                            <td>'.$nombreC.'</td>
                            <td>'.$apellidoC.'</td>
                        </tr>
                        ';
                    }

                    ?>
                </tbody>
            </table>
        </section>
        <!-- Agregar la sección de la paginación -->
        <section class="pagination_container">
            <div class="pagination">
                <?php
            // Mostrar enlaces de paginación
            for ($i = 1; $i <= $totalPaginas; $i++) {
                echo '<a href="lavado_veh.php?pagina=' . $i . '">' . $i . '</a> ';
            }
            ?>
            </div>
        </section>
    </main>
</body>

</html>
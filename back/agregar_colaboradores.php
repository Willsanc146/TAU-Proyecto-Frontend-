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
    $queryColaborador = mysqli_query($conexion, "SELECT colaboradores.* FROM colaboradores LIMIT $registrosPorPagina OFFSET $offset");

    // Consulta para obtener el total de registros
    $totalRegistros = mysqli_num_rows(mysqli_query($conexion, "SELECT * FROM colaboradores"));

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
    <title>Ingreso Colaboradores</title>
</head>

<body>
    <header>
        <a href="../back/home_intranet.php"><img src="../img/Logo.png" alt="Logo"></a>
        <h1>Autolavado Willsanc</h1>
        <a href="../back/logout.php">
            <h5>cerrar sesión</h5>
        </a>
    </header>
    <main>
        <section>
            <div class="vehiculo_form">
                <div class="formulario">
                    <h1>Ingreso de Colaboradores</h1>
                    <form action="../back/almacenar_colaborador.php" method="POST">
                        <h2>Ingresar colaborador</h2>
                        <div>
                            <span>Nombres del colaborador:</span>
                            <input class="input_css" type="text" name="nombre" placeholder="Digite el nombre" />
                        </div>
                        <div>
                            <span>Apellidos del colaborador:</span>
                            <input class="input_css" type="text" name="apellido" placeholder="Digite el apellido" />
                        </div>
                        <div>
                            <span>Identificación del colaborador:</span>
                            <input class="input_css" type="number" name="cc" placeholder="Digite la Identificación" />
                        </div>
                        <div>
                            <span>Celular del colaborador:</span>
                            <input class="input_css" type="number" name="telefono"
                                placeholder="Digite el numero de celular" />
                        </div>
                        <input class="input_submit" type="submit" name="submit_colaborador" value="guardar">
                    </form>
                </div>
            </div>
        </section>

        <section class=tabla_veh_container>
            <table id="tabla_veh" class="tabla_veh">
                <thead>
                    <tr class="myHead">
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>CC</th>
                        <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    while ($datos1 = mysqli_fetch_array($queryColaborador)) {
                        $id = $datos1['id'];
                        $nombre = $datos1['nombre'];
                        $apellido = $datos1['apellido'];
                        $cc = $datos1['cc'];
                        $telefono = $datos1['telefono'];

                        echo'
                        <tr>
                            <td>'.$id.'</td>
                            <td>'.$nombre.'</td>
                            <td>'.$apellido.'</td>
                            <td>'.$cc.'</td>
                            <td>'.$telefono.'</td>
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
                echo '<a href="agregar_colaboradores.php?pagina=' . $i . '">' . $i . '</a> ';
            }
            ?>
            </div>
        </section>
    </main>
</body>

</html>
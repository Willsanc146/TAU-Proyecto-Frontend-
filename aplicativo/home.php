<?php

    session_start();

    include '../db/conexion.php';

    if (!ISSET($_SESSION['nombre'])) {
        header('location: ../aplicativo/home.php');
    } else {

        if ((time()-$_SESSION['time']) > 10) {
            header('location: ../db/logout.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/home.css" />
    <title>Intranet</title>
</head>

<body>
    <header>
        <a href="../index.html"><img src="../img/Logo.png" alt="Logo"></a>
        <h1>Autolavado Willsanc</h1>
        <h5>cerrar sesión</h5>
    </header>

    <main>
        <div class="container">
            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>01</h2>
                        <h3>Combos</h3>
                        <p>Descripcion de la oferta de combos ofertados para todo tipo de vehículo</p>
                        <a href="#">Ingresar</a>
                    </div>
                </div>
            </div>

            <?php
                if($_SESSION['rol']== 1){?>
            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>02</h2>
                        <h3>Lavado vehículos</h3>
                        <p>Ingreso de datos de los vehículos que ingresan a lavado.</p>
                        <a href="#">Ingresar</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>03</h2>
                        <h3>Parqueadero</h3>
                        <p>Ingreso de datos de los vehículos que ingresan a parqueadero.</p>
                        <a href="#">Ingresar</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>04</h2>
                        <h3>Ingreso colaboradores</h3>
                        <p>Ingreso de datos de los colaboradores de Autolavado Willsanc</p>
                        <a href="#">Ingresar</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2>05</h2>
                        <h3>Informe</h3>
                        <p>Presentación de informes de acuerdo a necesidad administrativa</p>
                        <a href="#">Ingresar</a>
                    </div>
                </div>
            </div>
            <?php
                }else{
                    echo'';
                }
            ?>
        </div>
    </main>
</body>

</html>
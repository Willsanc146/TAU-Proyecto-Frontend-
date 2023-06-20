<?php

include '../db/conexion.php';

        if (isset($_POST['submit_car'])) {
            $tipo = $_POST['tipo'];
            $placa = $_POST['placa'];
            $combo = $_POST['combo'];
            $idC = $_POST['colaborador'];

            $sql1 = mysqli_query($conexion,"INSERT INTO lavado_car (tipo, placa, combo, colaborador) VALUES ('$tipo', '$placa', $combo, $idC)");
        }
        header('Location: ../back/lavado_veh.php');
?>
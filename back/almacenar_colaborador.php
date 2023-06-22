<?php

include '../db/conexion.php';

        if (isset($_POST['submit_colaborador'])) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $cc = $_POST['cc'];
            $telefono = $_POST['telefono'];

            $sql2 = mysqli_query($conexion,"INSERT INTO colaboradores (nombre, apellido, cc, telefono) VALUES ('$nombre', '$apellido', $cc, $telefono)");
        }
        header('Location: ../back/agregar_colaboradores.php');
?>
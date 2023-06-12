<?php

    include '../db/conexion.php';

    if(isset($_POST['registro'])) {
        $nombre =$_POST['nombre'];
        $correo =$_POST['correo'];
        $clave =$_POST['clave'];

        $clave_en = base64_encode($clave);

        $sql = mysqli_query($conexion,"INSERT INTO usuarios(nombre, correo, clave) VALUES ('$nombre','$correo','$clave_en')");
    }

    header ('location:../pages/acc_intranet.html');
?>
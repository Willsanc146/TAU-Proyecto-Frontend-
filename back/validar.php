<?php

    include '../db/conexion.php';

    if(isset($_POST['inicio'])) {
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];

        $clave_enc = base64_encode($clave);

        $consulta = mysqli_query($conexion,"SELECT correo, clave FROM usuarios WHERE correo ='$correo' AND clave ='$clave_enc'");

        $cant = mysqli_num_rows($consulta);

        if($cant == 1) {
            while ($captura = mysqli_fetch_array($consulta)) {
                session_start();
                $_SESSION['nombre']= $captura['nombre'];
                $_SESSION['rol']= $captura['rol'];
                $_SESSION['correo']= $captura['correo'];
                $_SESSION['time'] = time();
            }

            header('location:../aplicativo/home.php');
        }else{
            header('location:../pages/acc_intranet.html');
        }
    }
?>
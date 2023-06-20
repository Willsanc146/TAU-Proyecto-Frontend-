<?php

    include '../db/conexion.php';

    function redirect($filename = "/")
	{
		if (!headers_sent()){
			header('Location: '.$filename);
		}else{
			echo '<script type="text/javascript">';
			echo 'window.location.href="'.$filename.'";';
			echo '</script>';
			echo '<noscript>';
			echo '<meta http-equiv="refresh" content="0;url='.$filename.'" />';
			echo '</noscript>';
		}
	}

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
                $_SESSION['correo']= $captura['correo'];
            }

            redirect("../back/home_intranet.php");
        }else{
            header('location: ../acc_intranet.html');
        }
    }
?>
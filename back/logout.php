<!DOCTYPE html>
<?php
	session_start();
	session_destroy();
?>
<html lang="es">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.html">INICIO</a>
        </div>
    </nav>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary">SESION CERRADA</h3>
        <hr style="border-top:1px dotted #ccc;" />
        <h3>Se ha cerrado sesión</h3>
        <a href="../acc_intranet.html">Volver a acceder</a>
    </div>
</body>

</html>
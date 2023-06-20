<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/contacto.css" />
    <link rel="shortcut icon" href="img/Icono.ico" type="image/x-icon" />
    <script src="js/incluir_html.js"></script>
    <title>Autolavado</title>
</head>

<body>
    <header class="center">
        <div w3-include-html="menu.html" class="header_div">
            <div>
    </header>
    <main>
        <div class="contact_form">
            <div class="formulario">
                <h1>Formulario de contacto</h1>
                <h3>Escríbenos y en breve nos pondremos en contacto contigo</h3>
                <form action="submeter-formulario.php" method="post">
                    <p>
                        <label for="nombre" class="colocar_nombre">Nombre
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="text" name="introducir_nombre" id="nombre" required="obligatorio"
                            placeholder="Escribe tu nombre">
                    </p>
                    <p>
                        <label for="email" class="colocar_email">Email
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="email" name="introducir_email" id="email" required="obligatorio"
                            placeholder="Escribe tu Email">
                    </p>
                    <p>
                        <label for="telefone" class="colocar_telefono">Teléfono
                        </label>
                        <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
                    </p>
                    <p>
                        <label for="asunto" class="colocar_asunto">Asunto
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="text" name="introducir_asunto" id="assunto" required="obligatorio"
                            placeholder="Escribe un asunto">
                    </p>
                    <p>
                        <label for="mensaje" class="colocar_mensaje">Mensaje
                            <span class="obligatorio">*</span>
                        </label>
                        <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio"
                            placeholder="Deja aquí tu comentario..."></textarea>
                    </p>
                    <button type="submit" name="enviar_formulario" id="enviar">
                        <p>Enviar</p>
                    </button>
                    <p class="aviso">
                        <span class="obligatorio"> * </span>los campos son obligatorios.
                    </p>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="social-media">
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-tiktok"></i>
        </div>
    </footer>
</body>
<script>
includeHTML();
</script>
<script src="https://kit.fontawesome.com/0934ec206a.js" crossorigin="anonymous"></script>

</html>
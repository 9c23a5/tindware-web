<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/misc.css" type="text/css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TindWare</title>
</head>
<body>
    <?php
    # Cargar constantes
    require 'constantes.php';
    # Cargamos cookies
    require 'obtenerCookies.php';
    ?>
    <header>

    </header>

    <?php
    # Si el usuario no es invitado escondemos el form de login
    if ($type_user != 'invitado') {
         echo HIDE;
     }
    ?>
    <div id="form_registro">
    <form action="do_registro.php" method="POST">
        <!-- Formulario de inicio de sesión-->
        Nombre de usuario:<br/>
        <input type="text" name="username" required/><br/>
        Contraseña:<br/>
        <input type="password" name="passwd" required/><br/>
        Correo electrónico:<br/>
        <input type="email" name="email" required/><br/>
        Tipo de usuario:
        <select name="tipo">
            <option value="particular" selected>Particular</option>
            <option value="tecnico">Técnico</option>
            <option value="business">Business</option>
        </select>
        Fecha de Nacimiento:<br/>
        <input type="date" name="fechanac" required/><br/>
        <input type="submit" value="Registrarse"/><br/>
        <a href="index.php">Volver al inicio</a>
    </form>    
    </div>
    <?php
    # Si el usuario no es invitado escondemos el form de login
    if ($type_user != 'invitado') {
         echo HIDECLOSE;
     }
    ?>

    <?php
    # Si el usuario es invitado escondemos el mensaje de error
    if ($type_user == 'invitado') {
         echo HIDE;
     }
    ?>
    <div id="registro_error">
        Ya has iniciado sesión. <a href="index.php">Volver al inicio</a>
        <!-- Error cuando ya has iniciado sesión -->
    </div>
    <?php
    # Si el usuario es invitado escondemos el mensaje de error
    if ($type_user == 'invitado') {
         echo HIDECLOSE;
     }
    ?>

</body>
</html>

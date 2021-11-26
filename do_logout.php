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
    <header>

    </header>
    <?php
    require 'constantes.php';
    require 'obtenerCookies.php';
    ?>

    <?php
    # Si el usuario no ha iniciado sesión escondemos el div de success
    if ($type_user == 'invitado') {
         echo HIDE;
     }
    setcookie("id_user", 0, 0, "/");
    setcookie("type_user", "invitado", 0, "/");
    ?>
    <div id="logout_success">
        Has cerrado sesión correctamente. <a href="index.php">Volver al inicio</a>.
    </div>
    <?php
    # Si el usuario no ha introducido los datos correctos escondemos el div de success
    if ($type_user == 'invitado') {
         echo HIDECLOSE;
     }
    ?>

    <?php
    # Si el usuario ha cerrado sesión correctamente escondemos el div de error
    if ($type_user != 'invitado') {
         echo HIDE;
     }
    ?>
    <div id="logout_error">
        ¡Todavía no has iniciado sesión! <a href="login.php">Inicia sesión</a> o <a href="index.php">vuelve al inicio</a>.
        <!-- Error cuando ya has iniciado sesión -->
    </div>
    <?php
    # Si el usuario ha cerrado sesión correctamente escondemos el div de error
    if ($type_user != 'invitado') {
         echo HIDECLOSE;
     }
    ?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/misc.css" type="text/css"/>
    <title>TindWare - Cerrar Sesión</title>
</head>
<body>
    <?php
    include 'inc/constantes.php';
    include 'inc/obtenerCookies.php';
    setcookie("id_user", 0, 0, "/");
    setcookie("type_user", "invitado", 0, "/");
    include 'inc/header.php';
    ?>

    <?php
    # Si el usuario no ha iniciado sesión escondemos el div de success
    if ($type_user == 'invitado') {
         echo HIDE;
     }
    ?>
    <div id="dologout_success">
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
    <div id="dologout_error">
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

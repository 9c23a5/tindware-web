<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/misc.css" type="text/css"/>
    <title>TindWare - Iniciar Sesión</title>
</head>
<body>
    <?php
    # Cargar constantes
    include 'inc/constantes.php';
    # Cargamos cookies
    include 'inc/obtenerCookies.php';

    # Incluir header
    include 'inc/header.php';
    ?>

    <?php
    # Si el usuario no es invitado escondemos el form de login
    if ($type_user != 'invitado') {
         echo HIDE;
     }
    ?>
    <div id="form_login">
    <form action="do_login.php" method="POST">
        <!-- Formulario de inicio de sesión-->
        Nombre de usuario o email:<br/>
        <input type="text" name="login" required/><br/>
        Contraseña:<br/>
        <input type="password" name="passwd" required/><br/>
        <input type="submit" name="Iniciar Sesión"/><br/>
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
    <div id="login_error">
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

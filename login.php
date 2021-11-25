<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="misc.css" type="text/css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TindWare</title>
</head>
<body>
    <?php
    # Cargamos cookies
    require 'obtenerCookies.php';
    ?>
    <header>

    </header>

    <?php
    # Si el usuario no es invitado escondemos el form de login
    if ($type_user != 'invitado') {
         echo "<span class='hidden'>";
     }
    ?>
    <div id="form_login">
    <form action="do_login.php" method="POST">
        <!-- Formulario de inicio de sesión-->
        Nombre de usuario o email:<br/>
        <input type="text" name="login" required/><br/>
        Contraseña:<br/>
        <input type="password" name="passwd" required/><br/>
        <input type="submit" name="Iniciar Sesión"/>
    </form>    
    </div>
    <?php
    # Si el usuario no es invitado escondemos el form de login
    if ($type_user != 'invitado') {
         echo "</span>";
     }
    ?>

    <?php
    # Si el usuario es invitado escondemos el mensaje de error
    if ($type_user == 'invitado') {
         echo "<span class='hidden'>";
     }
    ?>
    <div id="login_error">
        Ya has iniciado sesión
        <!-- Error cuando ya has iniciado sesión -->
    </div>
    <?php
    # Si el usuario es invitado escondemos el mensaje de error
    if ($type_user == 'invitado') {
         echo "<span class='hidden'>";
     }
    ?>

</body>
</html>

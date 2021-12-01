<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/misc.css" type="text/css"/>
    <title>TindWare - Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="css/form.css">
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
    <h2 align="center">Inicio de sesión</h2>

        <center>
        <form action="do_login.php" method="POST">
        <!-- Formulario de inicio de sesión-->
            <table border="1">
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td>Nombre de usuario o email:</td>
                                <td><input type="text" name="login" required/></td>
                            </tr>
                            <tr>
                                <td>Contraseña:</td>
                                <td><input type="password" name="passwd" required/></td> 
                            </tr>
                            <tr> <td colspan="2" align="center" class="aviso">Rellena todos los campos</td></tr>
                            <tr><td colspan="2"><input type="submit" value="Iniciar Sesión" class="submit"/><br/></td></tr>
                            

                        </table>
                    </td>
                </tr>
            </table>
        </form>
        
        <a href="index.php" class="volver" align="center">Volver al inicio</a>
      </center>
        
       
    
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

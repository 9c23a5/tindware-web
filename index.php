<!DOCTYPE html>
<html lang="en">
<head>
    <title>TindWare - Inicio</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/footer2.css">
    
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
   
    <div id="main">

    <div id="txtizq">
        <h2>"Un nuevo soporte técnico nunca antes visto"</h2>
            <p>Nos dedicamos a implementar soluciones en tu dia a dia</p>
    </div>
       
        <div id="imgtit">
        <img src="img/tindware.png" alt="Los fundadores" width="480" height="400">
        </div>
        <div id="login">

        <form action="do_login.php" method="POST">
        <!-- Formulario de inicio de sesión-->
            <table>
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
                            
                            <tr>
                                <td colspan="2"><input type="submit" value="Iniciar Sesión" class="submit"/><br/></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><a href="registro.php" class="reg">Pincha aquí para registrarte</a></td>
                            </tr>
                            

                        </table>
                    </td>
                </tr>
            </table>
        </form>
        </div>
        </div>
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

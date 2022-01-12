<!DOCTYPE html>
<html lang="en">
<head>
    <title>TindWare - Inicio</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" href="css/form.css" type="text/css"/>

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
    <div class="main">
   
        
        <?php
        # Si el usuario no es invitado escondemos el form de login
        if ($type_user != 'invitado') {
            echo HIDE;
        }
        ?>
   
    <?php
    if ($type_user != 'invitado') {
         echo HIDECLOSE;
     }
    ?>
    <div id="int">
        <p>Somos una empresa dedicada a la conexión de personas del mundo de la informática y telecomunicaciones con particulares y empresas.</p>
        <p>Desde una avería puntual en el ordenador hasta el monataje y la configuración de servidores para una sustentar una tienda online.</p>
        <p>Lo más importante es el servicio técnico operativo las 24h del dia, los 365 dias del año.</p>
        <img src="img/prueba.png" alt="Los fundadores" width="500" height="500">
    </div>
    <div id="txtder">
        <form action="do_login.php" method="POST">
        <!-- Formulario de inicio de sesión-->
                        <table>
                            <tr><th colspan="2">Inicio de sesión</th></tr>
                            <tr>
                                <td>Nombre de usuario o email:</td>
                                <td><input type="text" name="login" required placeholder="Usuario" class="text"/></td>
                            </tr>
                            <tr>
                                <td>Contraseña:</td>
                                <td><input type="password" name="passwd" required placeholder="Contraseña" class="text"/></td> 
                            </tr>
                            
                            <tr>
                                <td colspan="2"><input type="submit" value="Iniciar Sesión" class="submit"/><br/></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><a href="registro.php" class="reg">Pincha aquí para registrarte</a></td>
                            </tr>
                        </table>
        </form>
    </div>
    <footer>
        <div id="cuadro1">
            <h3>TindWare</h3>
            <p>Dirección: Autonomia Kalea, 48012 Bilbao, Bizkaia</p>
            <p>Horario: Lunes a Viernes 08:00-14:00</p>
        </div>
        <div id="cuadro2">
            <h3>Navegación por la página</h3>
            <a href="index.php">Volver a la pagina principal</a><br/><br/>
            <a href="registro.php">Registrate</a><br/><br/>
            <a href="#">Todas nuestras ofertas de empleo</a><br/><br/>
            <a href="index.php">Iniciar sesión</a><br/><br/>
        </div>
        <div id="cuadro3">
            <h3>Nuestras redes sociales</h3>
            <a href="https://www.instagram.com/tindwareoficial/?hl=es"><img src="img/in.png" alt="Los fundadores" width="50" height="50" class="in"></a><br/>
            <a href="https://twitter.com/TindWare"><img src="img/tw.png" alt="Los fundadores" width="50" height="50" class="tw"></a><br/>
            <a href="#"><img src="img/fb.png" alt="Los fundadores" width="50" height="50" class="fb"><br/></a>
        </div>
    </footer>
    <div id="final">

        <a href="#">Pulsa aqui para subir</a>
        <p class="der">© 2021 Mikeldi - Todos los derechos reservados</p>        
    </div>
</body>
</html>




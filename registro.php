<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/misc.css" type="text/css"/>
    <script src="scripts/jquery-3.6.0.min.js"></script>
    <script src="scripts/loc.js"></script>
    <script src="scripts/registro.js"></script>
    <title>TindWare - Registro</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/registro.css" type="text/css"/>
    <link rel="stylesheet" href="css/footer.css" type="text/css"/>
    <link rel="stylesheet" href="css/form.css" type="text/css"/>
</head>
<body>
    <?php
    # Cargar constantes
    include 'inc/constantes.php';
    # Cargamos cookies
    include 'inc/obtenerCookies.php';
    include 'inc/header.php';
    ?>
    
    <?php
    # Si el usuario no es invitado escondemos el form de login
    if ($type_user != 'invitado') {
         echo HIDE;
     }
    ?>
    <div class="main">
    <div id="form_registro"><center>
    <form action="do_registro.php" method="POST">
                    
                        <table>
                            <tr><th colspan="3">Formulario de Registro</th></tr>
                            <tr>
                             <td>Nombre de usuario: </td>
                            <td><input type="text" name="username" required class="text" placeholder="Nombre de usuario"/></td>
                            </tr>
                            <tr>
                                <td>Contraseña: </td>
                                <td><input type="password" name="passwd" required class="text" placeholder="Contraseña"/></td>
                            </tr>
                            <tr>
                                <td>Correo electrónico:</td>
                                <td><input type="email" name="email" required class="text" placeholder="Correo electrónico"/></td>
                            </tr>
                            <tr>
                                <td>Tipo de usuario:</td>
                                <td><select name="tipo" class="text">
                                <option value="particular" selected>Particular</option>
                                <option value="tecnico">Técnico</option>
                                <!-- <option value="business">Business</option> -->
                                </select></td>
                                </tr>
                            <tr>
                                <td>Fecha de nacimiento:</td>
                                <td><input type="date" name="fechanac" required class="text"/><br/></td>
                               
                            </tr>
                            <tr>
                                <td>Ubicación</td>
                                <td>
                                    
                                        <input type="text" id="geocoding_input" placeholder="Escriba su dirección..."/> <button type="button" onclick="coordenadasDesdeGeocoding();">Buscar coordenadas</button><br/>
                                        Latitud: <input type="text" size="5" onkeydown="return false;" style="pointer-events: none;" id="lat" name="lat" required value=""/> Longitud: <input type="text" size="5" onkeydown="return false;" style="pointer-events: none;" name="lon" id="lon" required value=""/>
                                
                                </td>
                            </tr>
                            <tr> <td colspan="2" align="center" class="aviso">Rellena todos los campos</td></tr>
                            
                             <tr>
                                <td colspan="2"><input type="submit" value="Registrarse" class="submit"/><br/></td>  
                            </tr>
                        
                    
                
                </table>
        <!-- Formulario de inicio de sesión-->
    </form>
    <a href="index.php" class="volver">Volver al inicio</a>
    </center> 
    </div>
    </div>
    <footer>
        <div id="cuadro1">
            <h3>TindWare</h3>
            <p>Dirección: Autonomia Kalea, 48012 Bilbao, Bizkaia</p>
            <p>Horario: Lunes a Viernes 08:00-14:00</p>
        </div>
        <div id="cuadro2">
            <h3>Servicios</h3>
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

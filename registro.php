<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/misc.css" type="text/css"/>
    <script src="scripts/jquery-3.6.0.min.js"></script>
    <script src="scripts/loc.js"></script>
    <script src="scripts/registro.js"></script>
    <title>TindWare - Registro</title>
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
    <div id="form_registro"><center>
        <h2>Formulario de Inscripción</h2>
    <form action="do_registro.php" method="POST">

                
                <table border="1">

                <tr>
                    <td>
                        <table>
                            <tr>
                             <td>Nombre de usuario </td>
                            <td><input type="text" name="username" required class="text"/></td>
                            </tr>
                            <tr>
                                <td>Contraseña </td>
                                <td><input type="password" name="passwd" required class="text"/></td>
                            </tr>
                            <tr>
                                <td>Correo electrónico</td>
                                <td><input type="email" name="email" required class="text"/></td>
                            </tr>
                            <tr>
                                <td>Tipo de usuario</td>
                                <td><select name="tipo" class="text">
                                <option value="particular" selected>Particular</option>
                                <option value="tecnico">Técnico</option>
                                <option value="business">Business</option>
                                </select></td>
                                </tr>
                            <tr>
                                <td>Fecha de nacimiento</td>
                                <td><input type="date" name="fechanac" required class="text"/><br/></td>
                               
                            </tr>
                            <tr>
                                <td>Ubicación</td>
                                <td>
                                    <center>
                                        <input type="text" id="geocoding_input" placeholder="Escriba su dirección..."/> <button type="button" onclick="coordenadasDesdeGeocoding();">Buscar coordenadas</button><br/>
                                        u <button type="button" onclick="posicionAForm();">Obtener ubicación</button><br/>
                                        Latitud: <input type="text" size="2" onkeydown="return false;" style="pointer-events: none;" id="lat" name="lat" required value=""/> Longitud: <input type="text" size="2" onkeydown="return false;" style="pointer-events: none;" name="lon" id="lon" required value=""/>
                                    </center>
                                </td>
                            </tr>
                            <tr> <td colspan="2" align="center" class="aviso">Rellena todos los campos</td></tr>
                            
                             <tr>
                                <td colspan="2"><input type="submit" value="Registrarse" class="submit"/><br/></td>  
                            </tr>
                        </table>
                    </td>
                </tr>
                </table>
     
        
        <!-- Formulario de inicio de sesión-->
     
    </form>
    <a href="index.php" class="volver">Volver al inicio</a>
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

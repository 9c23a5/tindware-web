  <?php
   include '../inc/constantes.php';
   define('EDADMINIMA', 18); # Edad minima del usuario en un registro
   # Recogemos datos del POST
   @$username = $_POST['username'];
   @$passwd = $_POST['passwd'];
   @$email = $_POST['email'];
   @$tipo = $_POST['tipo'];
   @$fechaNac = $_POST['fechanac'];
   @$lon= $_POST['lon'];
   @$lat= $_POST['lat'];

   $registroCorrecto = false;
   # Funcion para marcar como error mas sencillamente
   function errorReg($mensaje) {
       $GLOBALS['registroError'] = false;
       $GLOBALS['mensajeError'] = $mensaje;
   }
   
   # debug
   #echo "Username $username<br/>Passwd: $passwd<br/>Email: $email<br/>Tipo: $tipo<br/>Fecha nac: $fechaNac<br/>";

   # Comprobamos que los campos existen
   if (@!empty($username) AND @!empty($passwd) AND @!empty($email) AND @!empty($tipo) AND @!empty($fechaNac)) {
       # Comprobamos que el correo es de un formato válido
       if (@filter_var($email, FILTER_VALIDATE_EMAIL)) {
           # Comprobamos que la fecha este en un formáto válido
           $fechaNacArray = @explode("-", $fechaNac);
           @$annoNac = $fechaNacArray[0];
           @$mesNac = $fechaNacArray[1];
           @$diaNac = $fechaNacArray[2];
           if (@checkdate($mesNac, $diaNac, $annoNac)) {
               # Comprobamos que el usuario es mayor que N annos (ejemplo, 18)
               # Creamos las fechas a comparar
               $dateRegistro = date_create($fechaNac);
               $dateHoy = date_create();

               # Comparamos y sacamos los años de fierencia
               $diferencia = date_diff($dateRegistro, $dateHoy);
               $annosRegistro = (int)$diferencia->format('%Y');

               if ($annosRegistro >= EDADMINIMA) {
                   # Comprobamos si el usuario existe en la base de datos
                   # Conexion a la base de datos y query
                   $con = mysqli_connect('localhost', 'root', MYSQL_PASSWD);
                   $query = "SELECT * FROM tindware.usuario WHERE username = '$username' OR email = '$email' LIMIT 1;";
                   $out = mysqli_query($con, $query);
                   if (mysqli_num_rows($out) == 0) {
                       # El usuario no existe
                       # Insertamos el usuario
                       $fechaHoy = $dateHoy->format('Y-m-d');
                       $query = "INSERT INTO tindware.usuario (tipo, username, passwd, email, fechanac, signupdate,lat,lon) VALUES ('$tipo', '$username', '$passwd', '$email', '$fechaNac', '$fechaHoy','$lat','$lon');";
                       $out = mysqli_query($con, $query);

                       # Comprobar si ahora si hay un resultado
                       $query = "SELECT * FROM tindware.usuario WHERE username = '$username' OR email = '$email' LIMIT 1;";
                       $out = mysqli_query($con, $query);
                       if (mysqli_num_rows($out) == 1) {
                           $registroCorrecto = true;
                           # Iniciamos sesión con el usuario
                           $id = mysqli_fetch_array($out)['id'];
                           setcookie('id_user', (int)$id, 0, "/");
                           $id_user = $id;
                           setcookie('type_user', $tipo, 0, "/");
                           $type_user = $tipo;
                       }
                       else {
                           errorReg('Error en el registro. Contácte con el administrador de la página');
                       }
                   }
                   else {
                       errorReg('El usuario ya existe o el correo ya esta siendo utilizada con otra cuenta. Si no se acuerda de sus datos contacte con el adminstrador de la página');
                   }
                   mysqli_close($con);
               }
               else {
                   errorReg('Debes ser mayor de '.strval(EDADMINIMA).' años para registrarte');
               }
           }
           else {
               errorReg("Formato de fecha de nacimiento no válido");
           }
       }
       else {
           errorReg("Formato de correo electrónico no válido");
       }
   }
   else {
       errorReg("Algunos de los campos está vacío");
   }
   echo eval($registroCorrecto);
   ?>

   <?php
   # Si el registro ha fallado escondemos el div de success
   if (!$registroCorrecto) {
        echo HIDE;
    }
   ?>
   <div id="doregistro_success">
       <center class="bienvenido">Registro añadido correctamente</center>
   </div>
   <?php
   # Si el registro ha fallado escondemos el div de success
   if (!$registroCorrecto) {
        echo HIDECLOSE;
    }
   ?>

   <?php
   # Si el registro es correcto escondemos el div de error
   if ($registroCorrecto) {
        echo HIDE;
    }
   ?>
   <div id="doregistro_error">
       Error al añadir el registro: <?php echo @$mensajeError ?>
   </div>
   <?php
   # Si el registro es correcto escondemos el div de error
   if ($registroCorrecto) {
        echo HIDECLOSE;
    }
   ?>
<?php





?>

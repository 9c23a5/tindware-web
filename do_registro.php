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
    define('EDADMINIMA', 18); # Edad minima del usuario en un registro
    require 'obtenerDatosUser.php';
    # Recogemos datos del POST
    @$username = $_POST['username'];
    @$passwd = $_POST['passwd'];
    @$email = $_POST['email'];
    @$tipo = $_POST['tipo'];
    @$fechaNac = $_POST['fechanac'];

    # Funcion para marcar como error mas sencillamente
    function errorReg($mensaje) {
        $GLOBALS['registroError'] = false;
        $GLOBALS['mensajeError'] = $mensaje;
    }

    # Comprobamos que los campos existen
    if (@isset($username) AND @isset($passwd) AND @isset($email) AND @isset($tipo) AND @isset($fechaNac)) {
        # Comprobamos que el correo es de un formato válido
        if (@filter_var($email, FILTER_VALIDATE_EMAIL)) {
            # Comprobamos que la fecha este en un formáto válido
            $fechaNacArray = @explode("-", $fechaNac);
            @$annoNac = $fechaNacArray[0];
            @$mesNac = $fechaNacArray[1];
            @$diaNac = $fechaNacArray[2];
            if (@var_dump(@checkdate($mesNac, $diaNac, $annoNac))) {
                # Comprobamos que el usuario es mayor que N annos (ejemplo, 18)
            }
            else {

            }
        }
        else {
            errorReg("Formáto de correo electrónico no válido");
        }
    }
    else {
        errorReg("Algunos de los campos está vacío");
    }
    ?>

    <?php
    # Si el registro ha fallado escondemos el div de success
    if (!$registroCorrecto) {
         echo HIDE;
     }
    ?>
    <div id="doregistro_success">
        Bienvenido, <?php echo $datosUser['username'] ?>. <a href="index.php">Volver al inicio</a>
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
        Error: <?php echo @$mensajeError ?>. <a href="login.php">Vuelve a intentarlo</a> o <a href="index.php">vuelve al inicio</a>
    </div>
    <?php
    # Si el registro es correcto escondemos el div de error
    if ($registroCorrecto) {
         echo HIDECLOSE;
     }
    ?>

</body>
</html>

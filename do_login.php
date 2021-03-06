<!DOCTYPE html>
<html lang="en">
<head>
    <title>TindWare - Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="css/do_login.css">
</head>
<body>
    <?php
    include 'inc/constantes.php';
    @include "inc/obtenerDatosUser.php";
    # Recogemos datos del POST
    @$login = $_POST['login'];
    @$passwd = $_POST['passwd'];
    $con = mysqli_connect('localhost', 'root', MYSQL_PASSWD);
    if (str_contains($login, '@')) {
        # Ha iniciado sesión utilizando un correo
        $query = "SELECT id, username FROM tindware.usuario WHERE email = '$login' AND passwd = '$passwd' LIMIT 1";
    }
    else {
        # Ha iniciado sesión utilizando un username
        $query = "SELECT id, username FROM tindware.usuario WHERE username = '$login' AND passwd = '$passwd' LIMIT 1";
    }
    
    $out = mysqli_query($con, $query);
    if (mysqli_num_rows($out) == 1) {
        #echo "Datos correctos"; # DEBUG
        $loginCorrecto = true;
        $resultado = mysqli_fetch_array($out);

        # Y obtenemos los datos del usuario mediante su id
        $id = $resultado['id'];
        $username = $resultado['username'];
        $datosUser = obtenerDatosUser($id);

        # Setteamos las cookies
        setcookie('id_user', $id, 0, '/');
        setcookie('type_user', $datosUser['tipo'], 0, '/');
        $query = "UPDATE tindware.usuario SET lastlogin = current_timestamp() WHERE id = $id;";
        mysqli_query($con, $query);
    }
    else {
        $loginCorrecto = false;
        echo "<a href='index.php'>Datos incorrectos, pincha aquí para rellenar   los datos de inicio de sesión correctamente</a>"; # DEBUG
    }
    ?>

    <?php
    # Si el usuario no ha introducido los datos correctos escondemos el div de success
    if (!$loginCorrecto) {
         echo HIDE;
     }
    # Incluir header
    include 'inc/header.php';
    ?>
    <div id="main">
        <?php
        # Si el usuario no ha introducido los datos correctos escondemos el div de success
        if (!$loginCorrecto) {
            echo HIDE;
        }
        ?>
        <div id="dologin_success">

        <p class="bienvenido">Bienvenido de nuevo, <?php echo $username ?>. 
        <p><a href="index.php" class="volver">Volver al inicio</a></p>
        </div>
        <?php
        # Si el usuario no ha introducido los datos correctos escondemos el div de success
        if (!$loginCorrecto) {
            echo HIDECLOSE;
        }
        ?>

        <?php
        # Si el inicio de sesión es correcto escondemos el div de error
        if ($loginCorrecto) {
            echo HIDE;
        }
        ?>
        <div id="dologin_error">
            <center class="bienvenido">El usuaio o la contraseña son inválidos. <a href="login.php" class="volver">Vuelve a intentarlo</a> o <a href="index.php" class="volver">vuelve al inicio</a></center>
            <!-- Error cuando ya has iniciado sesión -->
        </div>
        <?php
        # Si el inicio de sesión es correcto escondemos el div de error
        if ($loginCorrecto) {
            echo HIDECLOSE;
        }
        mysqli_close($con);
        ?>
    </div>
</body>
</html>

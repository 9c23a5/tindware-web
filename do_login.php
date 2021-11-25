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
    <header>

    </header>
    <?php
    require 'obtenerDatosUser.php';
    # Recogemos datos del POST
    $login = $_POST['login'];
    $passwd = $_POST['passwd'];
    $con = mysqli_connect('localhost', 'root');
    if (str_contains($login, '@')) {
        # Ha iniciado sesión utilizando un correo
        $query = "SELECT id FROM tindware.usuario WHERE email = '$login' AND passwd = '$passwd' LIMIT 1";
    }
    else {
        # Ha iniciado sesión utilizando un username
        $query = "SELECT id FROM tindware.usuario WHERE username = '$login' AND passwd = '$passwd' LIMIT 1";
    }
    
    $out = mysqli_query($con, $query);
    if (mysqli_num_rows($out) == 1) {
        echo "Datos correctos";
        $loginCorrecto = true;
        $resultado = mysqli_fetch_array($out);

        # Y obtenemos los datos del usuario mediante su id
        $id = $resultado['id'];
        $datosUser = obtenerDatosUser($id);

        # Setteamos las cookies
        setcookie('id_user', $id, 0, '/');
        setcookie('type_user', $datosUser['tipo'], 0, '/');
    }
    else {
        $loginCorrecto = false;
        echo "Datos incorrectos";
    }
    ?>

    <?php
    # Si el usuario no ha introducido los datos correctos escondemos el div de success
    if (!$loginCorrecto) {
         echo "<span class='hidden'>";
     }
    ?>
    <div id="login_success">
        Bienvenido, <?php echo $datosUser['username'] ?> 
    </div>
    <?php
    # Si el usuario no ha introducido los datos correctos escondemos el div de success
    if (!$loginCorrecto) {
         echo "</span>";
     }
    ?>

    <?php
    # Si el inicio de sesión es correcto escondemos el div de error
    if ($loginCorrecto) {
         echo "<span class='hidden'>";
     }
    ?>
    <div id="login_error">
        El usuaio o la contraseña son inválidos
        <!-- Error cuando ya has iniciado sesión -->
    </div>
    <?php
    # Si el inicio de sesión es correcto escondemos el div de error
    if ($loginCorrecto) {
         echo "<span class='hidden'>";
     }
    ?>

</body>
</html>
<?php
@include "constantes.php";
@include "obtenerCookies.php";
@include "obtenerDatosUser.php";

$datosUser = obtenerDatosUser($id_user);
?>
<head>
    <link rel="stylesheet" href="css/misc.css" type="text/css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<header>
    <div id="logo">
        <!-- Un img con el logo de TindWare y un canvas con el nombre -->
        <a href="index.php"><img src="img/logo.png"></a>
    </div>

    <div id="menu">
        <!-- Un menu con las diferentes opciones (mapa tecnicos, ultimas ofertas, faq, etc...) -->
        <ul>
            <li>Mapa tecnicos</li>
            <li>Ultima ofertas</li>
            <li>FAQ</li>
            <li>Panel administrativo</li><!--Admin-->
            <li></li>
        </ul>
        
        <!-- Hay otros menus, por ejemplo 'Panel administracion', que dependen segun el valor de la cookie de inicio de sesion -->
    </div>

    <?php
    # Si el usuario ha iniciado sesión escondemos este menu
    if ($id_user != 0) {
        echo HIDE;
    }
    ?>
    <div id="login_registro">
        <!-- Enlaces para Iniciar Sesión y Registro -->
        <a href="login.php">Iniciar Sesión</a>
        <a href="registro.php">Registro</a>
    </div>
    <?php
    # Si el usuario ha iniciado sesión escondemos este menu
    if ($id_user != 0) {
        echo HIDECLOSE;
    }
    ?>

    <?php
    # Si el usuario NO ha iniciado sesión escondemos este menu
    if ($id_user == 0) {
        echo HIDE;
    }
    ?>
    <div id="cerrar_sesion">
        Hola, <?php echo @$datosUser['username'] ?>. <a href="do_logout.php">Cerrar Sesión</a>
    </div>
    <?php
    # Si el usuario NO ha iniciado sesión escondemos este menu
    if ($id_user == 0) {
        echo HIDECLOSE;
    }
    ?>
</header>

<?php
if (str_starts_with($_SERVER['REQUEST_URI'], '/admin')) {
    @include "../constantes.php";
    @include "../obtenerCookies.php";
    @include "../obtenerDatosUser.php";
}
else {
    @include "constantes.php";
    @include "obtenerCookies.php";
    if (@!function_exists('obtenerDatosUser')) {
        @include "obtenerDatosUser.php";
    }
    @include "FAQ.php";
}

$datosUser = obtenerDatosUser($id_user);
?>
<head>
    <!-- Fuentes Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500&display=swap" rel="stylesheet"> 
    <!-- CSS local -->
    <link rel="stylesheet" href="../css/misc.css" type="text/css"/>
    <link rel="stylesheet" href="../css/menu.css" type="text/css"/>
    <link rel="stylesheet" href="../css/main.css" type="text/css"/>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Chat Tawk -->
    <script type="text/javascript" src="../scripts/chat.js"></script>
</head>
<header>
    <div id="logo">
        <!-- Un img con el logo de TindWare y un canvas con el nombre -->
        <a href="index.php">
            <img src="img/logo.png">
            <canvas id="miCanvas" height="101" width="365">Error al mostrar el canvas</canvas>
        </a>
    </div>
    <div id="botones">
        <!-- Un menu con las diferentes opciones (mapa tecnicos, ultimas ofertas, faq, etc...) -->
        <div id="links">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <?php
                    # Si el usuario no es ni part ni tec quitamos esta entrada
                    if ($type_user != 'tecnico' AND $type_user != 'particular') {
                        echo HIDE;
                    }
                ?>
                <li><a href="mapatecnicos.php">Mapa técnicos</a></li> <!--- Para particulares y tecnicos -->
                <?php
                    if ($type_user != 'tecnico' AND $type_user != 'particular') {
                        echo HIDECLOSE;
                    }

                    # Si el usuario no es un particular quitamos el menu de Mis ofertas
                    if ($type_user != 'particular') {
                        echo HIDE;
                    }
                ?>
                <li><a href="ofertas_part.php">Mis ofertas</a></li> <!-- Para particulares -->
                <?php
                    if ($type_user != 'particular') {
                        echo HIDECLOSE;
                    }

                    # Si el usuario no es un tecicno quitamos el menu de Ultimas ofertas
                    if ($type_user != 'tecnico') {
                        echo HIDE;
                    }
                ?>
                <li><a href="ofertas_tec.php">Últimas ofertas</a></li> <!-- Para tecnicos -->
                <?php
                    if ($type_user != 'tecnico') {
                        echo HIDECLOSE;
                    }
                ?>
                <li><a href="https://tindware.tawk.help/">FAQ</a></li>
                <li><a href="oficios.php">Trabaja con nosotros</a></li>
                <li><a href="quienessomos.php">Quienes somos</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <?php
                if ($type_user != 'admin') {
                    echo HIDE;
                }
                ?>
                <li><a href="/admin/">Panel administrativo</a><!--Admin--></li>
                <?php
                if ($type_user != 'admin') {
                    echo HIDECLOSE;
                }
                ?>
            </ul>
        <!-- Hay otros menus, por ejemplo 'Panel administracion', que dependen segun el valor de la cookie de inicio de sesion -->
        </div>
        <div id="login_reg_logout">
            <?php
            # Si el usuario ha iniciado sesión escondemos este menu
            if ($id_user != 0) {
                echo HIDE;
            }
            ?>
                <!-- Enlaces para Iniciar Sesión y Registro -->
                <a href="index.php">Iniciar Sesión</a>
                <span class="separador">&nbsp;</span>
                <a href="registro.php">Registro</a>
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
                Hola, <?php echo @$datosUser['username'] ?>. <a href="do_logout.php">Cerrar Sesión</a>
            <?php
            # Si el usuario NO ha iniciado sesión escondemos este menu
            if ($id_user == 0) {
                echo HIDECLOSE;
            }
            ?>
        </div>
    </div>
</header>
<script>
    var canvas = document.getElementById("miCanvas");
    var ctx = canvas.getContext("2d");
    // ctx.font = "200px Press Start 2P";
    ctx.font = "30px FreeLine";
    ctx.font = "42px FreeLine";
    ctx.fillStyle = "#63c5d6";
    ctx.shadowColor = 'white';
    ctx.shadowOffsetX = 0;
    ctx.shadowOffsetY = 0;
    ctx.shadowBlur = 14;
    ctx.fillText("TindWare", 10, 75);
    
</script> 

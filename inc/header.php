<?php
@include "constantes.php";
@include "obtenerCookies.php";
@include "obtenerDatosUser.php";

$datosUser = obtenerDatosUser($id_user);
?>
<head>
    <!-- Fuentes Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&display=swap" rel="stylesheet"> 
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
    <div style="font-family: PressStart2P;" onload="hacerCanvas();">.</div>
    <div id="logo">
        <!-- Un img con el logo de TindWare y un canvas con el nombre -->
        <a href="index.php">
            <img src="img/logo.png">
            <canvas id="miCanvas" height="101" width="355">Error al mostrar el canvas</canvas>
        </a>
    </div>
    <div id="botones">
        <!-- Un menu con las diferentes opciones (mapa tecnicos, ultimas ofertas, faq, etc...) -->
        <div id="links">
            <ul>
                <li><a href="#">Mapa técnicos</a></li>
                <li><a href="#">Ultima ofertas</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a><a href="/admin/">Panel administrativo</a></a><!--Admin--></li>
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
                <a href="login.php">Iniciar Sesión</a>
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
    const myFont = new FontFace('PressStart2P', 'url(../inc/PressStart2P.ttf)');
    myFont.load().then((font) => {
        document.fonts.add(font);
        console.log('Font loaded');

        var canvas = document.getElementById("miCanvas");
        var ctx = canvas.getContext("2d");
        // ctx.font = "200px Press Start 2P";
        // ctx.font = "30px PressStart2P";
        ctx.font = "42px PressStart2P";
        ctx.fillStyle = "#17d314";
        ctx.shadowColor = 'white';
        ctx.shadowOffsetX = 0;
        ctx.shadowOffsetY = 0;
        ctx.shadowBlur = 14;
        ctx.fillText("T", 10, 75);
        ctx.fillText("ind", 41, 75);
        ctx.fillText("Ware", 171, 75);
    });
</script> 

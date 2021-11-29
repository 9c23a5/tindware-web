<header>
    <div id="logo">
        <!-- Un img con el logo de TindWare y un canvas con el nombre -->
        <img src="img/logo.png">
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
        Hola, <?php echo @$datosUsuario['username'] ?>. <a href="do_logout.php">Cerrar Sesión</a>
    </div>
    <?php
    # Si el usuario NO ha iniciado sesión escondemos este menu
    if ($id_user == 0) {
        echo HIDECLOSE;
    }
    ?>
</header>
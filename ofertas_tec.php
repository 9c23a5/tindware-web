<!DOCTYPE html>
<html lang="en">
<head>
    <script src="scripts/jquery-3.6.0.min.js"></script>
    <script src="scripts/ofertas_tec.js"></script>
    <link rel="stylesheet" href="css/misc.css" type="text/css"/>
    <link rel="stylesheet" href="css/ofertas.css" type="text/css"/>
    <title>TindWare - Últimas ofertas</title>
</head>
<body>
    <?php
    # Cargar constantes
    include 'inc/constantes.php';
    # Cargamos cookies
    include 'inc/obtenerCookies.php';
    # Header
    include 'inc/header.php';
    if ($type_user == 'tecnico' or $type_user == 'admin') {
        $permitido = true;
    }
    else {
        $permitido = false;
    }
    ?>

    <?php
    if (!$permitido) {
        echo HIDE;
    }?>
    <div id="main">
        <?php
        function outVacio($out) {
            if (mysqli_num_rows($out) == 0) {
                return true;
            }
            else {
                return false;
            }
        }

        if ($permitido) {
            $con = mysqli_connect('localhost', 'root');
            
            $queryOfertasPendientes = "SELECT * FROM tindware.ofertas WHERE id_usuariotec = $id_user AND fechafinalizacion IS NULL;";
            $queryOfertasDisponibles = "SELECT * FROM tindware.ofertas WHERE id_usuariotec IS NULL;";
            $queryOfertasTerminadas = "SELECT * FROM tindware.ofertas WHERE id_usuariotec = $id_user AND fechafinalizacion IS NOT NULL;";

            $outPendientes = mysqli_query($con, $queryOfertasPendientes);
            $outDisponibles = mysqli_query($con, $queryOfertasDisponibles);
            $outTerminadas = mysqli_query($con, $queryOfertasTerminadas);

            mysqli_close($con);

            $pendientesVacio = outVacio($outPendientes);
            $disponiblesVacio = outVacio($outDisponibles);
            $terminadasVacio = outVacio($outTerminadas);


        }?>
        <div id="menuBotones">
            <h1>Seleccione filtro</h1>
            <table>
                <tr><td><a class="botonOfertas" id="botonPendientes" href="#" onclick="showPendientes();">Ofertas Pendientes</a></td></tr>
                <tr><td><a class="botonOfertas" id="botonDisponibles" href="#" onclick="showDisponibles();">Ofertas Disponibles</a></td></tr>
                <tr><td><a class="botonOfertas" id="botonTerminadas" href="#" onclick="showTerminadas();">Ofertas Terminadas</a></td></tr>
            </table>
        </div>
        <div id="ofertas">
            Soy div ofertas
            <div id="ofertasPendientes">
                <?php
                if ($pendientesVacio) {
                    echo HIDE;
                }?>
                LAS OFERTAS PENDIENTES SON etc etc
                <?php
                if ($pendientesVacio) {
                    echo HIDECLOSE;
                }?>
                <?php
                if (!$pendientesVacio) {
                    echo HIDE;
                }?>
                no tienes ninguna oferta todavia
                <?php
                if (!$pendientesVacio) {
                    echo HIDECLOSE;
                }?>
            </div>

            <div id="ofertasDisponibles">
                <?php
                if ($disponiblesVacio) {
                    echo HIDE;
                }?>
                ofertas disponibles
                <?php
                if ($disponiblesVacio) {
                    echo HIDECLOSE;
                }?>
                <?php
                if (!$disponiblesVacio) {
                    echo HIDE;
                }?>
                no se ha encontrado ninguna oferta
                <?php
                if (!$disponiblesVacio) {
                    echo HIDECLOSE;
                }?>
            </div>

            <div id="ofertasTerminadas">
                <?php
                if ($terminadasVacio) {
                    echo HIDE;
                }?>
                tienes x terminadas
                <?php
                if ($terminadasVacio) {
                    echo HIDECLOSE;
                }?>
                <?php
                if (!$terminadasVacio) {
                    echo HIDE;
                }?>
                no has terminado nada
                <?php
                if (!$terminadasVacio) {
                    echo HIDECLOSE;
                }?>
            </div>
        </div>
    <?php
    if (!$permitido) {
        echo HIDECLOSE;
    }
    if ($permitido) {
        echo HIDE;
    }?>
        <span class="nopermitido">Acceso denegado: debe iniciar sesión</span>
    </div>
    <?php
    if ($permitido) {
        echo HIDECLOSE;
    }?>
</body>
</html>
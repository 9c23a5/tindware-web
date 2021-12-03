<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/misc.css" type="text/css"/>
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
    if ($type_user == 'tecnico') {
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
            
            $queryOfertasPendientes = "SELECT * FROM tindware.ofertas WHERE id_usertec = $id_user AND fechafinalizacion IS NULL;";
            $queryOfertasDisponibles = "SELECT * FROM tindware.ofertas WHERE id_usertec IS NULL;";
            $queryOfertasTerminadas = "SELECT * FROM tindware.ofertas WHERE id_usertec = $id_user AND fechafinalizacion IS NOT NULL;";

            $outPendientes = mysqli_query($con, $queryOfertasPendientes);
            $outDisponibles = mysqli_query($con, $queryOfertasDisponibles);
            $outTerminadas = mysqli_query($con, $queryOfertasTerminadas);

            mysqli_close($con);

            $pendientesVacio = outVacio($outPendientes);
            $disponiblesVacio = outVacio($outDisponibles);
            $terminadasVacio = outVacio($outTerminadas);


        }?>
        <div id="menuBotones">
            <a id="botonPendientes" href="#" onclick="showPendientes();">Ofertas Pendientes</a>
            <a id="botonDisponibles" href="#" onclick="showDisponibles();">Ofertas Disponibles</a>
            <a id="botonTerminadas" href="#" onclick="showTerminadas();">Ofertas Terminadas</a>
        </div>
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
    }?>
</body>
</html>
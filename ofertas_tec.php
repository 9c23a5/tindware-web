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
            $con = mysqli_connect('localhost', 'root', MYSQL_PASSWD);
            
            $queryOfertasPendientes = "SELECT * FROM tindware.ofertas WHERE id_usuariotec = $id_user AND fechafinalizacion IS NULL;";
            $queryOfertasDisponibles = "SELECT * FROM tindware.ofertas WHERE id_usuariotec IS NULL;";
            $queryOfertasTerminadas = "SELECT * FROM tindware.ofertas WHERE id_usuariotec = $id_user AND fechafinalizacion IS NOT NULL;";

            $outPendientes = mysqli_query($con, $queryOfertasPendientes);
            $outDisponibles = mysqli_query($con, $queryOfertasDisponibles);
            $outTerminadas = mysqli_query($con, $queryOfertasTerminadas);

            $pendientesVacio = outVacio($outPendientes);
            $disponiblesVacio = outVacio($outDisponibles);
            $terminadasVacio = outVacio($outTerminadas);

            function mostrarOfertas($out, $con, $clickable, $tipo) {
                while ($resultadoOfertas = mysqli_fetch_array($out)) {
                    $id_usuariopart = $resultadoOfertas['id_usuariopart'];
                    $queryUbi = "SELECT lat, lon FROM tindware.usuario WHERE id = $id_usuariopart;";
                    $outTemp = mysqli_query($con, $queryUbi);
                    $resultadoTemp = mysqli_fetch_array($outTemp);
                    $lat = $resultadoTemp['lat'];
                    $lon = $resultadoTemp['lon'];
        
                    $id_oferta = $resultadoOfertas['id'];
                    $titulo = $resultadoOfertas['titulo'];
                    $descripcion = $resultadoOfertas['descripcion'];
                    if ($tipo == 'disponible') {
                        $miOnclick = "location.href='do_asignar_terminar.php?id=$id_oferta&accion=asignar';";
                    }
                    else {
                        $miOnclick = "location.href='do_asignar_terminar.php?id=$id_oferta&accion=terminar';";
                    }
                    echo "<div class='oferta'>";
                    echo "<span class='tituloOferta'>$titulo</span><br/>";
                    echo "$descripcion<br/>";
                    #echo "<form method='post' action='do_asignar_terminar.php'><input type='submit' value='";
                    echo "<input type='button' onclick=$miOnclick";
                    #if (!$clickable) {echo " disbaled";}
                    #if (!$clickable) {echo "style='pointer-events: none;cursor: default;'";}
                    if ($tipo == 'disponible') {
                        echo " value='Asignar'";
                    }
                    else {
                        echo " value='Terminar'";
                    }
                    if (!$clickable) { echo " disabled"; }
                    echo "></input>";
                    echo "<span class='ubicacion'><img src='img/place.png'/> $lat, $lon</span>";
                    echo "</div>";
                }
            }


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
            <div class="ensenarOferta" id="ofertasPendientes">
                <?php
                if ($pendientesVacio) {
                    echo HIDE;
                }

                mostrarOfertas($outPendientes, $con, true, "pendiente");

                if ($pendientesVacio) {
                    echo HIDECLOSE;
                }

                if (!$pendientesVacio) {
                    echo HIDE;
                }?>
                no tienes ninguna oferta todavia
                <?php
                if (!$pendientesVacio) {
                    echo HIDECLOSE;
                }?>
            </div>

            <div class="ensenarOferta" id="ofertasDisponibles">
                <?php
                if ($disponiblesVacio) {
                    echo HIDE;
                }

                mostrarOfertas($outDisponibles, $con, true, "disponible");

                if ($disponiblesVacio) {
                    echo HIDECLOSE;
                }
                
                if (!$disponiblesVacio) {
                    echo HIDE;
                }?>
                no se ha encontrado ninguna oferta
                <?php
                if (!$disponiblesVacio) {
                    echo HIDECLOSE;
                }?>
            </div>

            <div class="ensenarOferta" id="ofertasTerminadas">
                <?php
                if ($terminadasVacio) {
                    echo HIDE;
                }
                
                mostrarOfertas($outTerminadas, $con, false, "");

                if ($terminadasVacio) {
                    echo HIDECLOSE;
                }

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
    }
    mysqli_close($con);
    ?>
</body>
</html>
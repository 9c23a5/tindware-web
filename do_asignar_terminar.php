<?php
    # Cargar constantes
    include 'inc/constantes.php';
    # Cargamos cookies
    include 'inc/obtenerCookies.php';
    # Header
    include 'inc/header.php';

    $accion = $_GET['accion'];
    $oferta_id = $_GET['id'];
    $con =mysqli_connect('localhost', 'root');

    if ($accion == 'asignar') {
        # Vamos a asignar la oferta al usuario logeado
        $query = "UPDATE tindware.ofertas SET fechaasignado = CURRENT_TIMESTAMP() WHERE id = $oferta_id;";
        mysqli_query($con, $query);
        $query = "UPDATE tindware.ofertas SET id_usuariotec = $id_user WHERE id = $oferta_id;";
        mysqli_query($con, $query);
        echo "<a href='ofertas_tec.php'>Oferta asignada con éxito</a>";
    }
    else { 
        # Vamos a dar por finalizada la oferta
        $query = "UPDATE tindware.ofertas SET fechafinalizacion = CURRENT_TIMESTAMP() WHERE id = $oferta_id;";
        mysqli_query($con, $query);
        echo "<a href='ofertas_tec.php'>Has cubierto el servicio técnico de forma satisfactoria</a>";
    }

    mysqli_close($con);


?>
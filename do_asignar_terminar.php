<?php
echo $_GET['id']."<br/>"; #debug
echo $_GET['accion']; #debug
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
    }
    else { 
        # Vamos a dar por finalizada la oferta
        $query = "UPDATE tindware.ofertas SET fechafinalizacion = CURRENT_TIMESTAMP() WHERE id = $oferta_id;";
        mysqli_query($con, $query);
    }

    mysqli_close($con);


    # Damos por hecho que todo va bien (como en mi vioda) (este commit es de las 4 de la madrugada) (no me suspendas por esto)
    echo "Query realizada, se ha cambiado la oferta con id $oferta_id (eres el usuario con id $id_user)"; #debug
?>
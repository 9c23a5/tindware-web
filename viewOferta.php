<!DOCTYPE html>
<html lang="en">
<head>
    <title>TindWare - Oferta</title>
</head>
<body>
    <?php
    # Cargar constantes
    include 'inc/constantes.php';
    # Cargamos cookies
    include 'inc/obtenerCookies.php';
    # Incluir header
    include 'inc/header.php';

    # Recogemos el id de la oferta desde GET
    @$id_oferta = $_GET['id'];

    if (!@is_null($id_user)) {
        # Recogemos los datos de la oferta
        $con = mysqli_connect('localhost', 'root');
        $queryOferta = "SELECT * FROM tindware.ofertas WHERE id = $id_oferta;";
        if ($outOferta = mysqli_query($con, $queryOferta)) {
            $datosOferta = mysqli_fetch_array($outOferta);

            $id_usuariopart = $datosOferta['id_usuariopart'];
            $id_usuariotec = $datosOferta['id_usuariotec'];
            $titulo = $datosOferta['titulo'];
            $descripcion = $datosOferta['descripcion'];
            $fechacreacion = $datosOferta['fechacreacion'];
            $fechaasignado = $datosOferta['fechaasignado'];
            $fechafinalizacion = $datosOferta['fechafinalizacion'];
            echo "titulo: $titulo";
        }
        else {
            # Error DB
            echo "bad query";
        }
    }
    else {
        # Error no id
        echo "no id";
    }
    ?>
    <div id="main">
        
    </div>
</body>
</html>

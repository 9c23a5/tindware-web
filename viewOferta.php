<!DOCTYPE html>
<html lang="en">
<head>
    <title>TindWare - Ver Oferta</title>
</head>
<body>
    <?php
    # Cargar constantes
    include 'inc/constantes.php';
    # Cargamos cookies
    include 'inc/obtenerCookies.php';
    # Incluir header
    include 'inc/header.php';

    $errorFlag = true;
    $errorMsg = "Error desconocido, contácte con el administrador";

    @$id_oferta = $_GET['id'];
    if (@isset($id_oferta)) {
        $con = mysqli_connect('localhost', 'root', MYSQL_PASSWD);
        $queryOferta = "SELECT * FROM tindware.ofertas WHERE id = $id_oferta;";

        if ($outOferta = mysqli_query($con, $queryOferta)) {
            if (mysqli_num_rows($outOferta) == 1) {
                $datosOferta = mysqli_fetch_array($outOferta);
                $id_usuariopart = $datosOferta['id_usuariopart'];
                $id_usuariotec = $datosOferta['id_usuariotec'];
                $titulo = $datosOferta['titulo'];
                $descripcion = $datosOferta['descripcion'];
                $fechacreacion = $datosOferta['fechacreacion'];
                $fechaasignado = $datosOferta['fechaasignado'];
                $fechafinalizacion = $datosOferta['fechafinalizacion'];

                # Ahora solo mostramos la oferta si eres admin o si eres el usuario creador o que haya sido asignado
                if ($type_user == 'admin' OR $id_usuariopart == $id_user OR $id_usuariotec == $id_user) {
                    $errorFlag = false;
                    $asignadoFlag = false;
                    if (!isset($id_usuariotec)) {
                        $queryUsers = "SELECT * FROM tindware.usuario WHERE id = $id_usuariopart;";
                    }
                    else {
                        $queryUsers = "SELECT * FROM tindware.usuario WHERE id = $id_usuariopart OR id = $id_usuariotec;";
                    }
                    $outUser = mysqli_query($con, $queryUsers);
                    while ($resultado = mysqli_fetch_array($outUser)) {
                        if ($resultado['tipo'] == 'particular') {
                            $username_usuariopart = $resultado['username'];
                        }
                        elseif ($resultado['tipo'] == 'tecnico') {
                            $username_usuariotec = $resultado['username'];
                            $asignadoFlag = true;
                        }
                    }
                    if ($asignadoFlag AND isset($fechafinalizacion)) {
                        $finalizadoFlag = true;
                    }
                }
                else {
                    $errorMsg = "No tienes los permisos suficientes para ver esta oferta";
                }
            }
            else {
                $errorMsg = "No se ha encontrado la oferta con el ID $id_oferta";
            }
        }
        else {
            $errorMsg = "Error en la base de datos. Contácte con el administrador";
        }
        mysqli_close($con);
    }
    else {
        $errorMsg = "No se ha proporcionado ningún identificador de oferta";
    }
    ?>
    <?php
    if ($errorFlag) {
        echo HIDE;
    }
    ?>
    <div id="noError">
        <h1><?php echo $titulo ?></h1>
        <p><?php echo $descripcion?></p>
        <p>Oferta creada por: <?php echo $username_usuariopart ?> el <?php $fechaCr = explode(' ', $fechacreacion); echo $fechaCr[0]." a las ".$fechaCr[1] ?></p>
        <a href="ofertas_part.php">Volver atras</a>
        <?php
        if (!$asignadoFlag) {
            echo HIDE;
        }?>
        <p>Oferta asignada a: <?php echo $username_usuariotec ?> el <?php $fechaAs = explode(' ', $fechaasignado); echo $fechaAs[0]." a las ".$fechaAs[1] ?></p>
            <?php
            if (!$finalizadoFlag) {
                echo HIDE;
            }
            ?>
            <p>Oferta finalizada el <?php $fechaFin = explode(' ', $fechafinalizacion); echo $fechaFin[0]." a las ".$fechaFin[1] ?></p>
            <?php
            if (!$finalizadoFlag) {
                echo HIDECLOSE;
            }
            ?>
        <?php
        if (!$asignadoFlag) {
            echo HIDECLOSE;
        }
        ?>
    </div>
    <?php
    if ($errorFlag) {
        echo HIDECLOSE;
    }
    if (!$errorFlag) {
        echo HIDE;
    }
    ?>
    <div id="error">
        <p>Error: <?php echo $errorMsg?>.</p>
    </div>
    <?php
    if (!$errorFlag) {
        echo HIDECLOSE;
    }
    ?>
</body>
</html>

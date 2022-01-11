<?php
# Pequeño snippet para obtener los datos de un usuario dado su id
# El return es un array con los siguientes valores
# $datosUser['id'] = el id del usuario
# $datosUser['tipo'] = el tipo de usuario
# $datosUser['username'] = el nombre del usuario
# $datosUser['email'] = el email del usuario

function obtenerDatosUser($id) {
    $datosUser['id'] = $id;
    if ($id != 0) {
        $con = mysqli_connect('localhost', 'root', MYSQL_PASSWD);
        $query = "SELECT tipo, username, email FROM tindware.usuario WHERE id = $id LIMIT 1";

        $out = mysqli_query($con, $query);
        if (mysqli_num_rows($out) != 1) {
            return false;
        }
        else {
            $resultado = mysqli_fetch_array($out);
            $datosUser['tipo'] = $resultado['tipo'];
            $datosUser['username'] = $resultado['username'];
            $datosUser['email'] = $resultado['email'];
            return $datosUser;
        }
        mysqli_close($con);
    }
    else {
        $datosUser['tipo'] = 'invitado';
        return $datosUser;
    }
}

?>

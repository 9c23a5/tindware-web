<?php
# Pequeño snippet para obtener los datos de un usuario dado su id
# El return es un array con los siguientes valores
# $datosUsuario['id'] = el id del usuario
# $datosUsuario['tipo'] = el tipo de usuario
# $datosUsuario['username'] = el nombre del usuario
# $datosUsuario['email'] = el email del usuario

function obtenerDatosUser($id) {
    $con = mysqli_connect('localhost', 'root');
    $query = "SELECT tipo, username, email FROM tindware.usuario WHERE id = $id LIMIT 1";

    $out = mysqli_query($con, $query);
    if (mysqli_num_rows($out) != 1) {
        return false;
    }
    else {
        $resultado = mysqli_fetch_array($out);
        $datosUsuario['id'] = $id;
        $datosUsuario['tipo'] = $resultado['tipo'];
        $datosUsuario['username'] = $resultado['username'];
        $datosUsuario['email'] = $resultado['email'];
        return $datosUsuario;
    }
}

?>

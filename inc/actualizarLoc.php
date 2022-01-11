<?php
# Script que actualiza la localización según las cookies loc/lat
    $loc = $_COOKIE['loc'];
    $lat = $_COOKIE['lat'];
    $id_user = $_COOKIE['id_user'];

    if ($id_user = 0) {
        return;
    } else {
        $con = mysqli_connect('localhost', 'root', MYSQL_PASSWD);

        # Comprobar si existe un registro de este usuario
        $query = "SELECT * FROM tindware.usuario WHERE id_usuario = $id_user LIMIT 1;";

        if (mysqli_num_rows(mysqli_query($con, $query)) == 1) {
            # Update
            $query = "INSERT";
        }
        else {
            # Insert
            $query = "INSERT";
        }
    }
?>
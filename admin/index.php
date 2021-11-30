<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/misc.css"/>
    <title>Panel Admin</title>
</head>
<body>
    <?php
    include '../inc/constantes.php';
    include '../inc/obtenerCookies.php';
    include '../inc/obtenerDatosUser.php';
    $datosUsuario = obtenerDatosUser($id_user);

    include 'inc/header.php';
    ?>
</body>
</html>
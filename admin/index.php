<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/misc.css"/>
    <title>Panel Admin</title>
    <title>Paneladmin</title>
    <link rel="stylesheet" type="text/css"
    href="inicial.css">
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
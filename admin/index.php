<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/panel_admin.css"/>
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
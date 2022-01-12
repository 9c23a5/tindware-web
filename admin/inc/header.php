<?php
@include "../inc/constantes.php";
@include "../inc/obtenerCookies.php";
@include "../inc/obtenerDatosUser.php";

$datosUser = obtenerDatosUser($id_user);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/misc.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="form.css">
    <link rel="stylesheet" href="css/header.css" type="text/css"/>
    <link rel="stylesheet" href="../pa.css" type="text/css"/>
</head>
<?php
if ($type_user == 'admin') {
    echo HIDE;
}
?>

<header>
    <div id="acceso_denegado">
        <h1 class="header">UPS, ¡Parece que quieres entrar a un sitio restringido!</h1>
    </div>
</header>

<?php
if ($type_user == 'admin') {
    echo HIDECLOSE;
}
?>
<?php
if ($type_user != 'admin') {
    echo HIDE;
}
?>

<header>
    <h1 class="header"><a href="index.php" style="color: white; text-decoration:none" class="titulo">Panel Administrativo</a></h1>
</header>

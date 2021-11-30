<?php
@include "../inc/constantes.php";
@include "../inc/obtenerCookies.php";
@include "../inc/obtenerDatosUser";

$datosUser = obtenerDatosUser($id_user);

if ($type_user != 'admin') {
    echo HIDE;
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/misc.css" type="text/css"/>
    <link rel="stylesheet" href="css/header.css" type="text/css"/>
</head>

<header>
        <span class="bienvenido">Bienvenido, <?php echo @$datosUser['username']?></span>
    <table>
        <tr>
            <td><a href='anadirregistro.html'>Añadir registro</a></td>
            <td><a href='listar.html'>Listar</a></td>
            <td><a href='borrar.html'>Borrar</a></td>
            <td><a href='buscar.html'>Buscar</a></td>
        </tr>
    </table>
</header>

<?php
if ($type_user != 'admin') {
    echo HIDECLOSE;
}
if ($type_user == 'admin') {
    echo HIDE;
}
?>

<header>
    <div id="acceso_denegado">
        <h1>Acceso Denegado</h1>
    </div>
</header>

<?php
if ($type_user == 'admin') {
    echo HIDECLOSE;
}
?>
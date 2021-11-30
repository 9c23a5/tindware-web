<?php
@include "../inc/constantes.php";
@include "../inc/obtenerCookies.php";
@include "../inc/obtenerDatosUser";

$datosUser = obtenerDatosUser($id_user);
?>

<header>
        <h1>Bienvenido, <?php $datosUser['username']?></h1>
    <table>
    
        <tr>
            <td><a href='anadirregistro.html'>Añadir registro</a></td>
            <td><a href='listar.html'>Listar</a></td>
            <td><a href='borrar.html'>Borrar</a></td>
            <td><a href='buscar.html'>Buscar</a></td>
        </tr>
    </table>
</header>
<?php
echo $_GET['id']."<br/>"; #debug
echo $_GET['accion']; #debug

    # Cargar constantes
    include 'inc/constantes.php';
    # Cargamos cookies
    include 'inc/obtenerCookies.php';
    # Header
    include 'inc/header.php';
?>
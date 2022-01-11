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
<!--     
    <div id="div1">
        <center><h2 class="big"><a class="style" href='anadirregistro.html'>Anadir registro</a></h2></center> 
     </div>
 
     <div id="div2">
         <center><h2 class="big"><a class="style" href='listar.html'>Listar</a></h2></center>
     </div>
 
     <div id="div3">
         <center><h2 class="big"><a class="style" href='borrar.html'>Borrar</a></h2></center>
     </div>
 
     <div id="div4"> 
         <center><h2 class="big"><a class="style" href='buscar.html'>Buscar</a></h2></center>
     </div> -->

</body>
</html>
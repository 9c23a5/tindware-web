<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/misc.css"/>
    <title>Panel Admin</title>
    <title>Paneladmin</title>
    <link rel="stylesheet" href="pa.css" type="text/css"/>
</head>
<body>
    <?php
    include 'inc/header.php';
    ?>
<span class="bienvenido">Bienvenido, <?php echo @$datosUser['username']?></span>
    <table class="header">
            <tr><td class="header"><a class="header" href='anadirregistro.php'>Añadir registro</a></td></tr>
            <tr><td class="header"><a class="header" href='listar.php'>Listar</a></td></tr>
            <tr><td class="header"><a class="header" href='borrar.php'>Borrar</a></td></tr>
            <tr><td class="header"><a class="header" href='buscar.php'>Buscar</a></td></tr>
            <tr><td class="header"><a class="header" href='cvs.php'>Curriculums</a></td></tr>
            <tr><td class="header">  <a class="header" href="../index.php">Volver a la página inicial</a></td></tr>
    </table>
  
    

</body>
</html>
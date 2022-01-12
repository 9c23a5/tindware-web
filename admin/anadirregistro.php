<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/misc.css"/>
    <title>Añadir Registro - Panel Admin</title>
    <link rel="stylesheet" href="pa.css" type="text/css"/>
</head>
<?php
@include "inc/header.php";

if ($type_user == "admin") {
    # Obtengo todas las tablas
    $con = mysqli_connect('localhost', 'root', MYSQL_PASSWD);
    $queryTablas = "SHOW TABLES FROM tindware;";
    $outTablas = mysqli_query($con, $queryTablas);

    $listaTablas = array();
    while ($resultadoTablas = mysqli_fetch_array($outTablas)) {
        array_push($listaTablas, $resultadoTablas[0]);
    }
    mysqli_close($con);
}
?>
<body>

<div id="main">
    <!-- <p>Seleccione la tabla: </p>
    <select class="tabla">
        <?php
        foreach ($listaTablas as $tabla) {
            echo "<option value='$tabla'>$tabla</option>";
        }
        ?>
    </select> -->
    <form action='insert_regis.php' method='get'>
    <table>   
    <tr>
        <td>Tipo:</td> 
        <td><input required type="text" name="tipo"></td>   
    </tr>  
    <tr>
        <td>Username:</td>  
        <td><input required type="text" name="username"></td> 
    </tr>

    <tr>
        <tr>
          <td>Password:</td>  
          <td><input required type="password" name="passwd"></td>    
        </tr>
        <tr>
            <td>Email:</td> 
            <td><input required type="text" name="email"></td>    
            <tr>
                <td>Fecha nacimiento:</td>    
                <td><input required type="date" name="fechanac"></td>
            </tr>
            <tr>
                <td>Ubicacion:</td>    
                <td><input required type="text" name="coordX" placeholder="Coordenada X">
                <input required type="text" name="coordY" placeholder="Coordenada Y"> </td>  
        <tr> 
            <td><button onclick="history.back()" class="xd">Volver</button></td>
            <td><input type="submit" value="Agregar" class="xd"></td>
        </tr>     
    </table>
    </form>
   
</div>
</body>
</html>

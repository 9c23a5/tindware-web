<?php



$conexion=mysqli_connect('localhost','root') or die ("No se ha conectado al servidor  la base de datos");

mysqli_select_db($conexion,"agenda") or die ("No se ha conectado a la base de datos");

$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];

if (empty($nombre)and empty($apellido)){
    echo "Los campos estan vacios<br/>";
    echo "Recuerde rellenarlos";
    echo "<a href='Pantalla_inicial.html'>Volver al inicio<a/>";
}
else
{   $borrar="DELETE FROM usuario WHERE nombre='$nombre' and apellido='$apellido';";
        mysqli_query($conexion,$borrar);
        echo "Valor Borrado";
     }
     
     













?>
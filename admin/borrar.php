<?php



$conexion=mysqli_connect('localhost','root') or die ("No se ha conectado al servidor  la base de datos");

mysqli_select_db($conexion,"tindware") or die ("No se ha conectado a la base de datos");

$username=$_GET['username'];
$email=$_GET['email'];

if (empty($username)and empty($email)){
    echo "Los campos estan vacios<br/>";
    echo "Recuerde rellenarlos";
    echo "<a href='index.php'>Volver<a/>";
}
else
{   $borrar="DELETE FROM usuario WHERE nombre='$username' and apellido='$email';";
        mysqli_query($conexion,$borrar);
        echo "Valor Borrado";
     }
     
     













?>
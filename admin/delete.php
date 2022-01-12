<?php



$conexion=mysqli_connect('localhost','root') or die ("No se ha conectado al servidor  la base de datos");

mysqli_select_db($conexion,"tindware") or die ("No se ha conectado a la base de datos");

$username=$_GET['username'];
$email=$_GET['email'];

$consulta="SELECT * FROM usuario WHERE nombre='$username' and email='$email';";
$consulta2=mysqli_query($conexion,$consulta);
$consultarow=mysqli_num_rows($consulta2);

if($consultarow==0)
{
  echo "No existe este registro<a href='index.php'> [Volver al inicio]</a>";  
}

else
{   $borrar="DELETE FROM usuario WHERE nombre='$username' and email='$email';";
        mysqli_query($conexion,$borrar);
        echo "Se han eliminado los registros<a href='index.php'> [Volver al inicio]</a>";
     }
     
     













?>

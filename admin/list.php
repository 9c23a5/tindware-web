<?php




$conexion=mysqli_connect("localhost","root") or die ("no se ha podido conectar");
mysqli_select_db($conexion,"tindware");

$consulta="SELECT * FROM usuario;";
$consulta2=mysqli_query($conexion,$consulta);
$consultarow=mysqli_num_rows($consulta2);


echo "<table border=1 >";
echo "<tr bgcolor=grey ><td>Nombre de usuario<td/>";
echo "<td>Direccion de correo<td/><td>tipo de usuario <td/><td>fecha de alta<td/><td>Ultimo login <td/><tr/>";

while($fila=mysqli_fetch_array($consulta2))
{
    echo "<tr><td>".$fila['username']."</td><td>".$fila['email']."</td><td>".$fila['tipo']."</td><td>".$fila['signupdate']."</td><td>".$fila['lastlogin']."</td></tr>";
     echo "<br/>";
}

?>

<?php

$conexion=mysqli_connect('localhost','root') or die ("error servidor");
mysqli_select_db($conexion,'mibasededatos')or die ("error db");


/*
 *ejercicio pag 57 actividad 3.13
 *
 *A)
$res="SELECT * FROM cliente where (direccion='c/de la vida');";
$resultado=mysqli_query($conexion,$res);
#imrpimir los registros devuelto po la select
#almacenado en el array
while ($fila=mysqli_fetch_array($resultado))
{
    echo $fila['nombre'];
    echo " , ";
    echo $fila ['apellidos'];
    echo " , ";
    echo $fila['direccion'];
    echo "<br/>";
    
    
}



B)
$res="SELECT * FROM cliente where (codcliente)  like 'A%';";
$resultado=mysqli_query($conexion,$res);
#imrpimir los registros devuelto po la select
#almacenado en el array
while ($fila=mysqli_fetch_array($resultado))
{
    echo $fila['nombre'];
    echo " , ";
    echo $fila ['apellidos'];
    echo " , ";
    echo $fila['direccion'];
      echo " , ";
     echo $fila ['codcliente'];
    echo " , ";
     echo "<br/>";
    
}



#C)
   $res="SELECT * FROM cliente where (email)  like '%@gmail%';";
$resultado=mysqli_query($conexion,$res);
#imrpimir los registros devuelto po la select
#almacenado en el array
while ($fila=mysqli_fetch_array($resultado))
{
    echo $fila['nombre'];
    echo " , ";
    echo $fila ['apellidos'];
    echo " , ";
    echo $fila['direccion'];
      echo " , ";
     echo $fila ['codcliente'];
    echo " , ";
     echo $fila ['email'];
    echo " , ";
     echo "<br/>";
    



#D)
 $res="SELECT * FROM cliente where (codcliente='B02');";
$resultado=mysqli_query($conexion,$res);
#imrpimir los registros devuelto po la select
#almacenado en el array
while ($fila=mysqli_fetch_array($resultado))
{
    echo $fila['nombre'];
    echo " , ";
    echo $fila ['apellidos'];
 echo "<br/>";

}
*/
?>
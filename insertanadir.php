<?php

$conexion=mysqli_connect("localhost","root") or die ("no se ha podido conectar a la base de datos");
mysqli_select_db($conexion,"tindware") or die ("no se ha seleccionado la base");

$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$email=$_GET['email'];
$username=$_GET['username'];
$password=$_GET['passwd'];
$id=$_GET['id_user'];


if (@!empty($username) AND @!empty($passwd) AND @!empty($email) AND @!empty($tipo) AND @!empty($fechaNac))








?>
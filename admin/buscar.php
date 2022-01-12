<?php


$conexion=mysqli_connect('localhost','root') or die ("No se ha conectado al servidor  la base de datos");

mysqli_select_db($conexion,"tindware") or die ("No se ha conectado a la base de datos");

$username=$_GET['username'];
$email=$_GET['email'];

if (empty($username) and empty($email)){
    echo "Los campos estan vacios<br/>";
    echo "Recuerde rellenarlos<br/>";
    echo "<a href='index.php'>Volver a Inicio<a/>";
    }

else {
        $res="SELECT * FROM  tindware.usuario where username like '%$username%' and email like '%$email%';";
        $resultado=mysqli_query($conexion,$res);
        $registro=mysqli_num_rows($resultado);
    
        if ($registro==0){
             echo "No se han encontrado registros<br/>";
            echo "<a href='buscar.php'>Volver a buscar<a/>";  
         }//cierra if de registro ==0
    
    
        else{ 
     echo "<table border=1 >";
     echo "<tr bgcolor=yellow ><td>Nombre de usuario<td/>";
     echo "<td>Direccion de correo<td/><tr/>";
     
            while($fila=mysqli_fetch_array($resultado)){
                
               echo  "<tr><td>".$fila ['username']."<td/><td>".$fila ['email']."<td/><tr/>";
          }//cierra while
             
            }//cierra else antes while
            echo "<table/>";
    }

   
   
   
?>
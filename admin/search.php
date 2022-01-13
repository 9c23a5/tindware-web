
<?php


@include '../inc/constantes.php';
$conexion=mysqli_connect('localhost','root', MYSQL_PASSWD) or die ("No se ha conectado al servidor  la base de datos");

mysqli_select_db($conexion,"tindware") or die ("No se ha conectado a la base de datos");

$username=$_GET['username'];
$email=$_GET['email'];

if (empty($username) and empty($email)){
    echo "Los campos estan vacios<br/>";
    echo "Recuerde rellenarlos<br/>";
    echo "<a href='Pantalla_inicial.html'>Volver al inicio<a/>";
    }

else {
        $res="SELECT * FROM  tindware.usuario where username like '%$username%' and email like '%$email%';";
        $resultado=mysqli_query($conexion,$res);
        $registro=mysqli_num_rows($resultado);
    
        if ($registro==0){
             echo "No se han encontrado registros<br/>";
            echo "<a href='Pantalla_inicial.html'>Volver al inicio<a/>";  
         }//cierra if de registro ==0
    
    
        else{ 
 
     echo "<table border='1'><tr><td>Nombre de usuario</td><td>Direccion de correo</td><td>tipo de usuario</td><td>fecha de alta</td><td>Ultimo login</td><tr/>";
     
            while($fila=mysqli_fetch_array($resultado)){
                
               echo "<tr><td>".$fila['username']."</td><td>".$fila['email']."</td><td>".$fila['tipo']."</td><td>".$fila['signupdate']."</td><td>".$fila['lastlogin']."</td></tr>";
          }//cierra while
           
    
             
            }//cierra else antes while
            echo "<table/>";
    }
 echo "<a href='index.php'>[Volver al inicio]<a/>";  
   
   
   
?>


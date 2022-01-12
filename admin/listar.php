<?php




$conexion=mysqli_connect('localhost','root') or die ("No se ha conectado al servidor  la base de datos");

mysqli_select_db($conexion,"tindware") or die ("No se ha conectado a la base de datos");

$username=$_GET['username'];

if (empty($username)){
    echo "Los campos estan vacios<br/>";
    echo "Recuerde rellenarlos<br/>";
    echo "<a href='index.php'>Volver a Inicio<a/>";
    }

else {
        $res="SELECT * FROM  tindware.usuario where username='$username';";
        $resultado=mysqli_query($conexion,$res);
        $registro=mysqli_num_rows($resultado);
    
        if ($registro==0){
             echo "No se han encontrado registros<br/>";
            echo "<a href='listar.php'>Volver al inicio<a/>";  
         }//cierra if de registro ==0
    
        else{ 
     
            while($fila=mysqli_fetch_array($resultado)){ 
               echo  $fila ['username'];
               echo " ";
                echo $fila ['email'];
                  echo "<br/>";
          }//cierra while
           
    
             }//cierra else antes while
    }

   
   
   









?>
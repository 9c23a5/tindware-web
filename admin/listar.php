<?php




$conexion=mysqli_connect('localhost','root') or die ("No se ha conectado al servidor  la base de datos");

mysqli_select_db($conexion,"agenda") or die ("No se ha conectado a la base de datos");

$nombre=$_GET['nombre'];
#$apellido=$_GET['apellido'];





if (empty($nombre)and empty($apellido)){
    echo "Los campos estan vacios<br/>";
    echo "Recuerde rellenarlos<br/>";
    echo "<a href='Pantalla_inicial.html'>Volver al inicio<a/>";
    }

else {
        $res="SELECT * FROM  usuario where nombre='$nombre';";
        $resultado=mysqli_query($conexion,$res);
        $registro=mysqli_num_rows($resultado);
    
        if ($registro==0){
             echo "No se han encontrado registros<br/>";
            echo "<a href='Pantalla_inicial.html'>Volver al inicio<a/>";  
         }//cierra if de registro ==0
    
    
        else{ 
     
            while($fila=mysqli_fetch_array($resultado)){ 
               echo  $fila ['nombre'];
               echo " ";
                echo $fila ['apellido'];
                  echo "<br/>";
          }//cierra while
           
    
             }//cierra else antes while
    }

   
   
   









?>
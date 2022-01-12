<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/misc.css"/>
    <title>Listar Registros - Panel Admin</title>
    <link rel="stylesheet" href="pa.css" type="text/css"/>
</head>
<?php
@include "inc/header.php";

?>
<body>
<div id="main">
<form action='listar.php' method='get'>
<table>
    
    <tr>
    
        <td><h1 class="style">Listar Usuarios</h1></td>
      <tr><td class="style">Escriba los criterios de busqueda:</td></tr>
    
 </tr>
    
    <tr>
<td class="style">Username:</td>    
<td>
<input type="text" name="username">
</td>
</tr>
    
     
      <tr> <td><input type="submit" value="Listar" ></td></tr>
    
   <br/>
    
  
  
    
    
    
    
    
    
</table>
</form>
<br/>
<button onclick="history.back()">Volver</button>


</div>
</body>
</html>

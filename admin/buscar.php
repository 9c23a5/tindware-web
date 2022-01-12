<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/misc.css"/>
    <title>Buscar Registros - Panel Admin</title>
    <link rel="stylesheet" href="pa.css" type="text/css"/>
</head>
<?php
@include "inc/header.php";
?>
<body>

<div id="main">
<form action='search.php' method='get'>
<table>
    
    <tr > 
     <tr><td class="style">Escriba los criterios de busqueda:</td></tr>  
    </tr>
    
    <tr>
<td class="style">Username:</td>    
<td>
<input type="text" name="username" placeholder="Usuario"></td>
</tr>
    
       <tr>
<td class="style">Email:</td>    <td>
<input type="text" name="email" placeholder="Email"></td>
</tr>
<tr> 
        <td><button onclick="history.back()" class="xd">Volver</button></td>
        <td><input type="submit" value="Buscar" class="xd"></td>
   </tr> 
    
   <br/>
    
</table>
</form>
    <form action="list.php" method="get">
    <input type="submit" value="Listar usuarios" class="bottom">
</form>
<br/>

</div>
</body>
</html>

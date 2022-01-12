<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/misc.css"/>
    <title>Borrar Registro - Panel Admin</title>
    <link rel="stylesheet" href="pa.css" type="text/css"/>
</head>
<?php
@include "inc/header.php";

?>

<body>

<div id="main">
<form action='delete.php' method='get'>
<table>
    
    <tr>
<td class="style">Username:</td>    
<td>
<input type="text" name="username">
</td>
</tr>
    
       <tr>
<td class="style">Email:</td>    
<td>
<input type="text" name="email">
</td>
</tr>
    <tr> 
        <td><button onclick="history.back()" class="xd">Volver</button></td>
        <td><input type="submit" value="Borrar" class="xd"></td>
    </tr> 

  
</table>
</form>
<br/>

</div>
</body>
</html>

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
<form action='list.php' method='get'>
<table>
    
    <tr>
<td class="style">Username:</td>    
<td>
<input type="text" name="username">
</td>
<tr> 
    <td><button onclick="history.back()" class="xd">Volver</button></td>
    <td><input type="submit" value="Listar" class="xd"></td>
 </tr> 
    
</table>
</form>


</div>
</body>
</html>

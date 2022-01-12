<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/misc.css"/>
    <title>Añadir Registro - Panel Admin</title>
    <link rel="stylesheet" href="pa.css" type="text/css"/>
</head>
<?php
@include "inc/header.php";

?>
<body>

<div id="main">
    <form action='insert_regis.php' method='get'>
    <table>
        
        <tr>
        
        <td><h1>Registro</h1></td>
        </tr> <td>Escriba los datos del nuevo registro:</td>
        
    
        
        <tr>
    <td>Tipo:</td>    
    <td>
    <input required type="text" name="tipo">
    </td>
    </tr>
        
        <tr>
    <td>Username:</td>    
    <td>
    <input required type="text" name="username">
    </td>
    </tr>

    <tr>
        <td>Password:</td>    
        <td>
        <input required type="password" name="passwd">
        </td>
        </tr>
        
        <tr>
            <td>Email:</td>    
            <td>
            <input required type="text" name="email">
            </td>
            </tr>
            <tr>
                <td>Fecha nacimiento:</td>    
                <td>
                <input required type="date" name="fechanac">
                </td>
                </tr>
                <tr>
                    <td>Ubicacion:</td>    
                    <td>coordenadas X
                    <input required type="text" name="coordX">
                    </td>
                    <td>coordenadas Y
                        <input required type="text" name="coordY">
                        </td>
                    </tr>
                                








        <tr> <td><input type="submit" value="Anadir"></td>
        </tr>        
    </table>
    </form>
    <br/>
    <button onclick="history.back()">Volver</button>
</div>
</body>
</html>

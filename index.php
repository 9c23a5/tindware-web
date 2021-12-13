<!DOCTYPE html>
<html lang="en">
<head>
    <title>TindWare - Inicio</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    
</head>
<body>
<?php
    # Cargar constantes
    include 'inc/constantes.php';
    # Cargamos cookies
    include 'inc/obtenerCookies.php';
    # Incluir header
    include 'inc/header.php';
    ?>
   
    <div id="main">
       
        <div id="imgtit">
        <img src="img/tindware.png" alt="Los fundadores" width="480" height="400">
        </div>
        <div id="login">

        <form action="do_login.php" method="POST">
        <!-- Formulario de inicio de sesión-->
            <table>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td>Nombre de usuario o email:</td>
                                <td><input type="text" name="login" required/></td>
                            </tr>
                            <tr>
                                <td>Contraseña:</td>
                                <td><input type="password" name="passwd" required/></td> 
                            </tr>
                            
                            <tr>
                                <td colspan="2"><input type="submit" value="Iniciar Sesión" class="submit"/><br/></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><a href="registro.php" class="reg">Pincha aquí para registrarte</a></td>
                            </tr>
                            

                        </table>
                    </td>
                </tr>
            </table>
        </form>


        </div>



        </div>
    </div>
</body>
</html>

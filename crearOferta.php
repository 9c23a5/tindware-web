<!DOCTYPE html>
<html lang="en">
<head>
    <title>TindWare - Creación de Oferta</title>
    <link rel=stylesheet href="css/part.css" type="text/css">
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
        <form action="do_crearoferta.php" method="POST">
            <!-- Formulario creación oferta -->
            <table>

                <tr>
                    <td>Titulo</td>
                    <td><input type="text" name="titulo" required/><br/></td>
                </tr>
                <tr>
                    <td>Descripción</td>
                    <td><textarea name="descripcion" required></textarea></td>
                </tr>

            </table> 
        </form>
    </div>
</body>
</html>

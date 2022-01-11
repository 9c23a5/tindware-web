<!DOCTYPE html>
<html lang="en">
<head>
    <title>TindWare - Creación de Oferta</title>
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
            Título:
            <input type="text" name="titulo" required/><br/>
            Descripción:
            <textarea name="descripcion" required></textarea><br/>
            <input type="submit" value="Crear"/>
        </form>
    </div>
</body>
</html>

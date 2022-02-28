<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin</title>
</head>


<body>


<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container-fluid">

        <div class="navbar-nav">
        <a class="navbar-brand" href="#">
            <img src="../img/tindware.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        TindWare
        </a>
            <!-- <a class="nav-item nav-link active" href="#">Inicio</a> -->
            <a class="nav-item nav-link" id="inicio" href="index.php">Inicio</a>
            <a class="nav-item nav-link" id="anadir" href="anadir.php">Añadir</a>
            <a class="nav-item nav-link" id="listar" href="listar.php">Listar</a>
            <a class="nav-item nav-link" id="borrar" href="borrar.php">Borrar</a>
        </div>
            <form class="d-flex" action="buscar.php" method="POST" style="align-items: baseline;">
                <input class="form-control me-2" type="search" placeholder="Busqueda simple" aria-label="Search" name="query">
                <button class="btn btn-info me-4" type="submit">Buscar</button>
                <div class="me-1"><a href="../"><span class="iconify" data-icon="typcn:arrow-back" style="color: #bfbfbf;" data-width="30"></span></a></div>
            </form>
            
        </div>
    </div>
</nav>

<script type="text/javascript">
        // Script para seleccionar el link activo del navbar
        var path = location.pathname
        var path = path.substring("/admin2/".length)
        if (path.length <= 0) {
            // Si no es nada es el index
            var path = "index.php"
        }

        var paginas = {
            //"path" : "id_elemento"
            "index.php" : "inicio",
            "anadir.php" : "anadir",
            "listar.php" : "listar",
            "borrar.php" : "borrar"
        }

        var element = document.getElementById(paginas[path][1])
        element.classList.add("active")
</script>


</body>
</html>
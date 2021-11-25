<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TindWare</title>
</head>
<body>
    <?php
    # Leemos los contenidos de las cookies, si no existen el usuario es invitado
    # Utilizo @ para ignorar la warning si la cookie no existe
    #if (!@isset($_COOKIE["id_user"])) {
    if (!isset($_COOKIE["id_user"])) {
        # ID 0 significa ningún usuario
        # La ID, aunque es un INT, ya que así es como esta el campo en la DB
        # Campos: "nombreCookie", <valor>, <tiempo de exp., 0 es cuando se cierre el nav.), path (siempre va a ser "/")
        setcookie("id_user", 0, 0, "/");
        $id_user = 0; # Necesitamos tambien settear la variable porque no estamos recogiendo el valor de la cookie (no existe)
        echo "id_user empty, setteado a: "; # debug
    }
    else {
        # Si ya tenemos la cookie recogemos el valor
        $id_user = $_COOKIE["id_user"];
        echo "id_user ya seteado: "; # debug
    }
    echo "$id_user<br/>"; # debug

    if (!@isset($_COOKIE["type_user"])) {
        # Si no ha iniciado sesión el tipo de usuario sera 'invitado'
        setcookie("type_user", "invitado", 0, "/");
        $type_user = "invitado";
        # Necesitamos tambien settear la variable porque no estamos recogiendo el valor de la cookie (no existe)
        echo "type_user empty, setteado a: "; # debug
    }
    else {
        # Si ya tenemos la cookie recogemos el valor
        $type_user = $_COOKIE["type_user"];   
        echo "type_user ya seteado: "; # debug
    }
    echo "$type_user";

    ?>
    <header>
        <div id="logo">
            <!-- Un img con el logo de TindWare y un canvas con el nombre -->
        </div>

        <div id="menu">
            <!-- Un menu con las diferentes opciones (mapa tecnicos, ultimas ofertas, faq, etc...) -->
            <!-- Hay otros menus, por ejemplo 'Panel administracion', que dependen segun el valor de la cookie de inicio de sesion -->
        </div>

        <div id="login_registro">
            <!-- Enlaces para Iniciar Sesión y Registro -->
        </div>
    </header>
</body>
</html>

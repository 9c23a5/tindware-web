<?php
    # Leemos los contenidos de las cookies, si no existen el usuario es invitado
    # Utilizo @ para ignorar la warning si la cookie no existe
    if (!@isset($_COOKIE["id_user"])) {
        # ID 0 significa ningún usuario
        # La ID, aunque es un INT, ya que así es como esta el campo en la DB
        # Campos: "nombreCookie", <valor>, <tiempo de exp., 0 es cuando se cierre el nav.), path (siempre va a ser "/")
        setcookie("id_user", 0, 0, "/");
        $id_user = 0; # Necesitamos tambien settear la variable porque no estamos recogiendo el valor de la cookie (no existe)
    }
    else {
        # Si ya tenemos la cookie recogemos el valor
        $id_user = $_COOKIE["id_user"];
    }

    if (!@isset($_COOKIE["type_user"])) {
        # Si no ha iniciado sesión el tipo de usuario sera 'invitado'
        setcookie("type_user", "invitado", 0, "/");
        $type_user = "invitado"; # Necesitamos tambien settear la variable porque no estamos recogiendo el valor de la cookie (no existe)
    }
    else {
        # Si ya tenemos la cookie recogemos el valor
        $type_user = $_COOKIE["type_user"];   
    }
    ?>
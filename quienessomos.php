<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href="css/qs.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" href="css/form.css" type="text/css"/>
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
    <div id="qs">
        
        <h2>¿Quiénes somos?</h2>
            <p>¡Hola! Encantado de conocerte, soy el CEO de TINDWARE y te voy a contar de qué trata nuestra empresa, pero antes una pequeña historia...</p>
            <p>Un dia estabamos todos los fundadores tomando un café, en una modesta cafetería de Sestao, cuando uno de los fundadores comentó que uno de sus amigos estaba sufriendo continuos pantallazos azules en su máquina.
            La solución de esta persona hubiera sido, lógicamente, llevarlo a un técnico, pero siendo un día festivo..¿Quién podría ayudarlo?
            Entonces caímos en que no existía un servicio técnico 24h, los 365 días del año, se nos encendió la famosa bombilla. </p>
            <p>¿Y si ofrecemos un servicio jamás visto antes? Creíamos que sería una locura, pero aquí te presento TINDWARE, el servicio técnico que no duerme.</p>
            <p>Dedicamos todos nuestros esfuerzos a enlazar los mejores técnicos en cada campo de la informática con usuarios y empresas que necesiten en un momento crucial la asistencia.
            Creemos que el tiempo es oro, y por eso nuestros técnicos están capacitados para trabajar de la manera más rápida y eficiente.</p>
            <center><img src="img/tindware.png" alt="Los fundadores" width="480" height="400"></center>
    </div>
    <div id="qns">
        <h2>¿Por qué nuestro servicio?</h2>
            <p>Nos centramos en ofrecer un servicio de calidad, orientado hacia todas las personas. Creemos que es importante que una sociedad tenga
            conocimientos en informática, ya que un futuro completamente informatizado está a la vuelta de la esquina.
            Por tanto, estamos plantando la semilla de un futuro sin preocupaciones, en el cuál un simple mensaje de texto o una llamada teléfonica
            ponga a tu disposicion a los mejores técnicos del mercado.</p>
            <p>Además queremos ser unfa fuente de oprtunidades para aquellas personas con dificultades para encontrar un empleo pueda tener un oportunidad en este mercado en 
                expansión</p>
                <img src="img/desFE.jpg" alt="Los fundadores" width="500" height="500">
               
               
    </div>
    
    <div id="sci">
        <h2>Ofecemos todos los servicios en el campo de la informática</h2>
            <p>Como hemos comentado anteriormente, ofrecemos servicios de mantenimiento hardware, desarrollo web, entre otros, orientado
            tanto a particulares como a empresas. Un auténtico soporte 365 dias al año, distinto, real. </p>
            <p>Sin necesitas más información, no dudes en ponerte en contacto con nosotros.</p>  
            <img src="img/desUX.jpg" alt="Los fundadores" width="650" height="500">
    </div>
    <div id="team">
        <h2>Nuestro equipo</h2>
                    <ul>
                    <li>
                    <img src="img/anthony.png">
                    <div class="info">
                    <h3>Anthony Rodriguez</h3>
                    <h4>CEO y Desarrollador Frontend</h4>
                    <p>Soy una persona perfeccionista, me encanta que todo funcione como un reloj suizo. Mi principal función es el desarrollo web y rescatar animalitos de las calles</p>
                    </div>
                    </li>
                    <li>
                    <img src="img/ander.png">
                    <div class="info">
                    <h3>Ander Herrero</h3>
                    <h4>Atención al Cliente y Departamento de Hardware</h4>
                    <p>Soy una persona muy entusiasmada en el mundo del hardware. Me encanta montar mis propios ordenadores y sobre todo resolver las dudas que puedan surgir a los clientes de nuestra empresa</p>
                    </div>
                    </li>
                    <li>
                    <img src="img/asier.png">
                    <div class="info">
                    <h3>Asier Mejuto</h3>
                    <h4>Jefe de Seguridad y Disponilidad de Sistemas y Redes</h4>
                    <p>Me aseguro de que nadie no autorizado le de por curiosear, de mi depende toda la seguridad de esta empresa. Adicto al Visual Studio Code</p>
                    </div>
                    </li>
                    <li>
                    <img src="img/borja.png">
                    <div class="info">
                    <h3>Borja Montaño</h3>
                    <h4>Director de Software</h4>
                    <p>Mi primera aplicación la desarrollé a los 3 años, lo demás vino solo. Dirijo al equipo de desarrollo software.</p>
                    </div>
                    </li>
                    <li>
                    <img src="img/jose.png">
                    <div class="info">
                    <h3>José Luis Villalba</h3>
                    <h4>Departamento de Marketing y Relaciones Públicas</h4>
                    <p>Las ideas no vienen solas, hay que generarlas, y ese es mi trabajo. Proplayer del COD Warzone.</p>
                    </div>
                    </li>
                    </ul>
    </div>         
    </div>
    <footer>
        <div id="cuadro1">
            <h3>TindWare</h3>
            <p>Dirección: Autonomia Kalea, 48012 Bilbao, Bizkaia</p>
            <p>Horario: Lunes a Viernes 08:00-14:00</p>
        </div>
        <div id="cuadro2">
            <h3>Navegación por la página</h3>
            <a href="index.php">Volver a la pagina principal</a><br/><br/>
            <a href="registro.php">Registrate</a><br/><br/>
            <a href="#">Todas nuestras ofertas de empleo</a><br/><br/>
            <a href="index.php">Iniciar sesión</a><br/><br/>
        </div>
        <div id="cuadro3">
            <h3>Nuestras redes sociales</h3>
            <a href="https://www.instagram.com/tindwareoficial/?hl=es"><img src="img/in.png" alt="Los fundadores" width="50" height="50" class="in"></a><br/>
            <a href="https://twitter.com/TindWare"><img src="img/tw.png" alt="Los fundadores" width="50" height="50" class="tw"></a><br/>
            <a href="#"><img src="img/fb.png" alt="Los fundadores" width="50" height="50" class="fb"><br/></a>
        </div>
    </footer>
    <div id="final">

        <a href="#">Pulsa aqui para subir</a>
        <p class="der">© 2021 Mikeldi - Todos los derechos reservados</p>        

    </div>
    
</body>

</html>
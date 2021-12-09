<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href="css/qs.css" type="text/css">
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

    

    <div id="qs">
        
        <h2>¿Quiénes somos?</h2>
            <p>¡Hola! Encantado de conocerte, soy el CEO de TINDWARE y te voy a contar de qué trata nuestra empresa, pero antes una pequeña historia...</p>
            <p>Un dia estabamos todos los fundadores tomando un café, en una modesta cafetería de Sestao, cuando uno de los fundadores comentó que uno de sus amigos estaba sufriendo continuos pantallazos azules en su máquina.
            La solución de esta persona hubiera sido, lógicamente, llevarlo a un técnico, pero siendo un día festivo..¿Quién podría ayudarlo?
            Entonces caímos en que no existía un servicio técnico 24h, los 365 días del año, se nos encendió la famosa bombilla. </p>
            <p>¿Y si ofrecemos un servicio jamás visto antes? Creíamos que sería una locura, pero aquí te presento TINDWARE, el servicio técnico que no duerme.</p>
            <p>Dedicamos todos nuestros esfuerzos a enlazar los mejores técnicos en cada campo de la informática con usuarios y empresas que necesiten en un momento crucial la asistencia.
            Creemos que el tiempo es oro, y por eso nuestros técnicos están capacitados para trabajar de la manera más rápida y eficiente.</p>
          
    </div>
    <div id="img1">

        <img src="img/tindware.png" alt="Los fundadores" width="500" height="400">

    </div>
    <div id="qns">
        <h2>¿Por qué nuestro servicio?</h2>
            <p>Nos centramos en ofrecer un servicio de calidad, orientado hacia todas las personas. Creemos que es importante que una sociedad tenga
            conocimientos en informática, ya que un futuro completamente informatizado está a la vuelta de la esquina.
            Por tanto, estamos plantando la semilla de un futuro sin preocupaciones, en el cuál un simple mensaje de texto o una llamada teléfonica
            ponga a tu disposicion a los mejores técnicos del mercado.</p>
            <p>Además queremos ser unfa fuente de oprtunidades para aquellas personas con dificultades para encontrar un empleo pueda tener un oportunidad en este mercado en 
                expansión</p>
    </div>
    <div id="img2">

        <img src="img/servicio.jpg" alt="Los fundadores" width="550" height="400">

    </div>
    <div id="sci">
        <h2>Ofecemos todos los servicios en el campo de la informática.</h2>
            <p>Como hemos comentado anteriormente, ofrecemos servicios de mantenimiento hardware, desarrollo web, entre otros, orientado
            tanto a particulares como a empresas. Un auténtico soporte 365 dias al año, distinto, real. </p>
            <p>Sin necesitas más información, no dudes en ponerte en contacto con nosotros.</p>  
            <div id="secundario">
    <form>
        <table>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>Correo electrónico*</td>
                            <td><input type="email" name="email"></td>                                
                        </tr>
                        <tr>
                        <td>Observaciones</td>
                        <td><textarea name="observaciones" cols="18" rows="5"></textarea></td>
                        </tr>
                        <tr><td colspan="2" ><input type="submit" value="Enviar" class="submit"></td></tr>

                    </table>
                </td>
            </tr>
        </table>
    </form>



</div>

    </div>
    <div id="img3">

        <img src="img/servicio2.jpg" alt="Los fundadores" width="600" height="300">

    </div>          
    <div id="img4">
                <h2>Los fundadores de la empresa</h2>
                
             <img src="img/photo.jpg" alt="Los fundadores" width="500" height="500">
            
    </div>
 


</body>

</html>
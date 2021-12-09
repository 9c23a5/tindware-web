## Ejemplo header
![Ejemplo header](https://github.com/9c23a5/tindware-web/blob/main/ejemplo_header.png?raw=true)
## Enlaces
[Header Prospects](https://www.prospects.ac.uk/)

[Hired](https://hired.com/)

## Para añadir virtual host en XAMMP a tindware-web
1. Abrimos notepad como administrador
2. Archivo > Abrir > C:\Windows\System32\drivers\etc > hosts (hay que seleccionar Todos los archivos (\*.\*))
3. Añadimos la siguiente nueva linea al final ``127.0.0.1 tindware-web.local``
4. Guardamos
5. En la consola de XAMMP, presionamos el boton Config en la linea de Apache, seleccionamos httpd.conf
6. Al final del todo, copiamos este codigo. Cambia "C:\Users\mikeldi14\dev\tindware-web" por tu ruta
```
NameVirtualHost *
<VirtualHost *>
  DocumentRoot "C:\xampp\htdocs"
  ServerName localhost
</VirtualHost>
<VirtualHost *>
  DocumentRoot "C:\Users\mikeldi14\dev\tindware-web"
  ServerName tindware-web.local
  <Directory "C:\Users\mikeldi14\dev\tindware-web">
    Require all granted
  </Directory>
</VirtualHost>
```
7. Guardamos y (re)iniciamos Apache
8. Para acceder a nuestro proyecto, una vez iniciado Apache y MySQL introducimos  º en nuestro navegador

## [BEST ENLACE PARA HACER UN BUEN QS JEJE](https://linkiafp.es/blog/profesiones-informatica/)

En nuestra compañia contamos con profesionales en todas las ramas de la informatica.
servicio de mantenimiento y reparacion de hardware y perifericos(teclados, ratones, switches,etc...)
diseñadores web: mediante lenguajes como css, html, javascript, y framewoks como jquery, etc... se encargaran de dar soporte y desarrollar
paginas web segun las indicaciones del cliente.
Para ello, contamos con varios campos en los que seccionamos a nuestros empleados: UX developer,WEBDEVELOPER, MarketingONline. Cada uno de nuestros diseñdores webs
se encuntran segmentados segun su experiencia, desde traine hasta senior.

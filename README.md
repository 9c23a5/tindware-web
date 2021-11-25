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
8. Para acceder a nuestro proyecto, una vez iniciado Apache y MySQL introducimos tindware-web.local en nuestro navegador

# Este repositorio se ha movido a [AnthonyMU/bootstrap-tindware](https://github.com/AnthonyMU/bootstrap-tindware)
Este proyecto ha evolucionado, sobre todo en la parte gráfica, en este otro repositorio. En este queda un CSS hecho a mano (2da evaluación).

# Datos técnicos
## Tablas DB
![Tablas](https://github.com/9c23a5/tindware-web/blob/main/tablas_db.png?raw=true)

## Para añadir virtual host en XAMMP a tindware-web
1. Abrimos notepad como administrador
2. Archivo > Abrir > C:\Windows\System32\drivers\etc > hosts (hay que seleccionar Todos los archivos (\*.\*))
3. Añadimos la siguiente nueva linea al final ``127.0.0.1 tindware-web.local``
4. Guardamos
5. En la consola de XAMMP, presionamos el boton Config en la linea de Apache, seleccionamos httpd.conf
6. Al final del todo, copiamos este codigo. Cambia ``"C:\Users\mikeldi14\dev\tindware-web"`` por tu ruta y ``tindware-web.local`` por la URL que quieras.
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
7. Guardamos y abrimos httpd-ssl.conf
8. Copiamos este codigo al final, al igual que antes cambiamos la ruta/URL. (Es lo mismo pero con :443) **NECESARIO PARA MAPA TECNICOS**
```
<VirtualHost *:443>
  DocumentRoot "C:\Users\mikeldi14\dev\tindware-web"
  ServerName tindware-web.local
  <Directory "C:\Users\mikeldi14\dev\tindware-web">
    Require all granted
  </Directory>
</VirtualHost>
```
8. Guardamos y (re)iniciamos Apache
9. Para acceder a nuestro proyecto, una vez iniciado Apache y MySQL introducimos ``tindware-web.local`` (o la URL que queramos escoger) en nuestro navegador

<?php
# Constantes para los span con class=hidden
define ('HIDE', "<span class='hidden'>");
define ('HIDECLOSE', "</span>");
if (str_contains(PHP_OS, 'WINNT')) {
    # Conexion a mysql de XAMPP
    define ('MYSQL_PASSWD', null);
}
else {
    # Conexion a mysql de producción
    define ('MYSQL_PASSWD', getenv('MYSQL_ROOT'));
}
?>
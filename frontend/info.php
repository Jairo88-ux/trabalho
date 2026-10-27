<?php
echo "Arquivo php.ini: " . php_ini_loaded_file() . "<br>";
echo "MySQLi carregado: ";
var_dump(extension_loaded("mysqli"));
?>
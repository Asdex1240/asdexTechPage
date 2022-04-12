<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    $conexion=mysqli_connect("localhost","root","","asdexTechPage") or die("No se pudo conectar con el servidor de BD");
    mysqli_select_db($conexion, "asdexTechPage") or die("No se pudo conectar a la base de datos");
?>

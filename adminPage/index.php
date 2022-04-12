<?php
include('../conexion.php');
include('../sesion.php');
require_once("../admin/configurations.php");
echo $_SESSION["usuario"];
require_once("./adminHead.php");
require_once("./adminHeader.php");
require_once("./footerAdmin.php");
?>
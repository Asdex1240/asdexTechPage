<?php
include('../admin/conexion.php');
include('../admin/sesion.php');
require_once("../admin/configurations.php");
require_once("./adminHead.php");
require_once("./adminHeader.php");
if($pagina=="home" || $pagina=="" || $pagina=="inicio"){
    require_once("./HomeAdmin.php");
}else if($pagina=="apk"){
    require_once("./anadir.php");
}else if($pagina=="admin"){
    require_once("./anadir.php");
}else if($pagina=="blog"){
    require_once("./anadir.php");
}else if($pagina=="header"){
    require_once("./anadir.php");
}else if($pagina=="proyectos"){
    require_once("./anadir.php");
}else if($pagina=="teamMembers"){
    require_once("./anadir.php");
}else if($pagina=="crud"){
    require_once("./crud.php");
}else{
    ?>
    <h1>Error, vuelve a intentarlo</h1>
    <?php
    require_once("./HomeAdmin.php");
}
require_once("./footerAdmin.php")
?>
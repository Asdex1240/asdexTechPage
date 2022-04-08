<?php
    require_once("./assets/admin/conexion.php");
    require_once("./configurations.php");
    require_once("./head.php"); 
    require_once("./header.php");
    /*Validaciones para la pagina */
    if($pagina=="home" || $pagina=="" || $pagina=="inicio"){
        require_once("./contenidoHome.php");
    }elseif($pagina=="blog"){
        require_once("./blog.php");
    }elseif($pagina=="contact"){
        require_once("./contact.php");
    }elseif($pagina=="faq"){
        require_once("./faq.php");
    }elseif($pagina=="service"){
        require_once("./service.php");
    }elseif($pagina=="about"){
        require_once("./about.php");
    }elseif($pagina=="blog-single"){
        require_once("./blog-single.php");
    }elseif($pagina=="service-details"){
        require_once("./service-details.php");
    }elseif($pagina=="team"){
        require_once("./team.php");
    }elseif($pagina=="team-details"){
        require_once("./team-details.php");
    }else if($pagina=="admin"){
        require_once("./assets/admin/admin.php");
    }else{
        require_once("./404.php");
    }
    require_once("./footer.php");
?>
 

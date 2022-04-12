<?php
    require_once("./admin/conexion.php");
    require_once("./admin/configurations.php");
    require_once("./pages/head.php"); 
    require_once("./pages/header.php");
    /*Validaciones para la pagina */
    if($pagina=="home" || $pagina=="" || $pagina=="inicio"){
        require_once("./pages/contenidoHome.php");
    }elseif($pagina=="blog"){
        require_once("./pages/blog.php");
    }elseif($pagina=="contact"){
        require_once("./pages/contact.php");
    }elseif($pagina=="faq"){
        require_once("./pages/faq.php");
    }elseif($pagina=="service"){
        require_once("./pages/service.php");
    }elseif($pagina=="about"){
        require_once("./pages/about.php");
    }elseif($pagina=="blog-single"){
        require_once("./pages/blog-single.php");
    }elseif($pagina=="service-details"){
        require_once("./pages/service-details.php");
    }elseif($pagina=="team"){
        require_once("./pages/team.php");
    }elseif($pagina=="team-details"){
        require_once("./team-details.php");
    }else if($pagina=="admin"){
        require_once("./admin/admin.php");
    }else{
        require_once("./404.php");
    }
    require_once("./pages/footer.php");
?>
 

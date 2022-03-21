<?php
    require_once("./configurations.php");
    require_once("./head.php");

    /*Header*/
    if($pagina=="home" || $pagina=="" || $pagina=="inicio" || $pagina=="about" || $pagina=="service" || $pagina=="blog" || $pagina=="blog-single" || $pagina=="faq" || $pagina=="team" || $pagina=="contacto"){
        require_once("./header.php");
    }
    /*Validaciones para la pagina */
    if($pagina == "home" || $pagina == "" || $pagina == "inicio"){
        require_once("./contenidoHome.php");
    }else if($pagina == "about"){
        require_once("./about.php");
    }else if($pagina == "service"){
        require_once("./service.php");
    }else if($pagina == "blog"){
        require_once("./blog.php");
    }else if($pagina == "blog-single"){
        require_once("./blog-single.php");
    }else if($pagina == "faq"){
        require_once("./faq.php");
    }else if($pagina == "team"){
        require_once("./team.php");
    }else if($pagina == "contacto"){
        require_once("./contact.php");
    }

    /*Footer */
    if($pagina=="home" || $pagina=="" || $pagina=="inicio" || $pagina=="about" || $pagina=="service" || $pagina=="blog" || $pagina=="blog-single" || $pagina=="faq" || $pagina=="team" || $pagina=="contacto"){
        require_once("./footer.php");
    } 
?>
 

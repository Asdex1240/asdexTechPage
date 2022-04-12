<?php
    session_start();
    //Evaluo que la sesion contunue verificando una de las variables creadas en control.php, cuando esta ya no coincida con su 
    //valir inicial, se redirije al archivo de salir.php
    if(!$_SESSION["autentificado"]){
        header("Location: logout.php");
    }
?>
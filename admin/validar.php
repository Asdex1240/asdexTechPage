<?php
include('conexion.php');
$x = $_POST["usuario"];
$y = $_POST["contrasena"];

$sql = "SELECT * FROM admin WHERE usuario='$x' AND contrasena='$y'";
$ejecutar_consulta = mysqli_query($conexion,$sql) or die("No se pudo ejecutar la consulta en la BD");
$filas = mysqli_num_rows($ejecutar_consulta);
if($filas){
    //inicio la sesion
    session_start();
    //Declaro mis variables de sesion
    $_SESSION["autentificado"] = true;
    $_SESSION["usuario"] = $_POST["usuario"];
    header("Location: ../adminPage/index.php");
}else{
    echo("Datos incorrectos");
    header("Location: ../adminPage/index.php");
}
?>

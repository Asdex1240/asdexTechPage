<?php
include('../admin/conexion.php');
$x = 'admin';
$sql = "SELECT * FROM $x";
$ejecutar_consulta = mysqli_query($conexion,$sql) or die("No se pudo ejecutar la consulta en la BD");
while($registro = mysqli_fetch_array($ejecutar_consulta)){
    echo $registro["id"]." - ".$registro["usuario"]."<br />";
}

$sql = "SHOW COLUMNS FROM $x;";
$ejecutar_consulta = mysqli_query($conexion,$sql) or die("No se pudo ejecutar la consulta en la BD");
while($registro = mysqli_fetch_array($ejecutar_consulta)){
    echo $registro["Field"]." - ".$registro["Type"]."<br />";
}
?>
<table class="table is-striped is-narrow is-hoverable is-fullwidth">
    <thead>
        <tr>
            <?php
                $showCol = "SHOW COLUMNS FROM $x;";
                $ejecutar_consulta = mysqli_query($conexion,$showCol) or die("No se pudo ejecutar la consulta en la BD");
                while($registro = mysqli_fetch_array($ejecutar_consulta)){
            ?>
                <th style="width:auto%"><?php echo $registro["Field"]; ?></th>
            <?php
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
            $selectFrom = "SELECT * FROM $x;";
            $ejecutar_consulta = mysqli_query($conexion,$selectFrom) or die("No se pudo ejecutar la consulta en la BD");
            while($registro = mysqli_fetch_array($ejecutar_consulta)){
        ?>
        <tr>              
                <td><?php echo $registro['id'] ?></td>
                <td><?php echo $registro['usuario'] ?></td>
                <td><?php echo $registro['contrasena'] ?></td>

                <?php
            }
                ?>
        </tr>
    </tbody>
</table>

<div class="table-container" style="width:95%;margin:0 auto 0 auto;">
    <br><br>

    <br><br>
    <table class="table is-striped is-narrow is-hoverable is-fullwidth">
        <thead>
            <tr>
                <h3 class="title">Hola <?php echo $_SESSION["usuario"]; ?>. </p>
                <?php
                    $x = $_GET["pagina"];
                    $showColumn = "SHOW COLUMNS FROM $x;";
                    $ejecutar_consulta = mysqli_query($conexion,$showColumn) or die("No se pudo ejecutar la consulta en la BD");
                ?>
                <?php while($registro = mysqli_fetch_array($ejecutar_consulta)){
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
                <?php 
                if($x == 'admin'){?>
                        <td><?php echo $registro['usuario'] ?></td>
                        <td><?php echo $registro['contrasena'] ?></td>
                    <?php
                }else if($x == 'apk'){?>
                        <td><?php echo $registro['nombre'] ?></td>
                        <td><?php echo $registro['logo'] ?></td>
                        <td><?php echo $registro['archivo'] ?></td>
                        <td><?php echo $registro['descrip'] ?></td>
                        <td><?php echo $registro['activo'] ?></td>
                    <?php
                }else if($x == 'teamMembers'){?>
                        <td><?php echo $registro['name'] ?></td>
                        <td><?php echo $registro['img'] ?></td>
                    <?php
                }else if($x == 'blog'){?>
                        <td><?php echo $registro['tittle'] ?></td>
                        <td><?php echo $registro['img'] ?></td>
                        <td><?php echo $registro['descrip'] ?></td>
                    <?php
                }else if($x == 'proyectos'){?>
                        <td><?php echo $registro['nombre'] ?></td>
                        <td><?php echo $registro['email'] ?></td>
                        <td><?php echo $registro['detalle'] ?></td>
                    <?php
                }?>
                <?php
            }
                ?>
        </tr>
    </tbody>
  </table>
  <li class="">
    <a href="?pagina=crud" class="btn btn-black">
    Editar
    </a>
    </li>
</div>
<br><br>
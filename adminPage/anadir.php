<div class="table-container" style="width:95%;margin:0 auto 0 auto;">
<br><br>

<br><br>
  <table class="table is-striped is-narrow is-hoverable is-fullwidth">
    <thead>
        <tr>
        <h3 class="title">Hola <?php echo $_SESSION["usuario"]; ?>. </p>
            <?php
                $x = $_GET["pagina"];
                $sql = "SHOW COLUMNS FROM $x;";
                $ejecutar_consulta = mysqli_query($conexion,$sql) or die("No se pudo ejecutar la consulta en la BD");
            ?>
            <?php while($registro = mysqli_fetch_array($ejecutar_consulta)){
            ?>
            <th style="width:auto%"><?php echo $registro["Field"]; ?></th>
            <?php
            }
            mysqli_close($conexion) or die("Ocurrio un error al cerrar la conexion a la BD");  
            ?>
        </tr>
    </thead>
    
    <tbody id="tbodyMenu">
        <tr>
            <td>hola</td>

        </tr>
    </tbody>
  </table>
  <div class="buttons">
  <button type="button" class="button is-primary is-medium modal-button" data-target="modal-fall" id="nuevoMenu">Nuevo</button>
</div>
</div>
<br><br>
<div id="modal-fall" class="modal modal-fx-fall ">
    <div class="modal-background"></div>
    <div class="modal-content">
        <!-- content -->
        <div class="box">
            <div class="content bd-snippet-preview"> 
                <h3>Datos Del Menu</h3>
                <div class="field">
                    <label class="label">Descripcion</label>
                    <div class="control">
                        <input class="input" type="text" id="descripcion">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Liga</label>
                    <div class="control">
                        <input class="input" type="text" id="liga">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Estatus</label>
                    <div class="control">
                        <div class="select">
                        <select id="estatus">
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <footer class="card-footer">
                    <button type="button" class="card-footer-item" id="saveMenu">Guardar</button>
                    <button type="button" class="card-footer-item" style="display:none;" id="edit">Actualizar</button>
                </footer>
            </div>
        </div>
        <!-- end content -->
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>
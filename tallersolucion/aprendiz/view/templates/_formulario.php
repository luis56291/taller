<center>
  <form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <!--Formulaario de registro -->
    <div>
      <!--select de Tipo Id-->
      <div>
        <label>Tipo de Identificacion:</label></br>
        <select name="idTipoId" required>
          <option>-Seleccionar-</option>
          <?php foreach ($TID as $dato): ?>
            <option value="<?php echo $dato['cod_causa'] ?>" <?php echo ($dato['desc_causa'] == 1) ? 'selected' : '' ?> ><?php echo $dato['estado'] ?></option>
          <?php endforeach ?>
        </select>
      </div> 
      </br>
      <!--input de id-->
      <div>
        <div class="">
          <label for="txtId">Numero de Identificacion:</label>
        </div>
        <div>
          <input type="text" value="<?php echo ((isset($txtId)) ? $txtId : '') ?>" id="txtId" name="txtId" class="campo" placeholder="Insert ID" required min="10" max="15">
        </div>
      </div>
      <!--input de nombre-->
      <div>
        <div class="">
          <label for="txtNombre">Nombre:</label>
        </div>
        <div>
          <input  type="text" value="<?php echo ((isset($txtDescripcin)) ? $txtDescripcion : '') ?>" id="txtDescripcion" name="txtNombre" class="campo" placeholder="Insert Name" required min="10" max="25">
        </div>
      </div>
      <!--input de apellido-->
      <div>
        <div class="floatLeft">
          <label for="txtApellido">Apellido:</label>
        </div>
        <div>
          <input  type="text" value="<?php echo ((isset($txtEstado)) ? $txtEstado : '') ?>" id="txtEstado" name="txtApellido" class="campo" placeholder="Insert LastName" required min="10" max="25">
        </div>
      </div>
      <!--select de Genero-->
     
    <button type="submit" class="boton_enviar">Registrar</button>

    <div id="backform">
      <nav>
        <div class="backbutton">
          <li><a href="index.php">aprendiz</a></li>
        </div>
      </nav>
    </div>
  </form>
</center>
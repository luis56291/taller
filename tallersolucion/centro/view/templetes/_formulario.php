<form method="post" action="<?php echo $formAction ?>" enctype="">
  <div>
    <div>
      <div class="floatLeft">
        <label for="cod_centro">codigo centro</label>
      </div>
      <div>
        <input type="text"  id="cod_centro" name="cod_centro" required min="" max="20">
      </div>
    </div>
    <div>
      <div class="floatLeft">
        <label for="desc_centro">descripcion centro</label>
      </div>
      <div>
        <input type="text"  id="desc_centro" name="desc_centro" required min="" max="40">
      </div>
      <div>
      <div class="floatLeft">
        <label for="telefono">telefono</label>
      </div>
      <div>
        <input type="text"  id="telefono" name="telefono" required min="" max="11">
      </div>
      <div>
      <div class="floatLeft">
        <label for="direccion">direccion</label>
      </div>
      <div>
        <input type="text"  id="direccion" name="direccion" required min="" max="30">
      </div>
      <div>
      <div class="floatLeft">
        <label for="cod_ciudad">codigo ciudad</label>
      </div>
      <div>
        <input type="text"  id="cod_ciudad" name="cod_ciudad" required min="" max="20">
      </div>
    </div>
    <div>
     <a href="index.php">Volver</a>
    <button type="submit">Registrar</button>
  </div>
</form>
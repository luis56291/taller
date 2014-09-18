<form method="post" action="<?php echo $formAction ?>" enctype="">
  <div>
    <div>
      <div class="floatLeft">
        <label for="cod_causa">codigo causa</label>
      </div>
      <div>
        <input type="text"  id="cod_causa" name="cod_causa" required min="" max="20">
      </div>
    </div>
    <div>
      <div class="floatLeft">
        <label for="desc_causa">descripcion causa</label>
      </div>
      <div>
        <input type="text"  id="desc_causa" name="desc_causa" required min="" max="40">
      </div>
        <div>
      <div class="floatLeft">
        <label>estado</label>
      </div>
      <div>
        <input type="radio" name="rdoActivado" id="activo" value="activo" <?php echo ((isset($rdoActivado)) ? (($rdoActivado === 'activo') ? 'checked' : '') : '') ?> activo
        <input type="radio" name="rdoActivado" id="inactivo" value="inactivo" <?php echo ((isset($rdoActivado)) ? (($rdoActivado === 'inactivo') ? 'checked' : '') : '') ?>inactivo
      </div>
    </div>
    <div>
     <a href="index.php">Volver</a>
    <button type="submit">Registrar</button>
  </div>
</form>
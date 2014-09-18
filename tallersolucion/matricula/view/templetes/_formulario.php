<form method="post" action="<?php echo $formAction ?>" enctype="">
  <div>
    <div>
      <div class="floatLeft">
        <label for="num_ficha">numero</label>
      </div>
      <div>
        <input type="text"  id="num_ficha" name="num_ficha" required min="5" max="20">
      </div>
    </div>
    <div>
      <div class="floatLeft">
        <label for="id_apre">id aprendiz</label>
      </div>
      <div>
        <input type="text" id="id_apre" name="id_apre" required min="5" max="20">
      </div>
    </div>
     <div>
      <div class="floatLeft">
        <label for="id_apre">id aprendiz</label>
      </div>
      <div>
     <div>
      <div class="floatLeft">
        <label>estado</label>
      </div>
      <div>
        <input type="radio" name="rdoActivado" id="activo" value="activo" <?php echo ((isset($rdoActivado)) ? (($rdoActivado === 'activo') ? 'checked' : '') : '') ?> activo
        <input type="radio" name="rdoActivado" id="inactivo" value="inactivo" <?php echo ((isset($rdoActivado)) ? (($rdoActivado === 'inactivo') ? 'checked' : '') : '') ?>inactivo
      </div>
     <a href="index.php">Volver</a>
    <button type="submit">Registrar</button>
  </div>
</form>
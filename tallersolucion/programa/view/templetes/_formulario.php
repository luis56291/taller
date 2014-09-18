<form method="post" action="<?php echo $formAction ?>" enctype="">
  <div>
    <div>
      <div class="floatLeft">
        <label for="cdrh">cod</label>
      </div>
      <div>
        <input type="text" id="cdrh" name="cdrh" required min="5" max="20">
      </div>
    </div>
    <div>
      <div class="floatLeft">
        <label for="dcrh">desc</label>
      </div>
      <div>
        <input type="text" id="dcrh" name="dcrh" required min="5" max="20">
      </div>
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
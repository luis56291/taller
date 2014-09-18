<form method="post" action="<?php echo $formAction ?>" enctype="">
  <div>
    <div>
      <div class="floatLeft">
        <label for="cdrh">cod_rh</label>
      </div>
      <div>
        <input type="text"  id="cdrh" name="cdrh" required min="5" max="20">
      </div>
    </div>
    <div>
      <div class="floatLeft">
        <label for="dcrh">desc_rh</label>
      </div>
      <div>
        <input type="text"  id="dcrh" name="dcrh" required min="5" max="20">
      </div>
    </div>
    <div>
     <a href="index.php">Volver</a>
    <button type="submit">Registrar</button>
  </div>
</form>
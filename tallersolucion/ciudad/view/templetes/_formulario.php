<form method="post" action="<?php echo $formAction ?>" enctype="">
  <div>
    <div>
      <div class="floatLeft">
        <label for="cod_ciudad">codigo ciudad</label>
      </div>
      <div>
        <input type="text"  id="cod_ciudad" name="cod_ciudad" required min="" max="20">
      </div>
    </div>
    <div>
      <div class="floatLeft">
        <label for="nom_ciudad">nombre ciudad</label>
      </div>
      <div>
        <input type="text"  id="nom_ciudad" name="nom_ciudad" required min="" max="30">
      </div>
      <div>
      <div class="floatLeft">
        <label for="cod_depto">codigo departamento</label>
      </div>
      <div>
        <input type="text"  id="cod_depto" name="cod_depto" required min="" max="20">
      </div>
      <div>
      <div class="floatLeft">
        <label for="habitantes">habitantes</label>
      </div>
      <div>
        <input type="text"  id="habitantes" name="habitantes" required min="" max="11">
      </div>
    </div>
    <div>
     <a href="index.php">Volver</a>
    <button type="submit">Registrar</button>
  </div>
</form>
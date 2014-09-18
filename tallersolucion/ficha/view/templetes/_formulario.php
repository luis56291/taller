<form method="post" action="<?php echo $formAction ?>" enctype="">
  <div>
    <div>
      <div class="floatLeft">
        <label for="num_ficha">numero ficha</label>
      </div>
      <div>
        <input type="text"  id="num_ficha" name="num_ficha" required  max="11">
      </div>
    </div>
    <div>
      <div class="floatLeft">
        <label for="cod_programa">codigo programa</label>
      </div>
      <div>
        <input type="text"  id="cod_programa" name="cod_programa" required min="5" max="20">
      </div>
        <div>
      <div class="floatLeft">
        <label for="fecha_ini">fecha inicio</label>
      </div>
      <div>
        <input type="text"  id="fecha_ini" name="fecha_ini" required min="5" max="20">
      </div>
        <div>
      <div class="floatLeft">
        <label for="fecha_fin">fecha fin</label>
      </div>
      <div>
        <input type="text"  id="fecha_fin" name="fecha_fin" required min="5" max="20">
      </div>
       <div>
      <div class="floatLeft">
        <label for="cod_centro">cod centro</label>
      </div>
      <div>
        <input type="text"  id="cod_centro" name="cod_centro" required min="5" max="20">
      </div>
    </div>
    <div>
     <a href="index.php">Volver</a>
    <button type="submit">Registrar</button>
  </div>
</form>
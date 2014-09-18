<form method="post" action="<?php echo $formAction ?>" enctype="">
  <div>
    <div>
      <div class="floatLeft">
        <label for="num_doc">numero documento</label>
      </div>
      <div>
        <input type="text" id="num_doc" name="num_doc" required min="" max="11">
      </div>
    </div>
    <div>
      <div class="floatLeft">
        <label for="fecha_doc">fecha</label>
      </div>
      <div>
        <input type="text" id="fecha_doc" name="fecha_doc" required min="" max="">
      </div>
      <div>
      <div class="floatLeft">
        <label for="id_aprendiz">id aprendiz</label>
      </div>
      <div>
        <input type="text" id="id_aprendiz" name="id_aprendiz" required min="" max="20">
      </div>
      <div>
      <div class="floatLeft">
        <label for="num_ficha">numero de ficha</label>
      </div>
      <div>
        <input type="text" id="num_ficha" name="num_ficha" required min="" max="11">
      </div>
      <div>
      <div class="floatLeft">
        <label for="cod_causa">codigo cusa</label>
      </div>
      <div>
        <input type="text" id="cod_causa" name="cod_causa" required min="" max="20">
      </div>
      <div>
      <div class="floatLeft">
        <label for="fecha_desercion">fecha de desercion</label>
      </div>
      <div>
        <input type="text" id="fecha_desercion" name="fecha_desercion" required min="" max="">
      </div>
      <div>
      <div class="floatLeft">
        <label for="fase">fase</label>
      </div>
      <div>
        <input type="text" id="fase" name="fase" required min="" max="20">
      </div>
    </div>
    <div>
     <a href="index.php">Volver</a>
    <button type="submit">Registrar</button>
  </div>
</form>
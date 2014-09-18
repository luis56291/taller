<form method="post" action="<?php echo $formAction ?>" enctype="">
  <div>
    <div>
      <div class="floatLeft">
        <label for="cod_depto">codigo departamento</label>
      </div>
      <div>
        <input type="text"  id="cod_depto" name="cod_depto" required min="" max="20">
      </div>
    </div>
    <div>
      <div class="floatLeft">
        <label for="nom_depto">nombre departamento</label>
      </div>
      <div>
        <input type="text"  id="nom_depto" name="nom_depto" required min="" max="30">
      </div>
    </div>
    <div>
     <a href="index.php">Volver</a>
    <button type="submit">Registrar</button>
  </div>
</form>
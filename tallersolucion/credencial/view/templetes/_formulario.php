<form method="post" action="<?php echo $formAction ?>" enctype="">
  <div>
    <div>
      <div class="floatLeft">
        <label for="id">id</label>
      </div>
      <div>
        <input type="text"  id="id" name="id" required min="" max="11">
      </div>
    </div>
    <div>
      <div class="floatLeft">
        <label for="nombre">nombre</label>
      </div>
      <div>
        <input type="text"  id="nombre" name="nombre" required min="" max="50">
      </div>
    </div>
    <div>
     <a href="index.php">Volver</a>
    <button type="submit">Registrar</button>
  </div>
</form>
<form method="post" action="<?php echo $formAction ?>" enctype="">
  <div>
    <div>
      <div class="floatLeft">
        <label for="id">id</label>
      </div>
      <div>
        <input type="text"  id="id" name="id" required min="5" max="20">
      </div>
    </div>
    <div>
      <div class="floatLeft">
        <label for="nombre">nombre</label>
      </div>
      <div>
        <input type="text"  id="nombre" name="nombre" required  max="80">
      </div>
    </div>
     <div>
      <div class="floatLeft">
        <label for="id_loc">id localidad</label>
      </div>
      <div>
        <input type="text"  id="id_loc" name="id_loc" required  max="40">
      </div>
    </div>
    <div>
     <a href="index.php">Volver</a>
    <button type="submit">Registrar</button>
  </div>
</form>
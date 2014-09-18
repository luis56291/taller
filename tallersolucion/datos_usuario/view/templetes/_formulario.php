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
        <label for="usuario_id">id usuario</label>
      </div>
      <div>
        <input type="text"  id="usuario_id" name="usuario_id" required min="" max="11">
      </div>
       <div>
      <div class="floatLeft">
        <label for="nombre">nombre</label>
      </div>
      <div>
        <input type="text"  id="nombre" name="nombre" required min="" max="80">
      </div>
       <div>
      <div class="floatLeft">
        <label for="apellidos">apellidos</label>
      </div>
      <div>
        <input type="text"  id="apellidos" name="apellidos" required min="" max="80">
      </div>
       <div>
      <div class="floatLeft">
        <label for="direccion">direccion</label>
      </div>
      <div>
        <input type="text"  id="direccion" name="direccion" required min="" max="1024">
      </div>
       <div>
      <div class="floatLeft">
        <label for="telefono">telefono</label>
      </div>
      <div>
        <input type="text"  id="telefono" name="telefono" required min="" max="20">
      </div>
       <div>
      <div class="floatLeft">
        <label for="localidad_id">id de localidad</label>
      </div>
      <div>
        <input type="text"  id="localidad_id" name="localidad_id" required min="" max="11">
      </div>
    </div>
    <div>
     <a href="index.php">Volver</a>
    <button type="submit">Registrar</button>
  </div>
</form>
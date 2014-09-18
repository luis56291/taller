<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
  <div>
    <div>
      <div class="floatLeft">
        <label for="id">id</label>
      </div>
      <div>
        <input type="text" id="id" name="id" required min="5" max="20">
      </div>
    </div>
    <div>
     <div>
    <div>
      <div class="floatLeft">
        <label for="usuario_id">Usuario_</label>
      </div>
      <div>
        <input type="text"  id="usuario_id" name="usuario_id" required min="5" max="20">
      </div>
    </div>
    <div>
     <div>
    <div>
      <div class="floatLeft">
        <label for="credencial_id">credencial_</label>
      </div>
      <div>
        <input type="text"  id="credencial_id" name="credencial_id" required min="5" max="20">
      </div>
     <div>
    <a href="index.php">Volver</a>
    <button type="submit">Registrar</button>
  </div>
</form>
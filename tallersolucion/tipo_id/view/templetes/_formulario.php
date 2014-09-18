<form method="post" action="<?php echo $formAction ?>" enctype="">
  <div>
    <div>
      <div class="floatLeft">
        <label for="cod">cod</label>
      </div>
      <div>
        <input type="text" id="cod" name="cod" required min="5" max="20">
      </div>
    </div>
    <div>
      <div class="floatLeft">
        <label for="desc">desc</label>
      </div>
      <div>
        <input type="text" id="desc" name="desc" required min="5" max="20">
      </div>
    </div>
    <div>
     <a href="index.php">Volver</a>
    <button type="submit">Registrar</button>
  </div>
</form>
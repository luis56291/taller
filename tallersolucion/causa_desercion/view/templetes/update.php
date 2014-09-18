<!DOCTYPE html>
<html lang="es">
  <head>
    <title></title>
    <link rel="stylesheet" href="css/formulario.css">
    <meta charset="UTF-8">
  </head>
  <body>
    <h1>Modificar usuario</h1>
    <?php if (isset($error)): ?>
      <div class="error"><?php echo $error ?></div>
    <?php endif ?>

    <?php if (isset($success)): ?>
      <div class="success"><?php echo $success ?></div>
    <?php endif ?>
    <?php include '_formulario.php'; ?>
  </body>
</html>
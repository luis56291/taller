>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Gestión de usuario_credencial</title>
    <link rel="stylesheet" media="screen" href="css/main.css">
  </head>
  <body>
    <h1>usuario de credendial</h1>
    <div id="lnkNuevo">
      <a href="index.php?action=create">Nuevo</a>
    </div>
    <?php if (isset($error)): ?>
      <div class="error"><?php echo $error ?></div>
    <?php endif ?>

    <?php if (isset($success)): ?>
      <div class="success"><?php echo $success ?></div>
    <?php endif ?>
    <table id="tblContenido">
      <thead>
        <tr>
          <th>id</th>
          <th>usuario_id</th>
          <th>credencial_id</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($datos as $row): ?>
          <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['usuario_id'] ?></td>
             <td><?php echo $row['credencial_id'] ?></td>
            <td><a href="index.php?action=update&amp;id=<?php echo $row['id'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;id=<?php echo $row['id'] ?>">Eliminar</a></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </body>
</html>
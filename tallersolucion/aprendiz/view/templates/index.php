<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Gestión de aprendiz</title>
    <link rel="stylesheet" media="screen" href="css/main.css">
  </head>
  <body>
    <h1>Gestión de Aprendiz</h1>
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
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Telefono</th>
          <th>Cod_ciudad</th>
          <th>cod_rh</th>
          <th>cod_tipo_id</th>
          <th>Genero</th>
          <th>Edad</th>
          <th>acciones</th>

        </tr>
      </thead>
      <tbody>
        <?php foreach ($datos as $row): ?>
          <tr>
            <td><?php echo $row['id_apre'] ?></td>
            <td><?php echo $row['nom_apre'] ?></td>
            <td><?php echo $row['apell_apre'] ?></td>
            <td><?php echo $row['tel_apre'] ?></td>
            <td><?php echo $row['cod_ciudad'] ?></td>
            <td><?php echo $row['cod_rh'] ?></td>
            <td><?php echo $row['cod_tipo_id'] ?></td>
            <td><?php echo $row['genero'] ?></td>
            <td><?php echo $row['edad'] ?></td>

            <td><a href="index.php?action=update&amp;id=<?php echo $row['id_apre'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;id=<?php echo $row['id_apre'] ?>">Eliminar</a></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </body>
</html>
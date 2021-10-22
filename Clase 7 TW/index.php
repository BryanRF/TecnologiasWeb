<?php
include('conexion/conexion.php');
$result = mysqli_query($conexion, 'SELECT * FROM usuario');
?>
<!doctype html>
<html lang="en">

<head>
  <title>Formulario de inicio</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    .n {
      margin-top: 100px;
    }
  </style>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
  <div class="container justify-items-center n">
    <div class="row">
      <div class="col-xs-12 col-lg-3 bw-1 border border-primary" >
        <form action="add.php" method="POST" class="m-5">
          <h1 class="text-center"><strong>Nuevo usuario</strong></h1>
          <br>
          <input type="text" required placeholder="Nombre" name="animal" class="form-control">
          <br>
          <input type="submit" value="Agregar" class="btn btn-outline-primary btn-block">
        </form>
      </div>
      <div class="col-xs-12 col-lg-8 p-3">
        <table class="table">
          <thead class="thead-dark">
           <thead><h1 class="text-center"><strong>LISTADO DE USUARIOS REGISTRADOS</strong></h1></thead>
            <tr>
              <th scope="col">Cod</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result as $row) { ?>
              <tr>
                <td><?php echo $row['codUsu']; ?></td>
                <td><?php echo $row['nomUsu'] ?></td>
                <td><?php echo $row['apeUsu'] ?></td>
                <td><a href="edit.php?id=<?php echo $row['codUsu'] ?>" class="btn btn-outline-primary">Editar</a></td>
                
                <td><a href="delite.php?id=<?php echo $row['codUsu'] ?>" class="btn btn-outline-danger">Eliminar</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
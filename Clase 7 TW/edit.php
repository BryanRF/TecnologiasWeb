<?php
error_reporting(0);
include 'conexion/conexion.php';
$id = $_GET['id'];
$result = mysqli_query($conexion, "select * from usuario where codUsu = '$id'");
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellidos'];

  $resultt = mysqli_query($conexion, "update usuario set nomUsu = '$nombre', apeUsu='$apellido' where codUsu = '$id'");
  if ($resultt) {
    header('location:index.php');
  }
}

?>

<!doctype html>
<html lang="es">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    .n {
      margin-top: 100px;
      justify-content: center;
    }
  </style>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
  <div class="container  p-5">
    <div class="row n">
      <div class="col-xs-12 col-lg-5 border border-primary ">
        <form method="POST" class="m-5">
          <h1 class="text-center"><strong>Editar usuario</strong></h1>
          <br>
          <label for="Código" class="form-label">Código: </label>
          <input type="text" readonly="true" placeholder="<?php echo $row['codUsu']; ?>" class="form-control">
          <br>
          
          <label for="Nombre" class="form-label">Nombres: </label>
          <input type="text" placeholder="Nombre" value="<?php echo $row['nomUsu']; ?>" name="nombre" class="form-control">

          <br>
          <label for="Apellidos" class="form-label">Apellidos: </label>
          <input type="text" placeholder="Apellidos" value="<?php echo $row['apeUsu']; ?>" name="apellidos" class="form-control">
          <br>
          <input type="submit" name="editar" value="Editar" class="btn btn-primary btn-block">
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
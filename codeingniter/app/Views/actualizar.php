<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body>
<div class="container">
<h1>Actualizar registro</h1>
<div class="row">
<div class="col-sm-12">
<form method="POST" action="<?php echo base_url('/index.php/actualizar") ?>">
<input type="hidden" name="id" id="id" value="<?php echo $id ?>">
<label for="nombre">Nombre:</label>
<input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre?>" required>
<label for="apaterno">Apellido paterno:</label>
<input type="text" name="apaterno" id="apaterno" class="form-control" value="<?php echo Sapaterno ?>" required>
<label for="amaterno">Apellido materno: </label>
<input type="text" name="amaterno" id="amaterno" class="form-control" value="<?php echo $amaterno ?>" required>
<button class="btn btn-warning form-control">Editar</button>
</form>
</div>
</div>
</div>
</body>
</html>

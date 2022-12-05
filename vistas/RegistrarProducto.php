<?php
    session_start();

    require "db.php";
    $db = new db();
    $connection = $db->connect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../formulario.css">
    <link rel="icon" href="../images/joya.ico">
</head>

<body>
  <center>
<a class="navbar-brand" href="../index.html"><img id="logo" src="../images/joya.ico"> &nbsp;&nbsp;&nbsp;AZULEA</a>
    <div class="container">  
        <br>
        <h1>Nuevo Producto</h1>
        <br>  <br><br><br>
<form action="AgregarProducto.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">

    <label for="Categoria" class="form-label">Seleccione una categoria del Producto</label><br>

    <select class="form-select" id="Categoria" name="categoria">
        <option>Collares</option>
        <option>Aretes</option>
        <option>Anillos</option>
        <option>Accesorios Hombre</option>
    </select>


  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre del Producto</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>

  
  <div class="mb-3">
    <label for="descripcion " class="form-label">Descripcion  del Producto</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion">
  </div>

    
  <div class="mb-3">
    <label for="Foto" class="form-label">Foto</label>
    <input type="file" class="form-control" id="Foto" name="Foto">
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>  
    <a href="home.php" class="btn btn-info">Regresar</a>

</form>
</div>
</center>
</body>

</html>
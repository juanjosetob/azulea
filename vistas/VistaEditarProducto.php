<?php
    session_start();
    include 'db.php';
    $db = new db();
    $connection = $db->connect();
    $id_producto = $_GET['id_producto'];

    $consulta = "SELECT*FROM productos WHERE id_producto =:id_producto" ;
    $resultado = $connection->prepare($consulta);
    $resultado -> bindParam(':id_producto',$id_producto);
    $Fila = $resultado->execute();
    $producto = $resultado -> fetch(PDO::FETCH_ASSOC);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="../images/joya.ico">
</head>

<body>
    <div class="container">
        <br>
        <center>
            <h1>Modificar Producto</h1>
        </center>

        <form action="EditarProducto.php?idEditar=<?php echo $producto["id_producto"]?>" method="POST" enctype="multipart/form-data">
  <div class="mb-3">

    <label for="Categoria" class="form-label">Seleccione una categoria del Producto</label>

    <select class="form-select" id="Categoria" name="categoria" value="<?php echo $producto['categoria']?>" >
        <option>Collares</option>
        <option>Aretes</option>
        <option>Anillos</option>
        <option>Accesorios Hombre</option>
    </select>


  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre del Producto</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $producto['nombre']?>">
  </div>

  
  <div class="mb-3">
    <label for="descripcion " class="form-label">Descripcion  del Producto</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $producto['descripcion']?>">
  </div>

  <td><img style="width:200px;" src="data:image/jpg;base64,<?php echo base64_encode($producto['Foto'])?>" alt=""></td>
    
  <div class="mb-3">
    <label for="Foto" class="form-label">Foto</label>
    <input type="file" class="form-control" id="Foto" name="Foto" >
  </div>

  <button type="submit" class="btn btn-primary">Actualizar</button>  
    <a href="home.php" class="btn btn-info">Regresar</a>

</form>



    </div>
</body>

</html>
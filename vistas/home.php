<?php
session_start();
require 'db.php';
$db = new db();
$connection = $db->connect();

$consulta = $connection->prepare("SELECT*FROM productos");
$resultado = $consulta ->execute();
$resultado = $consulta ->fetchAll();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido</title>
    <link rel="stylesheet" type="text/css" href="../style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="../images/joya.ico">
</head>

<body>

<header>
            <nav class="navbar">
                <div class="contenedor">
                    
                    <H1 style="text-align: left;">BIENVENIDO!@</H1>
                    
                    <a href="login.php">CERRAR SESION</a>
                </div>
            </nav>
            
        </header>


    <div class="container">
        <br>
        <center>
            <h1>Lista de productos</h1>

        </center>
        <br>
        <div class="container">
            <br>
            <br>
            <p>
            <a href="RegistrarProducto.php" class="btn btn-dark" >Agregar</a>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    


                    foreach ($resultado as $key => $Fila) {
                        
                    
                    ?>
                        <tr>
                            <th scope="row"><?php echo $Fila['id_producto']?></th>
                            <td><?php echo $Fila['categoria']?></td>
                            <td><?php echo $Fila['nombre']?></td>
                            <td><?php echo $Fila['descripcion']?></td>
                            <td><img style="width:200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila
                            ['Foto'])?>" alt=""></td>
                            <td>
                                <a href="VistaEditarProducto.php?id_producto=<?php echo $Fila["id_producto"]?>"; class="btn btn-warning">Editar</a>
                                <a href="EliminarProducto.php?id_producto=<?php echo $Fila["id_producto"]?>"; class="btn btn-danger">Eliminar</a>
                            </td>

                        </tr>

                </tbody>
            <?php } ?>
            </table>

        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
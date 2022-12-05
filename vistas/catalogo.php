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
                    <a class="navbar-brand" href="../index.html"><img id="logo" src="../images/favicon.png"> &nbsp;&nbsp;&nbsp;AZULEA</a>
                    <a href="./catalogo.php">CATEGORIA</a>
                    <a href="../politicas.html">POLITICAS</a>
                    <a href="../Catálogo.pdf">CATOLOGO</a>
                    <a href="./login.php">CORPORATIVO</a>
                </div>
            </nav>
            
        </header>

        <br>
        <center>
            <h1 class="title">Lista de productos</h1>

        </center>
        <br>
        <div class="container">

                        
        <?php
                    


                    foreach ($resultado as $key => $Fila) {
                        
                    
                    ?>
                        <div class="card">
                            <br>
                        <label for="id_Producto" class="form-label">Codigo:
                            <?php echo $Fila['id_producto']?></label>
                            <br>

                        <img style="width:200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila
                            ['Foto'])?>" alt="">

                            <label for="id_Producto" class="form-label">Categoria:
                            <?php echo $Fila['categoria']?></label>
                            <br>
                            <label for="id_Producto" class="form-label">Marca:
                            <?php echo $Fila['nombre']?></label>
                            <br>
                            <label for="id_Producto" class="form-label">Descripcion:
                            <?php echo $Fila['descripcion']?></label>
                            <br>                       
                            </div>

                        

                
            <?php } ?>
            

            </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
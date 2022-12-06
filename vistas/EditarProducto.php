<?php
    session_start();
    include 'db.php';
    $db = new db();
    $connection = $db->connect();

error_reporting(1);

$id_producto = $_GET['idEditar'];

$categoria = $_POST['categoria'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
// $Foto = addslashes(file_get_contents($_POST['Foto']['tmp_name']));

$EditarProducto = "UPDATE productos SET
categoria = :categoria,
nombre = :nombre,
descripcion = :descripcion
WHERE id_producto = :id_producto";

$resultado = $connection->prepare($EditarProducto);
$resultado -> bindParam(':categoria',$categoria);
$resultado -> bindParam(':nombre',$nombre);
$resultado -> bindParam(':descripcion',$descripcion);
// $resultado -> bindParam(':Foto',$Foto);
$resultado -> bindParam(':id_producto',$id_producto);

if ($resultado->execute()){
    header('Location:home.php');
}
else{
    echo "No se actualizo el dato";
}

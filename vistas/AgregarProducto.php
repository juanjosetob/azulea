<?php
session_start();
include 'db.php';
$db = new db();
$connection = $db->connect();

    $categoriaproducto = $_POST["categoria"];
    $nombreproducto = $_POST["nombre"];
    $descripcionproducto = $_POST["descripcion"];
    $imagen = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));

    $RegistrarProducto = "INSERT INTO productos ( categoria , nombre , descripcion , Foto) VALUES (:categoriaproducto,:nombreproducto,:descripcionproducto,:imagen)";

    $resultado = $connection->prepare($RegistrarProducto);
    $resultado -> bindParam(':categoriaproducto',$categoriaproducto);
    $resultado -> bindParam(':nombreproducto',$nombreproducto);
    $resultado -> bindParam(':descripcionproducto',$descripcionproducto);
    $resultado -> bindParam(':imagen',$imagen);
    
    if($resultado->execute()){
        header('Location:home.php');
    }else{
        echo "No se registraron los datos";
    }

?>
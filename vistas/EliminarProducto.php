<?php

    session_start();
    include "db.php";

    $db = new db();
    $connection = $db->connect();


    $id_producto = $_GET['id_producto'];

    $EliminarProducto = "DELETE FROM productos WHERE id_producto =:id_producto";

    $resultado = $connection -> prepare($EliminarProducto);
    $resultado -> bindParam(':id_producto',$id_producto);
    

    if($resultado->execute()){
        header("Location:home.php");

    }else{
        echo "No se elimino el registro";
    }

?>
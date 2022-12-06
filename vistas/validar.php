<?php
        require "db.php";
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];

        $db = new db();
        $connection = $db->connect();
        
        $query = $connection->prepare("SELECT * FROM usuarios WHERE usuario=:usuario");
        $query->execute(["usuario"=>$usuario]);

        $consulta = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach($consulta as $key => $value){
            if ($_POST["usuario"]==$value["usuario"]) {
                if ($_POST["password"]==$value["password"]) {
                    session_start();
                    $_SESSION["usuario"] = $value["nombre"];
                    header("location:home.php");
                } else {
                    header("location:login.php");
                }
            } else {
                header("location:login.php");
            }
        }
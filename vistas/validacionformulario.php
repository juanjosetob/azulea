<?php
    $nombre=$_POST["nombre"];
    $peticion=$_POST["text"];
    $email=$_POST["email"];


    if (!strlen($nombre)>0) {
        echo("campo vacio");
    }
    if (!strlen($peticion)>0) {
        echo("permitidas solo hasta 100 palabras");
    }
    if (!strpos($email,'@')>0) {
        echo("el correo electronico debe contener @");
    }
?>

<?php
    echo(" <h1> señor@ $nombre registramos su informacion con exito, gracias por escribirnos </h1>");
    echo("<br>");
    echo("Analizaremos su solicitud");
?>
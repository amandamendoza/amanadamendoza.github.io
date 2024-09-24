<?php

    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];
    $escuela = $_GET["escuela"];
    $clase_fav = $_GET["clase_fav"];
    $orientacion = $_GET["orientacion"];
    //obtienen los valores

    if($edad > 18){
        echo "<h1>".$nombre." es mayor de edad</h1>";
    } else {
        echo "<h1>".$nombre." NO es mayor de edad</h1>";
    }
    
    echo "<h1>Nombre del Alumno: ".$nombre."</h1>";

    echo "<h2>Edad: ".$edad."</h2>";

    echo "<h2>Escuela: ".$escuela."</h2>";

    echo "<h2>clase fav: ".$clase_fav." </h2>";

    echo "<h2> orientacion sexual: ".$orientacion."</h2>";

    //Imprimir el valor de esos campos

?>
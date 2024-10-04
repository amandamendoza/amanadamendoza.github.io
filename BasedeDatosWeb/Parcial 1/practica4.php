<?php
    $aciertos = 0;

    // Verificación si las respuestas están seteadas en el formulario
    $pregunta1 = isset($_POST["pregunta1"]) ? $_POST["pregunta1"] : '';
    $pregunta2 = isset($_POST["pregunta2"]) ? $_POST["pregunta2"] : '';
    $pregunta3 = isset($_POST["pregunta3"]) ? $_POST["pregunta3"] : [];
    $pregunta4 = isset($_POST["pregunta4"]) ? $_POST["pregunta4"] : '';
    $pregunta5 = isset($_POST["pregunta5"]) ? $_POST["pregunta5"] : '';
    $pregunta6 = isset($_POST["pregunta6"]) ? $_POST["pregunta6"] : '';
    $pregunta7 = isset($_POST["pregunta7"]) ? $_POST["pregunta7"] : '';
    $pregunta8 = isset($_POST["pregunta8"]) ? $_POST["pregunta8"] : [];
    $pregunta9 = isset($_POST["pregunta9"]) ? $_POST["pregunta9"] : '';
    $pregunta10 = isset($_POST["pregunta10"]) ? $_POST["pregunta10"] : '';

    // Pregunta 1
    echo "<h3>1. ¿Cuál es el nombre real de Iron Man?</h3>";
    echo "<h5>Respuesta seleccionada: ".$pregunta1." ---- Correcta = Tony Stark</h5>";
    if($pregunta1 == "Tony Stark"){
        $aciertos++;
        echo "<img src='correcta.png' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    // Pregunta 2
    echo "<h3>2. ¿Cuál es el nombre del martillo de Thor?</h3>";
    echo "<h5>Respuesta seleccionada: ".$pregunta2." ---- Correcta = Mjolnir</h5>";
    if(strtoupper($pregunta2) == "MJOLNIR"){
        $aciertos++;
        echo "<img src='correcta.png' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    // Pregunta 3 (Respuesta múltiple)
    $p3_respuestas_correctas = 0;
    echo "<h3>3. ¿Cuál es el superpoder de Hulk? (Selecciona 2)</h3>";
    echo "<h5>Respuestas seleccionadas: ".implode(", ", $pregunta3)." ---- Correctas = Fuerza sobrehumana, Resistencia sobrehumana</h5>";
    if(is_array($pregunta3) && count($pregunta3) == 2){
        foreach($pregunta3 as $respuesta){
            if($respuesta == "Fuerza_sobrehumana" || $respuesta == "Resistencia_sobrehumana"){
                $p3_respuestas_correctas++;
            }
        }
        if($p3_respuestas_correctas == 2){
            $aciertos++;
            echo "<img src='correcta.png' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.png' width='50px'><hr>";
        }
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    // Pregunta 4
    echo "<h3>4. ¿Quién es el líder de los Vengadores?</h3>";
    echo "<h5>Respuesta seleccionada: ".$pregunta4." ---- Correcta = Capitán América</h5>";
    if(strtoupper($pregunta4) == "CAPITAN AMERICA"){
        $aciertos++;
        echo "<img src='correcta.png' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    // Pregunta 5
    echo "<h3>5. ¿Cuál es el verdadero nombre de Black Widow?</h3>";
    echo "<h5>Respuesta seleccionada: ".$pregunta5." ---- Correcta = Natasha Romanoff</h5>";
    if($pregunta5 == "Natasha Romanoff"){
        $aciertos++;
        echo "<img src='correcta.png' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    // Pregunta 6
    echo "<h3>6. ¿Cómo se llama la tecnología que usa Tony Stark para crear su traje?</h3>";
    echo "<h5>Respuesta seleccionada: ".$pregunta6." ---- Correcta = Tecnología Arc Reactor</h5>";
    if($pregunta6 == "Tecnología_Arc_Reactor"){
        $aciertos++;
        echo "<img src='correcta.png' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    // Pregunta 7
    echo "<h3>7. ¿En qué película aparece por primera vez Black Panther?</h3>";
    echo "<h5>Respuesta seleccionada: ".$pregunta7." ---- Correcta = Capitán América: Civil War</h5>";
    if($pregunta7 == "Capitán_América_Civil_War"){
        $aciertos++;
        echo "<img src='correcta.png' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    // Pregunta 8 (Respuesta múltiple)
    $p8_respuestas_correctas = 0;
    echo "<h3>8. ¿Son armas del universo de Marvel? (Selecciona 2)</h3>";
    echo "<h5>Respuestas seleccionadas: ".implode(", ", $pregunta8)." ---- Correctas = Mjolnir, Escudo</h5>";
    if(is_array($pregunta8) && count($pregunta8) == 2){
        foreach($pregunta8 as $respuesta){
            if($respuesta == "Mjolnir" || $respuesta == "Escudo"){
                $p8_respuestas_correctas++;
            }
        }
        if($p8_respuestas_correctas == 2){
            $aciertos++;
            echo "<img src='correcta.png' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.png' width='50px'><hr>";
        }
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    // Pregunta 9
    echo "<h3>9. ¿Cómo se llama el planeta natal de Thanos?</h3>";
    echo "<h5>Respuesta seleccionada: ".$pregunta9." ---- Correcta = Titán</h5>";
    if($pregunta9 == "Titan"){
        $aciertos++;
        echo "<img src='correcta.png' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    // Pregunta 10
    echo "<h3>10. ¿Quién es el padre biológico de Peter Quill (Star-Lord)?</h3>";
    echo "<h5>Respuesta seleccionada: ".$pregunta10." ---- Correcta = Ego</h5>";
    if(strtoupper($pregunta10) == "EGO"){
        $aciertos++;
        echo "<img src='correcta.png' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    // Calificación final
    echo "<h3>Calificación Final = " . ($aciertos * 10) . "%</h3>";
?>

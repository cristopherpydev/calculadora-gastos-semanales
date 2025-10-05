<?php
    $lunes = (float) $_POST['lunes'];
    $martes = (float) $_POST['martes'];
    $miercoles = (float) $_POST['miercoles'];
    $jueves = (float) $_POST['jueves'];
    $viernes = (float) $_POST['viernes'];
    $sabado = (float) $_POST['sabado'];
    $domingo = (float )$_POST['domingo'];

    $gastos = array("Lunes" => $lunes, "Martes" => $martes, "Miércoles" => $miercoles, "Jueves" => $jueves, "Viernes" => $viernes, "Sábado" => $sabado, "Domingo" => $domingo);
    $gastos_copia = $gastos; //la copia la utilizaré para la 2º analítica
    //primera analítica: día que más ha gastado - se ordena en reversa para conseguir el par clave-valor más alto
    arsort($gastos);
    $clave = key($gastos);
    echo "<hr>";
    echo "<h1> Día que más se ha gastado </h1>";
    echo "<p>" . $clave . ": " . $gastos[$clave] . "</p>";
    echo "<hr>";
    //segunda analítica: día que menos se ha gastado - se ordena de manera que salga el par clave-valor más pequeño
    asort($gastos_copia);
    $clave = key($gastos_copia);
    echo "<h1> Día que menos se ha gastado </h1>";
    echo "<p>" . $clave . ": " . $gastos[$clave] . "</p>";
    echo "<hr>";
    //tercera analítica: promedio diario de gastos
    $promedio = 0;
    foreach($gastos as $clave => $valor){
        $promedio+=$valor;
    }
    $total = $promedio;
    $promedio/=7;
    echo "<h1> Promedio diario </h1>";
    echo "<p> Promedio diario: "  . $promedio . "</p>";
    echo "<hr>";
    //cuarta analítica: total de gastos
    echo "<h1> Total de gastos </h1>";
    echo "<p> Promedio diario: "  . $total . "</p>";



?>
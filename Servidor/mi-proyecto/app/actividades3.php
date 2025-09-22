<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Ejercicio 1</h1>";
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

        $meses_invertidos = array_reverse($meses);

        for ($i = count($meses_invertidos) - 1; $i >= 0; $i--) {
            echo $meses_invertidos[$i] . "<br>";
        }

        echo "<h1>Ejercicio 2</h1>";
        $numeros = array();

        for ($i = 0; $i < 10; $i++) {
            $numeros[] = rand(1, 100);
        }

        rsort($numeros);

        foreach ($numeros as $num) {
            echo $num . "<br>";
        }

        echo "<h1>Ejercicio 3</h1>";

        $primeros = array_splice($meses, 0, 2);
        $meses = array_merge($meses, $primeros);

        echo implode("<br>", $meses); // le he preguntado a la IA como imprimir un array sin usar bucle, más rapido para mi

        echo "<h1>Ejercicio 4</h1>";
        $numeros = [];
        for ($i = 0; $i <= 20; $i++) {
            if ($i % 2 == 0) {
                $numeros[] = $i;
            }
        }

        echo implode("<br>", $numeros); 

        echo "<h1>Ejercicio 5</h1>";
        $num = 9;
        $factorial = 1;
        for ($i = 1; $i <= $num; $i++) {
            $factorial = $factorial * $i;
        }

        echo "El factorial de $num es: $factorial";

        echo "<h1>Ejercicio 6</h1>";
        $edades = [14, 18, 19, 25, 84, 45, 87, 56, 28, 9, 35, 64];

        foreach ($edades as $edad) {
            if ($edad < 18 || $edad > 65) {
                echo "La persona de $edad esta fuera del rango de edad<br>";
            }
        }

        echo "<h1>Ejercicio 7</h1>";
        foreach ($edades as $edad) {
            if ($edad > 67) {
                echo "La persona de $edad años tiene mas de 67 años<br>";
            }
        }

        echo "<h1>Ejercicio 8</h1>";
        foreach ($edades as $edad) {
            if ($edad < 15) {
                echo "La persona de $edad años tiene menos de 15 años<br>";
            }
        }


        echo "<h1>Ejercicio 9</h1>";
        $minValue = min($edades);
        $posicion = array_search($minValue, $edades); // he buscado con ia estas dos funciones

        echo "El elemento menor es $minValue y está en la posición $posicion del array de edades";

        echo "<h1>Ejercicio 10</h1>"; // he tenido ue buscar info, no he podido hacerlo sin ayuda
        $matriz = array(); 

        for ($fila = 0; $fila < 6; $fila++) {
            $matriz[$fila] = array();

            for ($columna = 0; $columna < 6; $columna++) {
                $matriz[$fila][$columna] = rand(0, 100);
            }
        }

        echo "<table border='1'>";

        for ($fila = 0; $fila < 6; $fila++) {
            echo "<tr>";

            for ($columna = 0; $columna < 6; $columna++) {
                echo "<td>" . $matriz[$fila][$columna] . "</td>";
            }

            echo "</tr>";
        }

        echo "</table>";


    ?>   
</body>
</html>
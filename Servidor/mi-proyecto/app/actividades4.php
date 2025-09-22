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
        $tabla = array();
        $contador = 1;

        for ($fila = 0; $fila < 10; $fila++) {
            for ($columna = 0; $columna < 10; $columna++) {
                $tabla[$fila][$columna] = $contador;
                $contador++;
            }
        }

        echo "<table border='1'>";

        for ($fila = 0; $fila < 10; $fila++) {
            echo "<tr>";
            for ($columna = 0; $columna < 10; $columna++) {
                echo "<td>" . $tabla[$fila][$columna] . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";

        echo "<br>";

        // tabla 2

        $tabla = array();
        $letraO = "O";

        for ($fila = 0; $fila < 20; $fila++) {
            for ($columna = 0; $columna < 10; $columna++) {
                $tabla[$fila][$columna] = $letraO;
            }
        }

        echo "<table border='1'>";

        for ($fila = 0; $fila < 20; $fila++) {
            echo "<tr>";
            for ($columna = 0; $columna < 10; $columna++) {
                echo "<td>" . $tabla[$fila][$columna] . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";

        echo "<h1>Ejercicio 2</h1>";
        $ventas = array(
            123.45, 234.56, 345.67, 456.78, 567.89,
            678.90, 789.01, 890.12, 901.23, 1012.34,
            1123.45, 1234.56, 1345.67, 1456.78, 1567.89,
            1678.90, 1789.01, 1890.12, 1901.23, 2012.34
        );

        $media = array_sum($ventas) / count($ventas); // he buscado con ia si existia alguna funcion que sume el array
        echo "La media de las ventas es: $media";

        echo "<h1>Ejercicio 3</h1>";
        $nombres = array("roberto", "juan", "marta", "moria", "martin", "jorge", "miriam", "nahuel", "mirta");

        $nombresFiltrados = array();
        foreach ($nombres as $nombre) {
            if (substr($nombre, 0, 1) === "m") { // he buscado como hacer eso
                $nombresFiltrados[] = $nombre;
            }
        }

        echo implode(", ", $nombresFiltrados); // ya lo habia usado en otro ejercicio, una maravilla

        echo "<h1>Ejercicio 4</h1>";
        $numeros = array(10, 2, 3, 14, 15, 1, 7, 9, 8, 11);

        $maxValue = max($numeros);
        $minValue = min($numeros);

        echo "El mayor valor es: $maxValue<br>";
        echo "El menor valor es: $minValue<br>";

        echo "<h1>Ejercicio 5</h1>";
        $archivos = scandir("fotos");

        foreach ($archivos as $img) {
            if ($img != "." && $img != "..") {
                echo "<img src=\"fotos/$img\" alt=\"Foto\" style=\"width:150px; height:150px; margin:5px;\" />";
            }
        }

    ?>   
</body>
</html>
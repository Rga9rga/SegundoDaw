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

        $primeros = array_splice($meses, 0, 4);
        $meses = array_merge($meses, $primeros);

        print_r($meses);

        echo "<h1>Ejercicio 4</h1>";


        echo "<h1>Ejercicio 5</h1>";


        echo "<h1>Ejercicio 6</h1>";


        echo "<h1>Ejercicio 7</h1>";


        echo "<h1>Ejercicio 8</h1>";


        echo "<h1>Ejercicio 9</h1>";


        echo "<h1>Ejercicio 10</h1>";


    ?>   
</body>
</html>
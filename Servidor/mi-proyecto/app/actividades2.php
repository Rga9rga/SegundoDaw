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
        $nombres = array('Jacinto', 'Juanjo', 'Mamu', 'Totodile', 'Chad');

        print_r($nombres);
        echo "<br>";

        array_splice($nombres, 2, 0, 'Carlos');

        print_r($nombres);
        echo "<br>";

        $numeros = array();
        for ($i = 1; $i <= 10; $i++) {
            $numeros[] = $i;
        }

        echo "<h1>Ejercicio 2</h1>";
        foreach ($nombres as $nombre) {
            echo "Conozco a alguien llamado " . $nombre . "<br>";
        }

        echo "<br>";

        foreach ($numeros as $numero) {
            echo "El doble de " . $numero . " es " . $numero*2 . "<br>";
        }

        echo "<br>";

        function mostrarCapitales($paises) {
            foreach ($paises as $pais => $capital) {
                echo "La capital de $pais es $capital.<br>";
            }
        }

        $paises = [
            "España" => "Madrid",
            "Francia" => "París",
            "Italia" => "Roma",
            "Alemania" => "Berlín"
        ];

        mostrarCapitales($paises);


        echo "<h1>Ejercicio 3</h1>";
        
        function getFirstElement ($array) {
            return $array[0];
        }


        function getLastElement ($array) {
            return $array[count($array) - 1];
        }

        echo "Primer elemento: " . getFirstElement($nombres) . "<br>";
        echo "Último elemento: " . getLastElement($nombres) . "<br>";

        $enteros = [-3, 5, 7, -2, 8, 1, -4, 6];

        echo "<br>";

        echo "Lista de numeros enteros positivos";

        foreach ($enteros as $positivo) {
            if ($positivo > 0) {
                echo "<br>" . $positivo;
            }
        }

        echo "<h1>Ejercicio 4</h1>";

        $modulos = [
            "Explotamientos informaticos" => "Davit",
            "Base de datos" => "Em si Safont",
            "Programacion" => "Mejor no lo digo",
            "Entornos" => "Joan Fifagusti",
            "Digitalishashion" => "Clersh"
        ];

        foreach ($modulos as $modulo => $profesor) {
            echo "El profesor de $modulo es $profesor.<br>";
        }

        echo "<br>";

        $notas = array(
            array ("Jacinto" => array ("matematicas" => 7, "ingles" => 9, "programacion" => 5)),
            array ("Juanjo" => array ("matematicas" => 5, "ingles" => 4, "programacion" => 2)),
            array ("Totodile" => array ("matematicas" => 6, "ingles" => 6, "programacion" => 4))
        );

        foreach ($notas as $alumno) {
            foreach ($alumno as $nombre => $asignaturas) {
                echo "Nota media de $nombre:<br>";
                $suma = 0;
                $cantidadAsignaturas = count($asignaturas);

                foreach ($asignaturas as $asignatura => $nota) {
                    $suma += $nota;
                }

                $media = $suma / $cantidadAsignaturas;

                echo $media;

                echo "<br>";
            }
        }

        echo "<h1>Ejercicio 5</h1>";

        $tecnologias = ['HTML', 'CSS', 'JavaScript', 'Python'];

        print_r($tecnologias);

        array_splice($tecnologias, 2, 0, 'PHP'); 

        print_r($tecnologias);

        echo "<br>";

        $frutas = [
            "Manzana" => 1.50,
            "Pera" => 2.00,
            "Plátano" => 1.20,
            "Kiwi" => 3.00
        ];

        echo "Array ordenado por clave (ksort):<br>";
        ksort($frutas);
        print_r($frutas);

        echo "<br>Array ordenado por valor (asort):<br>";
        asort($frutas);
        print_r($frutas);


        
    ?>
    
</body>
</html>
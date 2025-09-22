<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Botones Actividades</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #f0f4f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .button-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 200px;
        }
        a.button {
            display: block;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            border-radius: 8px;
            font-weight: 600;
            box-shadow: 0 4px 6px rgb(0 123 255 / 0.4);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        a.button:hover {
            background-color: #0056b3;
            box-shadow: 0 6px 8px rgb(0 86 179 / 0.6);
        }
    </style>
</head>
<body>
    <div class="button-container">
        <a href="actividades1.php" class="button">Actividades 1</a>
        <a href="actividades2.php" class="button">Actividades 2</a>
        <a href="actividades3.php" class="button">Actividades 3</a>
        <a href="formularios.php" class="button">Formularios</a>
        
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion MySQL</title>
</head>

<body>
    Usado para testear conexión con la base de datos
    <br>
    <?php 
        $enlace = mysqli_connect("localhost", "root", "", "formulario");

        if (! $enlace) {
            die("No se pudo conectar con la base de datos unu" . mysqli_connect_error()); // mysqli_error()
        }

        echo "Lessgggooooo";
        mysqli_close($enlace);
    ?>
</body>

</html>
<?php
    $db_host        =   "localhost";
    $db_user        =   "root";
    $db_password    =   "";
    $db_name        =   "formulario";
    $db_table_name  =   "estudiantes";

    $db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if (!$db_connection) {
        die('No se pudo conectar a la base de datos.' . mysqli_connect_error());
    }

    $nombre = $_POST['nombre']; // la info llega con POST, así como pasaba en django.
    $edad = $_POST['edad'];     // me pregunto si habrá post.get, para manejar los null

    $ya_existe = mysqli_query($db_connection, "SELECT * FROM $db_table_name WHERE Nombre = ".'"'.$nombre.'"');

    // si existe alguien con ese nombre, pues no lo podemos ingresar (sólo por intentar)
    if (mysqli_num_rows($ya_existe) > 0) {

        header('Location: Fail.html');

    } else {

        // edad es int
        $insert_value = "INSERT INTO `$db_name`.`$db_table_name` (`Nombre` , `Edad`) VALUES (" . '"'. $nombre . '", ' . $edad . ')';  

        mysqli_select_db($db_connection, $db_name);
        $retry_value = mysqli_query($db_connection, $insert_value);

        if (!$retry_value) {
            die('Error: ' . mysqli_error($db_connection));
        }
            
        header('Location: Success.html');
    }

    mysqli_close($db_connection);
		
?>
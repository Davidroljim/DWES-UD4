<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    //Se establece la conexion con la bd
    @$mysqli= mysqli_connect('localhost','developer','developer','agenciaviajes');
    $error = mysqli_connect_errno($mysqli);
    if ($error!=null) {
        echo "<p>Error $error conectando a la base de datos:",mysqli_connect_error(),"</p>";
        exit();
    }


    //Borrar una fila
    $result = mysqli_query($mysqli, "DELETE FROM `vuelos` WHERE ModeloAvion='sfqw-2332'");
    if ($result==false) {
        echo "La consulta no ha funcionado correctamente";
    }else {
        //muestra el número de filas afectadas
        echo "Se han borrado ", mysqli_affected_rows($mysqli)," filas.";
        echo "<br>";
    }


    //Insertar una fila
    
    $result = mysqli_query($mysqli, "INSERT INTO `vuelos` (Origen, Destino, Fecha, Companya, ModeloAvion) VALUES ('Sevilla', 'Las Vegas', '2021-10-21 11:45:52', 'IBERIA', 'A350+')");
    if ($result==false) {
        echo "La consulta no ha funcionado correctamente";
    }else {
        echo "Se han insertado ", mysqli_affected_rows($mysqli), " filas.";
        echo "<br>";
        //muestra el número de filas afectadas
        echo "El id del último elemento añadido es ", mysqli_insert_id($mysqli);
        echo "<br>";
    }

    //Actualizar Filas
    $result = mysqli_query($mysqli, "UPDATE `vuelos` SET `Companya`='Vueling' WHERE `id`='7'");
    if ($result==false) {
        echo "La consulta no ha funcionado correctamente";
    }else {
        echo "Se han actualizado ", mysqli_affected_rows($mysqli), " filas.";
        echo "<br>";
    }
    //Se cierra la conexion con la BD
    mysqli_close($mysqli);
?>

</body>
</html>
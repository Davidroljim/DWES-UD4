<?php

function creaConexion (){
    @$mysqli= mysqli_connect('localhost','developer','developer','agenciaviajes');
    $error = mysqli_connect_errno($mysqli);
    if ($error!=null) {
        echo "<p>Error $error conectando a la base de datos:",mysqli_connect_error(),"</p>";
        exit();
    }
}

function creaVuelo (){
    $result = mysqli_query($mysqli, "INSERT INTO `vuelos` (Origen, Destino, Fecha, Companya, ModeloAvion) VALUES ('Madrid', 'Valencia', '2021-10-21 09:16:52', 'IBERIA', 'A350')");
    if ($result==false) {
        echo "La consulta no ha funcionado correctamente";
    }else {
        echo "Se han insertado ", mysqli_affected_rows($mysqli), " filas.";
        echo "<br>";
        //muestra el número de filas afectadas
        echo "El id del último elemento añadido es ", mysqli_insert_id($mysqli);
}

?>
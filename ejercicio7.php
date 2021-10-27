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


    function creaConexion()
    {
        @$mysqli = new mysqli('localhost', 'developer', 'developer', 'agenciaviajes');
        $error = $mysqli -> connect_errno;
        if ($error != null) {
            echo "<p>Error $error conectando a la base de datos:", mysqli_connect_error(), "</p>";
            exit();
        }
        return $mysqli;
    }

    function creaVuelo($origen, $destino, $fecha, $companya, $modeloAvion)
    {
        $retorno = false;
        $mysqli = creaConexion();
        $sql = $mysqli -> query("INSERT INTO `vuelos` (Origen, Destino, Fecha, Companya, ModeloAvion) VALUES (?, ?, ?, ?, ?)");
        $mysqli->stmt_init($mysqli);
        
        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("sssss", $origen, $destino, $fecha, $companya, $modeloAvion);
            $retorno = $stmt->execute($stmt);

            $mysqli->close($stmt);
        }
        return $retorno;
    }

    function modificaDestino($nuevoDestino, $id)
    {
        $mysqli = creaConexion();
        $sql = $mysqli -> query("UPDATE `vuelos` SET `Destino`=? WHERE `id`=?");
        $mysqli->stmt_init($mysqli);
        $retorno = false;

        if ($stmt = $mysqli->prepare($sql)) {

            $stmt->bind_param("si", $nuevoDestino, $id);
            $retorno = $stmt->execute($stmt);

            $mysqli->close($stmt);
        }
        return $retorno;
    }

    function modificaCompanya($nuevaCompanya, $id)
    {
        $mysqli = creaConexion();
        $sql = $mysqli -> query("UPDATE `vuelos` SET `Companya`=? WHERE `id`=?");
        $mysqli->stmt_init($mysqli);
        $retorno = false;

        if ($stmt = $mysqli->prepare($mysqli,$sql)) {

            $stmt->bind_param("si", $nuevaCompanya, $id);
            $retorno = $stmt->execute($stmt);
            $mysqli->close($stmt);        }
        return $retorno;
    }

    function eliminaVuelo($id)
    {

        $mysqli = creaConexion();
        $sql = $mysqli -> query("DELETE FROM `vuelos` WHERE `id`=? ");
        $mysqli->stmt_init($mysqli);
        $retorno = false;

        if ($stmt = $mysqli->prepare($mysqli,$sql)) {

            $stmt->bind_param("i", $id);
            $retorno = $stmt->execute($stmt);

            $mysqli->close($stmt);
        return $retorno;
        }
    }

    function extraeVuelos()
    {
        $mysqli = creaConexion();
        $sql = $mysqli -> query("SELECT * FROM vuelos");
        $mysqli->stmt_init($mysqli);
        $retorno = false;

        if ($stmt = $mysqli->prepare($mysqli,$sql)) {
            $retorno = mysqli_stmt_execute($stmt);

            $stmt->bind_result($stmt, $id, $origen, $destino, $fecha, $companya, $modeloAvion);

            while ($stmt->fetch($stmt)) {
                print "El vuelo con origen $origen y destino $destino tiene fecha prevista $fecha y es operado por la compañía $companya con el modelo de avión $modeloAvion";
                echo "<br>";
                echo "<br>";
            }
            $mysqli->close($stmt);
        return $retorno;
        }
    }

    creaConexion();
    creaVuelo("Sevilla","Barcelona","2021-10-28 14:04:59","IBERIA","Airbus");
    modificaDestino("Sevilla","6");
    modificaCompanya("Vueling","6");
    eliminaVuelo("11");
    extraeVuelos();
    ?>

</body>

</html>
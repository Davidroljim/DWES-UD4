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
        $mysqli = new mysqli('localhost', 'developer', 'developer', 'agenciaviajes');
        $error = $mysqli -> connect_errno;
        if ($error != null) {
            echo "<p>Error $error conectando a la base de datos:", mysqli_connect_error(), "</p>";
            exit();
        } else {
            echo "La conexión se ha establecido correctamente";
            echo "<br>";
            return $mysqli;
        }
    }

    function creaVuelo($origen, $destino, $fecha, $companya, $modeloAvion)
    {
        $mysqli = creaConexion();
        $sql = $mysqli -> query("INSERT INTO `vuelos` (Origen, Destino, Fecha, Companya, ModeloAvion) VALUES (?, ?, ?, ?, ?)");
        $mysqli->stmt_init($mysqli);
        
        $retorno = false;

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
        $sql = "UPDATE `vuelos` SET `Destino`=? WHERE `id`=?";
        $consulta = mysqli_stmt_init($mysqli);
        $retorno = false;

        if ($stmt = mysqli_prepare($mysqli, $sql)) {

            mysqli_stmt_bind_param($stmt, "si", $nuevoDestino, $id);
            $retorno = mysqli_stmt_execute($stmt);

            mysqli_stmt_close($stmt);
        }
        return $retorno;
    }

    function modificaCompanya($nuevaCompanya, $id)
    {
        $mysqli = creaConexion();
        $sql = "UPDATE `vuelos` SET `Companya`=? WHERE `id`=?";
        $consulta = mysqli_stmt_init($mysqli);
        $retorno = false;

        if ($stmt = mysqli_prepare($mysqli, $sql)) {

            mysqli_stmt_bind_param($stmt, "si", $nuevaCompanya, $id);
            $retorno = mysqli_stmt_execute($stmt);

            mysqli_stmt_close($stmt);
        }
        return $retorno;
    }

    function eliminaVuelo($id)
    {

        $mysqli = creaConexion();
        $sql = "DELETE FROM `vuelos` WHERE `id`=? ";
        $consulta = mysqli_stmt_init($mysqli);
        $retorno = false;

        if ($stmt = mysqli_prepare($mysqli, $sql)) {

            mysqli_stmt_bind_param($stmt, "i", $id);
            $retorno = mysqli_stmt_execute($stmt);

            mysqli_stmt_close($stmt);
            return $retorno;
        }
    }

    function extraeVuelos()
    {
        $mysqli = creaConexion();
        $sql = "SELECT * FROM vuelos";
        $consulta = mysqli_stmt_init($mysqli);
        $retorno = false;

        if ($stmt = mysqli_prepare($mysqli, $sql)) {
            $retorno = mysqli_stmt_execute($stmt);

            mysqli_stmt_bind_result($stmt, $id, $origen, $destino, $fecha, $companya, $modeloAvion);

            while (mysqli_stmt_fetch($stmt)) {
                print "El vuelo con origen $origen y destino $destino tiene fecha prevista $fecha y es operado por la compañía $companya con el modelo de avión $modeloAvion";
                echo "<br>";
                echo "<br>";
            }
            mysqli_stmt_close($stmt);
            return $retorno;
        }
    }

    creaConexion();
    creaVuelo("Sevilla","Barcelona","2021-10-28 14:04:59","IBERIA","Airbus");
    //modificaDestino("Sevilla","6");
    //modificaCompanya("Vueling","6");
    //eliminaVuelo("11");
    //extraeVuelos();
    //mysqli_close($mysqli);
    ?>

</body>

</html>
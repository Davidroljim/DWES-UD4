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

    $origen="Huelva";
    $id=6;

    $sql="SELECT * FROM vuelos WHERE Origen=? AND id=?";
    $consulta = mysqli_stmt_init($mysqli);

    if ($stmt= mysqli_prepare($mysqli, $sql)) {
        
        mysqli_stmt_bind_param($stmt, "si", $origen, $id);
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_bind_result($stmt, $id, $origen, $destino, $fecha, $companya, $modeloAvion);
        
        while (mysqli_stmt_fetch($stmt)) {
            print "El vuelo con origen $origen y destino $destino tiene fecha prevista $fecha y es operado por la compañía $companya con el modelo de avión $modeloAvion";

        }
        mysqli_stmt_close($stmt);
    }


    mysqli_close($mysqli);
    ?>

</body>
</html>
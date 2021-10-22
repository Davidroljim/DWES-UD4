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
    @$mysqli= mysqli_connect('localhost','developer','developer','agenciaviajes');
    $error = mysqli_connect_errno($mysqli);
    if ($error!=null) {
        echo "<p>Error $error conectando a la base de datos:",mysqli_connect_error(),"</p>";
        exit();
    }
    $result = mysqli_query($mysqli, "SELECT * FROM `vuelos`");
    var_dump($result);
    echo "<br>";
    echo "<br>";
    if ($result==false) {
        echo "La consulta no ha funcionado correctamente";
    }else {
        echo "<table border=2>";
        while ($fila =mysqli_fetch_assoc($result)) {
            echo "<td>";
            print_r($fila);
            echo "</td>";
            echo "<br>";
            //print_r($fila->Destino);
            
            
        }
        echo "</table>";
        echo "<br>";
        echo "<br>";
        while ($fila =mysqli_fetch_object($result)) {
            print_r($fila);
            echo "<br>";
            print_r($fila->Destino);
            
            
        }

        while ($fila =mysqli_fetch_object($result)) {
            print_r($fila);
            echo "<br>";
            print_r($fila->Destino);
            
            
        }
    }
    //mysqli_fetch_object()
    //mysqli_fetch_array()
    //mysqli_fetch_row()
    mysqli_close($mysqli);
    ?>

</body>
</html>
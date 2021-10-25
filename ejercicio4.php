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
    $result1 = mysqli_query($mysqli, "SELECT * FROM `vuelos`");
    $result2 = mysqli_query($mysqli, "SELECT * FROM `vuelos`");
    $result3 = mysqli_query($mysqli, "SELECT * FROM `vuelos`");
    $result4 = mysqli_query($mysqli, "SELECT * FROM `vuelos`");
    var_dump($result);
    echo "<br>";
    echo "<br>";
    if ($result==false) {
        echo "La consulta no ha funcionado correctamente";
    }else {
        echo "<table border=2>";
        echo "<tr><td>ID</td><td>Origen</td><td>Destino</td><td>Fecha</td><td>Compañia</td><td>ModeloAvion</td></tr>";
        
        while ($fila =mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>";
            echo$fila ["id"];
            echo "</td>";
            echo "<td>";
            echo $fila ["Origen"];
            echo "</td>";
            echo "<td>";
            echo $fila ["Destino"];
            echo "</td>";
            echo "<td>";
            echo $fila ["Fecha"];
            echo "</td>";
            echo "<td>";
            echo $fila ["Companya"];
            echo "</td>";
            echo "<td>";
            echo $fila ["ModeloAvion"];
            echo "</td>";
            echo "<br>";
            echo "</tr>";
        }
        echo "</table>";
        
        echo "<br>";
        echo "<br>";
        echo "<table border=2>";
        echo "<tr><td>ID</td><td>Origen</td><td>Destino</td><td>Fecha</td><td>Compañia</td><td>ModeloAvion</td></tr>";
        
        while ($fila1 =mysqli_fetch_object($result1)) {
            echo "<tr>";
            echo "<td>";
            echo $fila1->id;
            echo "</td>";
            echo "<td>";
            echo $fila1->Origen;
            echo "</td>";
            echo "<td>";
            echo $fila1->Destino;
            echo "</td>";
            echo "<td>";
            echo $fila1->Fecha;
            echo "</td>";
            echo "<td>";
            echo $fila1->Companya;
            echo "</td>";
            echo "<td>";
            echo $fila1->ModeloAvion;
            echo "</td>";
            echo "<br>";
            echo "</tr>";
        }
        echo "</table>";

        echo "<br>";echo "<br>";echo "<br>";echo "<br>";

        echo "<table border=2>";
        echo "<tr><td>ID</td><td>Origen</td><td>Destino</td><td>Fecha</td><td>Compañia</td><td>ModeloAvion</td></tr>";
        
        while ($fila2 =mysqli_fetch_array($result2)) {
            echo "<tr>";
            echo "<td>";
            echo$fila2 ["id"];
            echo "</td>";
            echo "<td>";
            echo $fila2 ["Origen"];
            echo "</td>";
            echo "<td>";
            echo $fila2 ["Destino"];
            echo "</td>";
            echo "<td>";
            echo $fila2 ["Fecha"];
            echo "</td>";
            echo "<td>";
            echo $fila2 ["Companya"];
            echo "</td>";
            echo "<td>";
            echo $fila2 ["ModeloAvion"];
            echo "</td>";
            echo "<br>";
            echo "</tr>";
        }
        echo "</table>";

        echo "<br>";echo "<br>";echo "<br>";echo "<br>";
        echo "<table border=2>";
        echo "<tr><td>ID</td><td>Origen</td><td>Destino</td><td>Fecha</td><td>Compañia</td><td>ModeloAvion</td></tr>";

        while ($fila3=mysqli_fetch_row($result3)) {
            echo "<tr>";
            echo "<td>";
            echo$fila3[0];
            echo "</td>";
            echo "<td>";
            echo $fila3[1];
            echo "</td>";
            echo "<td>";
            echo $fila3 [2];
            echo "</td>";
            echo "<td>";
            echo $fila3 [3];
            echo "</td>";
            echo "<td>";
            echo $fila3 [4];
            echo "</td>";
            echo "<td>";
            echo $fila3 [5];
            echo "</td>";
            echo "<br>";
            echo "</tr>";
        }
        echo "</table>";
    }
    //mysqli_fetch_object()
    //mysqli_fetch_array()
    //mysqli_fetch_row()
    mysqli_close($mysqli);
    ?>

</body>
</html>
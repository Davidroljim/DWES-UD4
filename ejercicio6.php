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
    include "ejercicio6.inc.php";
    creaConexion();
    //creaVuelo("Madrid","Barcelona","2021-10-28 14:04:59","IBERIA","Airbus");
    //modificaDestino("Sevilla","6");
    //modificaCompanya("Vueling","6");
    //eliminaVuelo("11");
    extraeVuelos();
    mysqli_close($mysqli);
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
</head>
<body>
    
    <?php
    $yo="David Roldán,176,78,negro,rojo,marron,2001,masculino,nose,humano";
    $file = fopen("archivo.txt", "r");

    echo "<table border=2>";
    echo "<th>Nombre</th><th>Altura</th><th>Peso</th><th>ColorPelo</th><th>ColorPiel</th><th>ColorOjos</th><th>Edad</th><th>Genero</th><th>Procedencia</th><th>Especie</th>";
    while (feof($file)!=true) {
       
        $datos=fgets($file); 
        list($Nombre, $Altura, $Peso, $ColorPelo, $ColorPiel, $ColorOjos, $Edad, $Genero, $Procedencia, $Especie) = explode(",", $datos);
    echo "<tr>";
    echo "<td>$Nombre</td>";
    echo "<td>$Altura</td>";
    echo "<td>$Peso</td>";
    echo "<td>$ColorPelo</td>";
    echo "<td>$ColorPiel</td>";
    echo "<td>$ColorOjos</td>";
    echo "<td>$Edad</td>";
    echo "<td>$Genero</td>";
    echo "<td>$Procedencia</td>";
    echo "<td>$Especie</td>";
    echo "</tr>";
    
    
        
    }
    echo "</table>";
    fclose($file);

    $file = fopen("archivo.txt", "a");
    fwrite($file, $yo);
    fclose($file);


    
    ?>

</body>
</html>
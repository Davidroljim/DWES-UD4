<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
</head>
<body>
    
    <?php
    $Narray=[];
    $Narray[0]="Los Palacios";
    $Narray[1]="2394234 - 23423424";
    $file = fopen("locations.csv","a");
    
    fputcsv($file, $Narray);
    fclose($file);

    $file = fopen("locations.csv","r+");
    
   
    echo "<table border=2>";
    echo "<tr><th>Location</th><th>Latitude / Longitude</th></tr>";
    while (fgetcsv($file)==true) {
        $array=[];
        $array=(fgetcsv($file));
        echo "<tr>";
        echo "<td>";
        echo $array[0];
        echo "</td>";
        echo "<td>";
        echo $array[1];
        echo "</td>";
        echo "</tr>";
        
    }
    
    echo "</table>";
    fclose($file);
    
    ?>


</body>
</html>
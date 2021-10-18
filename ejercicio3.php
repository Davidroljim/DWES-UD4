<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio3</title>
</head>
<body>
    <?php
    
    if(!$informacion = simplexml_load_file("archivo.xml")){
        echo "No se ha podido cargar el archivo";
    } else {
        //printf("%s","<td>$informacion->title</td>");
        foreach ($informacion as $book){
            echo 'Autor: '.$book->author.'<br>';
            echo 'Título: '.$book->title.'<br>';
            echo 'Género: '.$book->genre.'<br>';
            echo 'Precio: '.$book->price.'<br>';
            echo 'Fecha Publicación: '.$book->publish_date.'<br>';
            echo 'Descripción: '.$book->description.'<br>';
            echo "<br> <br>";
        }
    }
    ?>
</body>
</html>
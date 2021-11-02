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
    $servidor = "localhost";
    $baseDatos = "agenciaviajes";
    $usuario = "developer";
    $pass = "developer";
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario,$pass);
        echo "Conectado correctamente";
        echo "<br>";
        //$sql = "INSERT INTO turista (nombre,apellido1,apellido2,direccion,telefono) VALUES ('Javier', 'Jiḿenez', 'Castillo', 'Dos Hermanas', '614364565')";
        //$sql = "DELETE FROM turista WHERE id = 1";  
        $sql = "UPDATE turista SET nombre='Carmen',apellido1='Rufo',apellido2='Palomo',direccion='C/Sevilla 2',telefono='614432473' WHERE id=10 OR id=12";     
        $numeroClientes = $conexion->exec($sql);
        //$last_id = $conexion->lastInsertId();
        //echo "Se han añadido $numeroClientes clientes con el nuevo id: $last_id."; 
        //echo "borrado correcto";

    } catch (PDOException $e) {
        echo "Conexion fallida: " , $e->getMessage();
    }
    ?>
</body>
</html>
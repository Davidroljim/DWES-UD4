<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio10</title>
</head>
<body>
    <?php

    $servidor = "localhost";
    $baseDatos="agenciaviajes";
    $usuario= "developer";
    $pass="developer";

    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario,$pass);
        echo "Conectado correctamente";
        echo "<br>";
        $conexion->beginTransaction();
        $falloConsultas=false;
        $sql = "INSERT INTO turista (nombre,apellido1,apellido2,direccion,telefono) VALUES ('Javier', 'Jiḿenez', 'Castillo', 'Dos Hermanas', '614364565')";
        $numeroClientes = $conexion->exec($sql);
        $last_id= $conexion->lastInsertId();

        if ($last_id >0) {
            $falloConsultas=true;
        }else {
            $falloConsultas=false;
            $conexion->rollBack();
        }

        
        $sql = "INSERT INTO turista (nombre,apellido1,apellido2,direccion,telefono) VALUES ('Eddy', 'Jiménez', 'Castillo', 'Dos Hermanas', '123456789')";
        $numeroClientes = $conexion->exec($sql);
        $last_id= $conexion->lastInsertId();

        if ($last_id >0) {
            $falloConsultas=true;
        }else {
            $falloConsultas=false;
            $conexion->rollBack();
        }
        

        $sql = "INSERT INTO turista (nombre,apellido1,apellido2,direccion,telefono) VALUES ('Alejandro', 'Jiḿenez', 'Castillo', 'Dos Hermanas', '456798123')";
        $numeroClientes = $conexion->exec($sql);
        $last_id= $conexion->lastInsertId();

        if ($last_id >0) {
            $falloConsultas=true;
        }else {
            $falloConsultas=false;

        }

        if ($falloConsultas=true) {
            
            $conexion->commit();
            echo "commit";
        }else {
            $conexion->rollBack();
            echo "rollback";

        }
        $conexion=null;
    } catch (PDOException $e) {
        echo "Conexion fallida: " , $e->getMessage();
    }
    ?>
</body>
</html>
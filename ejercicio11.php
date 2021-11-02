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

    function creaConex(){
    $servidor = "localhost";
    $baseDatos="agenciaviajes";
    $usuario= "developer";
    $pass="developer";
    
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario,$pass);
        echo "Conectado correctamente";
        echo "<br>";
    return $conexion;
    }

    function creaTurista($nombre, $apellido1, $apellido2, $direccion, $telefono){
        
        try {
            $conexion = creaConex();
            echo "Conectado correctamente";
            echo "<br>";
            $conexion->beginTransaction();
            $falloConsultas=false;
            $consulta = $conexion->prepare("INSERT INTO turista (nombre,apellido1,apellido2,direccion,telefono) VALUES (?,?,?,?,?)");
            $consulta->bindParam(1,$nombre);
            $consulta->bindParam(2,$apellido1);
            $consulta->bindParam(3,$apellido2);
            $consulta->bindParam(4,$direccion);
            $consulta->bindParam(5,$telefono);
            
            return $conexion->lastInsertId();
        } catch (PDOException $e) {
            echo "Conexion fallida: " , $e->getMessage();
        }

    }

    /*function extraeTurista(){

        try {
            $conexion = creaConex();

        } catch (\Throwable $th) {
            //throw $th;
        }

    }*/

    function extraeTuristas(){

    }

    function actualizaTurista(){

    }

    function eliminaTurista(){

    }

    
    ?>
</body>
</html>
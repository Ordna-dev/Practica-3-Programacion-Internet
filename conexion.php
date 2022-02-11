<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "practicaConexionBD";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conectado";
    } catch(PDOException $e) {
        echo "Conexion fallida: " . $e->getMessage();
    }
    
?>
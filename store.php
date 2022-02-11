<?php
    include ('conexion.php');

    if(count($_POST) > 0) {
        $tipo = $_POST['tipo'];
        $descripcion = $_POST['descripcion'];

        $sql = "INSERT INTO trabajo (tipo, descripcion) VALUES ('$tipo', '$descripcion')";

        $conn->exec($sql);

        header('Location: index.php');
    }
?>
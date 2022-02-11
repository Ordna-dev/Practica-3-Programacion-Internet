<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Index</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <script src='main.js'></script>
    </head>
    <body>
        <style>
            table, th, td {
            border:1px solid black;
            }
        </style>
        <?php
            include('conexion.php');
        ?>
        <h1>Index</h1>
        <ul>
            <li><a href="formulario.php">Ir a formulario</a></li>
        </ul>

        <table style="width:100%">
            <tr>
                <th>Tipo de trabajo</th>
                <th>Descripcion</th>
            </tr>
            <?php
                $sql = "SELECT * FROM trabajo";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                
                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                foreach ($stmt->fetchAll() as $row) {
                    
                        echo "<tr>" . "<td>" . $row['tipo'] . "</td>" . "<td>" . $row['descripcion'] . "</td>" . "</tr>";
                    
                }
            ?>
        </table>
    </body>
</html>
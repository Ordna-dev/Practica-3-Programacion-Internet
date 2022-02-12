<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Formulario</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <script src='main.js'></script>
    </head>
    <body>
        <?php
            include('conexion.php');
        ?>
        <h1>Formulario de trabajo</h1>
        <ul>
            <li><a href="index.php">Ir a index</a></li>
        </ul>

        <form method="POST">
            <label for="tipo">Tipo:</label>
            <input type="text" name="tipo"><br>

            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion"><br>

            <input type="submit" value="Enviar">
        </form>

        <?php
            include('store.php');
        ?>
    </body>
</html>
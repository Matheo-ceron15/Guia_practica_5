<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h3>Ejercicio 8</h3>
    <p> Se requiere obtener la estatura promedio de un grupo de personas, cuyo número
        de miembros se desconoce, el ciclo debe efectuarse siempre y cuando se tenga
        una estatura registrada.
    </p>
    <form action="Ejercicio 8.php" method="post">
        <label for="cantidad">Cantidad: </label>
        <input type="text" name="cantidad" id="cantidad">
        <input type="submit" value="calcular promedio">
    </form>
    <?php
    $i = 0;
    $promedio = 0.0;
    if (isset($_POST["cantidad"])) {
        $cantidad_p = $_POST["cantidad"];

        echo '<hr>
        <h3>Ingrese los datos requeridos</h3>
        <form action="ejercicio 8.1 .php" method="post">
        <input type="hidden" name="cantidad_p" value="'.$cantidad_p.'">';

        for ($i=1; $i <= $cantidad_p; $i++) { 
            echo '<label for ="numero' .$i. '">Edad' .$i.':</label>
            <input type="text" name="Edad'.$i.'" id="Edad'.$i.'"><hr>';
        }
        echo '<input type="submit" value="Calcular promedio"></form>';
    }
    ?>
</body>
</html>
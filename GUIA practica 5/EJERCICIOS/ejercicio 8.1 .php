<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complemento de ejercicio 8</title>
</head>
<body>
<h3>Ejercicio 8</h3>
    <p> Se requiere obtener la estatura promedio de un grupo de personas, cuyo número
        de miembros se desconoce, el ciclo debe efectuarse siempre y cuando se tenga
        una estatura registrada.
    </p><hr>
    <?php
    $promedio = 0.0;
    $Edad = 0.0;
        if (isset($_POST["cantidad_p"])) {
            $cantidad_p = $_POST["cantidad_p"];
            $total = 0.0;
            for ($i=1; $i <=$cantidad_p ; $i++) { 
                $Edad = $_POST["Edad".$i];
                echo "<br>la edad es:".$Edad;
                $total = $total + $Edad;
            }
            $promedio = $total/$cantidad_p;
            echo "<br>El promedio de edades es de: " .$promedio;
        }
    ?>
</body>
</html>
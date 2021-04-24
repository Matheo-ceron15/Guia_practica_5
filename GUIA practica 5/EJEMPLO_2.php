<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 2</title>
</head>
<body>
    <h2>Ejercicio 2 en PHP, practica 5</h2>    
    <?php 
         //selectiva doble
    $variable = 1;
    if ($variable >= 10) {
    # operaciones si la condición se cumple
    echo "El valor de la variable es mayor o igual a 10";
    }else {
    # operaciones si la condición no se cumple
    echo "El valor de la variable es menor que 10";
    }
    echo "<br>Si la condición se cumple o no, siempre verás una línea más que esta..."; 
    ?>
</body>
</html>
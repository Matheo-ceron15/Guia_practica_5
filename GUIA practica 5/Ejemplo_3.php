<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 3</title>
</head>
<body>
    <h2>Ejemplo 3 en PHP, practica 5</h2>
    <?php 
    //selectiva multiple
    $variable = 1   ;
    if ($variable > 10) {
    # operaciones si la condición se cumple
    echo "El valor de la variable es mayor que 10";
    }elseif ($variable < 10) {
    # operaciones si la condición no se cumple
    echo "El valor de la variable es menor que 10";
    }else{
    echo "El valor de la variable es igual a 10";
    }
    echo "<br>La variable es: ".$variable;
    ?>
</body>
</html>
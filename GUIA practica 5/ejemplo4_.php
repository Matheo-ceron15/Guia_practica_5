<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 4</title>
</head>
<body>
    <h2>Ejemplo 4 con php, practica 5</h2>
    <?php
echo "<h2>Reultados con IF</h2><hr>";
//selectivas multiples IF - IFELSE
$i = 3;
if ($i == 0) {
        echo "i es igual a 0";
    } elseif ($i == 1) {
        echo "i es igual a 1";
    } elseif ($i == 2) {
        echo "i es igual a 2";
    }else {
        echo "i tiene un valor diferente de 0, 1 o 2";
    }
echo "<h2>Reultados con SWITCH</h2><hr>";
//selectivas multiples SWITCH
    switch ($i) {
        case 0:
        echo "i es igual a 0";
        break;
        case 1:
        echo "i es igual a 1";
        break;
        case 2:
        echo "i es igual a 2";
        break;
    default:
    echo "i tiene un valor diferente de 0, 1 o 2";
    }
    echo "<br>Valor de la variable: " .$i;
?>
</body>
</html>
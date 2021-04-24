<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 7</title>
</head>
<body>
    <h2>Ejemplo con estructura While en PHP</h2>
    <hr>
    <?php

        /* while 1 */
        $i = 1;
        echo "Forma while 1 <hr>";
        while ($i <= 10)    {
            echo  $i++."<br>"; /* el valor presentado sería $i antes del incremento
            (post-incremento) */
        }
        echo "Forma while 2 <hr>";
        /* while 2 */
        $i = 1;
        while ($i <= 10):
            echo $i. "<br>";
            $i++;
        endwhile;
    ?>
    
</body>
</html>
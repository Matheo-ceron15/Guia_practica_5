<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejemplo 6</title>
</head>
<body>
    <h2>Ejemplo con for en PHP</h2>
    <?php
        /* for 1 */
        echo "<h1>FOR 1</h1>";
            for ($i = 1; $i <= 10; $i++) {
                echo $i."<br>";
            }

        /* for 2 */
        echo "<h2>FOR 2</h2><hr>";
            for ($i = 1; ; $i++) {
                if ($i > 10) {
                    break;
            }
                echo $i."<br>";
            }

        /* for 3 */
        echo "<h3>FOR 3</h3><hr>";
        $i = 1;
        for (; ; ) {
            if ($i > 10) {
            break;
        }
        echo $i."<br>";
        $i++;
        }

        /* for 4 */
        echo "<h4>FOR 4</h4><hr>";
        for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i."<br>", $i++);
    ?>
</body>
</html>
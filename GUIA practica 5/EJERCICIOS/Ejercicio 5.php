<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h2>Ejercicio 5</h2>
    <p>
        5. Determinar el costo y el descuento que tendrá un artículo. Considere que si su
        precio es mayor o igual a $200 se le aplica un descuento de 15%, y si su precio
        es mayor a $100 pero menor a $200, el descuento es de 12%, y si es menor a
        $100, sólo 10%
    </p><hr>
    <form action="Ejercicio 5.php" method="POST">
        <p>Escriba el costo del articulo:  <input type="number" name="precio"></p>
    </form>
    <?php
        $precio = 0.0;
        $descuento = 0.0;
        $total = 0.0;
        if (isset($_POST["precio"])) {
         $precio = $_POST ["precio"];
            if ($precio>=200) {
                $descuento = ($precio*0.15);
                $total = $precio - $descuento;
            }
            if ($precio>100 || $precio<200) {
                $descuento = ($precio * 0.12);
                $total= $precio -$descuento;
            }
            if ($precio<100) {
                $descuento = ($precio*0.1);
                $total = $precio - $descuento;
            }
               
         $total = $total;
        }
            echo "El total a pagar por el producto es: " .$total;   
    ?>
</body>
</html>
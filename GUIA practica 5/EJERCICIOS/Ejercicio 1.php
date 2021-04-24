<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h3>Ejercicio 1, estructura Switch</h3>
    <hr>
    <h2>Una asociación de productores de jocote corona tiene como política 
    fijar un precio inicial al kilo de su producto, el cual se clasifica en tipos
    A y B, y además en tamaños 1 y 2. Cuando se realiza la venta del producto,
    ésta es de un solo tipo y tamaño, se requiere determinar cuánto recibirá un
    productor por los jocotes que entrega en un pedido, considerando lo siguiente: 
    si es de tipo A, se le cargan $ 0.20 al precio inicial cuando es de tamañ
    o 1; y $ 0.30 si es de tamaño 2. Si es de tipo B, se rebajan $ 0.30 cuando e
    s de tamaño 1, y $ 0.50 cuando es de tamaño 2.</h2>

    <h3>Ingrese los datos del pedido de jocotes corona</h3>
    <form action="ejemplo_5.php" method="post">
        <label for="tipo">Tipo: </label>
        <select name="tipo" id="tipo">
            <option value="A" selected>A</option>
            <option value="B">B</option>
        </select>
        <hr>
        <label for="tamano">Tamaño: </label>
        <select name="tamano" id="tamano">
            <option value="1" selected>1</option>
            <option value="2">2</option>
        </select>
        <hr>
        <label for="precio">Precio: </label>
            <input type="text" name="precio" id="precio">
        <hr>
        <label for="kilos">Kilos: </label>
            <input type="text" name="kilos" id="kilos">
        <hr>
            <input type="submit" value="Calcular">
    </form>
    <?php
    
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 9</title>
</head>
<body>
        <h2>Se requiere un programa que sume N cantidad de números y muestre el
    promedio de ellos.</h2>
    <hr>
        <h3>Ingrese la cantidad de números</h3>
            <form action="Ejemplo 9 .php" method="post">
                <label for="cantidad">Cantidad: </label>
                <input type="text" name="cantidad" id="cantidad">
            <hr>
                 <input type="submit" value="Calcular promedio">
            </form>

    <?php
           //si $_POST["tipo"] tiene valor se enviaron los datos
    if (isset($_POST["cantidad"])) {
        # tomar los datos enviados

        $cantidad_numeros = $_POST["cantidad"];
        echo '<hr>
        <h3>Ingrese los datos requeridos</h3>
        <form action="Ejemplo 9.1 .php" method="post">
        <input type="hidden" name="cantidad_numeros" value="'.$cantidad_numeros.'">';
        
        // construir el cuerpo del formulario
        for ($i=1; $i <= $cantidad_numeros ; $i++) {
        echo '<label for="numero'.$i.'">Número '.$i.': </label>
        <input type="text" name="numero'.$i.'" id="numero'.$i.'">
        <hr>';
        }
        echo '<input type="submit" value="Calcular promedio">
        </form>';
        
            }
      ?>
</body>
</html>
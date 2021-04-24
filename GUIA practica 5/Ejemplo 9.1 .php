<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados ejercicio 9</title>
</head>
<body>
    <body>
      <h2>Se requiere un programa que sume N cantidad de números y muestre el p
    romedio de ellos.</h2>
<hr>
    <h3>NÚMEROS</h3>
    <?php
    $promedio = 0.0;
    //si $_POST["tipo"] tiene valor, se enviaron los datos
    if (isset($_POST["cantidad_numeros"])) {
        # tomar los datos enviados
        $cantidad_numeros = $_POST["cantidad_numeros"];
        //inicializar el acumulador en 0
        $total = 0.0;
        // repetir el proceso de la suma
            for ($i=1; $i <= $cantidad_numeros ; $i++) {
                # pedir el dato con js
                $numero = $_POST["numero".$i];
                echo $numero."<br>";
                #usar el acumulador para sumar
                $total = $total + $numero;
            }
            $promedio = $total / $cantidad_numeros;
             echo "<h1>El promedio es: ".$promedio."</h1>";
    }
    ?>
    </body>
  
</body>
</html>
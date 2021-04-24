<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <h3>Ejercicio 10</h3>
    <p>Se requiere determinar, de N cantidades, cuántas son menores o iguales a cero
        y cuántas mayores a cero.
    </p>
    <?php
        $x=0;
        $menores=0; 
        $mayores=0;
        $cantidad =0;
        if (isset($_POST["cantidad"])) {
                $cantidad = $_POST["cantidad"];
                $i=0;  
                  echo "<form action='' method='POST'>";
                  while($i < $cantidad){
                    echo "<label>Ingrese cantidad</label><br><input type='text' name='i$i' required><br>";
                    $i++;
                 }
                 echo " <input type='hidden' value='$cantidad' name='total'>
                        <input type='submit' name='calculo' value='Enviar' /></form>";
        }else if(isset($_POST["calculo"])){
            $cantidad = $_POST["total"];
            while ($x<$cantidad) {
                if($_POST["i$x"]<=0){
                   $menores++;
                }else{
                    $mayores++;
                }
                $x++;
            }
                echo "<br>el total de numeros menores o igual a cero es: " .$menores;
                echo "<br>el total de numeros mayores a cero es: " .$mayores; 
        }
        else{
                echo '<form action="" method="post">
                    <label for="cantidad">Cantidad de datos: </label>
                     <input type="number" name="cantidad" id="cantidad">
                     <hr>
                     <input type="submit" value="Ingresar"/>
                    </form>';
        }   
    ?>
</body>
</html>
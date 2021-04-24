<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7  con while</title>
</head>
<body>
    <h2>Ejercicio 7 con bucle while en php</h2>
    <?php
#Ejercicio de ciclo while

$numero = 0; //Pondremos la variable en 0
while($numero < 10) {
$numero++; //Se incrementa $numero en uno
echo "El valor de numero es = <b> ".$numero."</b></br> "; //Imprime los valores del ciclo
}
// Como la condicion son menores a 10, mostrara el numero final
echo "<br>El ciclo while acabó en ".$numero."";
?>
</body>
</html>
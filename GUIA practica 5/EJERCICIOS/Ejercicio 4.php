<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h2>Ejercicio 4</h2>
    <p>
        Se tiene el nombre y la edad de tres personas. Se desea saber el nombre y la
        edad de la persona de menor edad.
    </p>
    <form action="" method="POST">

        <label for="nombre1">Ingrese nombre 1</label>
        <input type="text" name="nombre1" id="nombre1">
        <label for="edad1">Ingrese edad 1</label>
        <input type="number" name = "edad1" id ="edad1">
        <br>
        <label for="nombre2">Ingrese nombre 2</label>
        <input type="text" name="nombre2" id="nombre2">
        <label for="edad2">Ingrese edad 2</label>
        <input type="number" name = "edad2" id ="edad2">
        <br>
        <label for="nombre3">Ingrese nombre 3 </label>
        <input type="text" name="nombre3" id="nombre3">
        <label for="edad3">Ingrese edad 3</label>
        <input type="number" name = "edad3" id ="edad3">
        <br>
        <hr>
        <input type="submit" value="La persona de menor edad es:">
    </form>
    <?php
        $nombre1 ="";
        $nombre2 = "";
        $nombre3 = "";
        $edad1 = 0;
        $edad2 = 0;
        $edad3 = 0;
    if ($edad1>$edad2) {
        if ($edad1>$edad3) {
            echo "La persona con menor edad es: " .$nombre1 . $edad1;
        } else {
            echo "La persona con menor edad es: " .$nombre3 . $edad3;
        }
    } else {
        if ($edad2<$edad3) {
            echo "La persona con menor edad es: " .$nombre2 . $edad2;
        } else {
            echo "La persona con menor edad es: " .$nombre3 . $edad3;
        }
        echo $edad1. $nombre1;
    }

        
    ?>
</body>
</html>
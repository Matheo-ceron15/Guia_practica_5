<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <h2>Ejercicio 2</h2>
    <h3>
        2. Se desea determinar si una persona puede votar con base en su edad en las
        próximas elecciones.
    </h3>   
    <hr>
    <h3>Por favor ungrese su edad. </h3>
    <form action="Ejercicio 2.php" method="POST">
        <p> Edad: <input type="text" name="Edad"></p>
        <input type="submit" value="Verificar edad">
    </form>
    <?php
function recoge($var, $m = "")
{
    if (!isset($_POST[$var])) {
        $tmp = (is_array($m)) ? [] : "";
    } elseif (!is_array($_POST[$var])) {
        $tmp = trim(htmlspecialchars($_POST[$var], ENT_QUOTES, "UTF-8"));
    } else {
        $tmp = $_POST[$var];
        array_walk_recursive($tmp, function (&$valor) {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}
$Edad   = recoge("Edad");

if ($Edad <18) {
    print "<p>Eres menor Edad</p>";
} else {
    print "Eres mayor de edad";
}
print "<p>Su Edad es $Edad</p>\n";
?>
    
</body>
</html>
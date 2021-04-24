<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <h2>Ejercicio 3</h2>
    <h3>
        3. En un parqueo requieren determinar cuánto deben cobrar por el uso del
        estacionamiento a sus clientes. Las tarifas que se tienen son las siguientes:
            <br>-Las dos primeras horas a $5.00 c/u.
            <br>-Las siguientes tres a $4.00 c/u.
            <br>-Las cinco siguientes a $3.00 c/u.
            <br>-Después de diez horas el costo por cada una es de dos dólares.
    </h3>   
    <hr>
    <form action="" method="POST">
        <p>Ingrese cantidad de horas: <input type="number" name="horas" min="1" max="24"></p>
        <input type="submit" value="Enviar datos" name="enviado">
    </form>
    <?php
    $horas = 0;
    $total = 0;
//Comprobando si se ha enviado el formulario
    	if(isset($_POST["horas"])){
    		$horas = $_POST["horas"];
    			if($horas <= 2 ){
    				$total = $horas * 5.00;
    			}else if( $horas >= 3 && $horas <= 5){
    				$horas-=2;
    				$total += 10;
    				$total = ($total +  $horas) * 4.00;
    			}else if($horas >= 6 && $horas <=10){
    				$horas-=2;
    				$total += 10;
    				$horas-=3;
    				$total+=12;
    				$total = ($total + $horas) * 3.00; 
    			}else{
					$horas-=2;
    				$total += 10;
    				$horas-=3;
    				$total+=12;
    				$horas-=5;
    				$total+=15;
    				$total = ($total + $horas) * 2.00;
    			}
    			//imprimir resultado;
    			echo "El total a pagar es: ".$total;
    	}
    ?>
</body>
</html>
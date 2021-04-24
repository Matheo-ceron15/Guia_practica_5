<!DOCTYPE html>
<html>
<head>
	<title>Calcular salario de empleado</title>
</head>
<body>
	<h3>Calcular salario de empleado</h3>
	<form action="Ejercicio 11.php" method="POST">
		<p>Pago por hora</p>
		<input type="text" name="pago" required="" /><hr>
		<h4>Horas por semana</h4>

		<?php
		$dias = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
		for($i=0; $i < count($dias); $i++){
			 echo "<label>$dias[$i]<br><input type='number' name='d$i' required min='2' max='8' /></label><br><br>";
		}
		?>

		<br>
		<input type="submit" value="Calcular" />
	</form>

	<?php

		$calculo = 0;
		if(isset($_POST["d0"])){
			$pago_hora= (float) $_POST["pago"];
			$horas = 0;
			for($i=0; $i < count($dias); $i++){
			     $horas+= (int)($_POST["d$i"]);
			}
			$calculo = $horas * $pago_hora;
			echo "<hr><br><b>Salario del empleado es $".$calculo." y las horas trabajadas $horas </b>";
		}
	?>
</body>
</html>
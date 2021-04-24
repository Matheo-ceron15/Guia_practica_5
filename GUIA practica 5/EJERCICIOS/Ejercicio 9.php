<!DOCTYPE html>
<html>
<head>
	<title>Calcular ahorro anual</title>
</head>
<body>

	<h3>Calcular ahorro anual</h3>

	<form action="Ejercicio 9.php" method="POST">
		<?php
		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		for($i=0; $i < count($meses); $i++){
			 echo "<label>$meses[$i]<br><input type='text' name='m$i' required/></label><br><br>";
		}
		?>
		<br>
		<input type="submit" value="Calcular" />
	</form>
	<?php
		$calculo = 0;
		if(isset($_POST["m0"])){
			for($i=0; $i < count($meses); $i++){
			 $calculo += (float)($_POST["m$i"]);
			}
			echo "<br><b>Ahorro total $".$calculo."</b>";
		}
	?>
</body>
</html>
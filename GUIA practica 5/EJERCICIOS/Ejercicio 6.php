<!DOCTYPE html>
<html>
<head>
	<title>Aplicación a Beca</title>
</head>
<body>
	<h3>Aplicación para beca mensual</h3>
	<form action="Ejercicio 6.php" method="POST">
		
		<label>Edad del estudiante:<br>
			<input type="number" min="5" max="40" name="edad" />
		</label>
		<br>
		<label>Promedio del estudiante:<br>
			<input type="number" min="0" max="10" name="promedio" />
		</label>
		<br>
		<input type="submit" value="Aplicar" />
	</form>
	<?php
		$info_beca = "Gracias por aplicar a la beca va ser beneficiado con $";
		$carta_invtacion = "Lo sentimos le invitamos a estudiar más y poder aplicar el proximo año";
		if(isset($_POST["edad"])){
			$edad = $_POST["edad"];
			$promedio = $_POST["promedio"];
			if( $edad > 18){
				if($promedio >= 9){
					$info_beca .= "2000";
				}else if($promedio>=7.5){
					$info_beca .= "1000";
				}else if($promedio >=6){
					$info_beca .= "500";
				}else{
					$info_beca = $carta_invtacion;
				}
			}else{
				if( $promedio >= 9 ){
					$info_beca .= "3000";
				}else if( $promedio >= 8 ){
					$info_beca .= "2000";
				}else if( $promedio >= 6 ){
					$info_beca .= "100";
				}else{
					$info_beca = $carta_invtacion;
				}
			}
			echo "<b>".$info_beca."</b>";
		}
	?>
</body>
</html>
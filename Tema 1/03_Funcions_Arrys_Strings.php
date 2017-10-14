<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8" />
		<title>EJ 03 Funciones, Arrays y Strings</title>
	</head>
	
	<body>
	
	<h2>Exercisi 01</h2>
	<?php 
		
		function ejercicio01() {
			$e01_elementos = array ("nom" => "Alberto Contador", "Lloc" => "Madrid", "professio" => "Ciclista", "edat" => 35, "equip" => "Trek");
			echo "	<table>";
			foreach ($e01_elementos as  $valor1 => $valor2 ){
				echo "<tr> <td>$valor1</td> <td>$valor2</td> </tr>" ; }
			echo "	</table>";
		}
		
		ejercicio01();		
	?>	
	
	<br><br>
	<h2>Exercisi 02</h2>
	<?php 
		
		function ejercicio02() {
			$e02_elementos = array ("nom" => "Alberto Contador", "Lloc" => "Madrid", "professio" => "Ciclista", "edat" => 35, "equip" => "Trek");
			$e02_buscar = "a";
			
			echo "<table>";
			foreach ($e02_elementos as  $valor1 => $valor2 ) { 
			
				$e02_posicion = strpos ($valor2, $e02_buscar);
				
				if ($e02_posicion !== false) {echo "<tr> <td>$valor1</td> <td>$valor2</td> </tr>" ;} 
				else {echo "";}
				
			;}
			
			echo "</table>";
		}
		
		ejercicio02();		
	?>	
	
	<br><br>
	<h2>Exercisi 03</h2>
	<?php 
		
		function ejercicio03() {
			$e03_elementos = "amigo coche rojo cielo mueble tabla sal pizarra ingles siete";
			$e03_cambio = str_replace(" ", ", ", $e03_elementos);
			echo "ORIGINAL: $e03_elementos <br>CAMBIADO:  $e03_cambio";			
		}
		ejercicio03();		
	?>	
	
	
	<br><br>
	<h2>Exercisi 04</h2>
	<?php 
		
		function ejercicio04() {
			$e04_elementos = "amigo coche rojo cielo mueble tabla sal pizarra ingles siete";
			$e04_cambio = str_replace(" ", "<br>", $e04_elementos);
			echo "ORIGINAL: $e04_elementos <br>CAMBIADO: <br> $e04_cambio";			
		}
		ejercicio04();		
	?>	
	
	
	<br><br>
	<h2>Exercisi 05</h2>
	<?php 
		
		function ejercicio05() {
			$e05_nombres =  array( "Maria", "Joan", "Luis", "Pere", "Pep", "Susana" );
			$e05_cambio = implode ( " - ", $e05_nombres );
			echo " $e05_cambio";			
		}
		ejercicio05();		
	?>	
	
	<br><br>
	<h2>Exercisi 06</h2>
	<?php 
		
		function crear_acronimo() {
			$e06_acronimo = "Instituto educación secundaria";
			$e06_afegit = "Son Ferrer";
			$e06_array = explode(" ", $e06_acronimo);
			$e06_texto = "";
			for ($i = 0; $i < count($e06_array); $i++) {
				$e06_texto = $e06_texto . substr($e06_array[$i], 0, 1);
			}
		echo strtoupper($e06_texto) . " " . $e06_afegit;			
			
		}
		crear_acronimo();		
	?>	
	
	</body>	
</html>
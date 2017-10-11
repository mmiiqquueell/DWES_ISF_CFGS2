<DOCTYPE HTML!>
<!-- http://localhost/Ejercicios/Ejercicio_02.php?num1=41&num2=29&palabra1=programa&palabra2=pagina&valor=3&mes=1 -->
<html>
	<head>
		<title>Ejercicios Control de Flux</title>
		<meta char-set: "UTF-8"/>
	</head>
	<body>
		<p>
			<b>//// CONDICIONALS ////</b><br>
			<b>--Ejercicio 1:</b> <br>
			<?php
				$num1 = $_GET['num1'];
				$num2 = $_GET['num2'];
				
				if ($num1 > $num2) {echo "El número $num1 es mayor que $num2.";}
				elseif ($num1 < $num2) {echo "El número $num2 es mayor que $num1.";}
				else {echo "Ambos números $num1 y $num2 son iguales.";}
			?>

			<br><br><br>
			<b>-- Ejercicio 2: </b><br>
			<?php
				$pal1 = $_GET['palabra1'];
				$pal2 = $_GET['palabra2'];
				$palabra1 = strlen($_GET['palabra1']);
				$palabra2 = strlen($_GET['palabra2']);
				
				if ($palabra1 > $palabra2) {echo "La palabra '$pal1' es más larga que '$pal2'.";}
				elseif ($palabra1 < $palabra2) {echo "La palabra '$pal2' es más larga que '$pal1'.";}
				else {echo "Ambos palabras  '$pal1' y '$pal2' tienen la misma longitud.";}
			?>
			
			<br><br><br>
			<b>-- Ejercicio 3: </b><br>
			<?php
				$valor = 3.0;
				var_dump ($valor);
			?>
			
			<br><br><br>
			<b>-- Ejercicio 4: </b><br>
			
			<?php
				$valore = $_GET['valor'];
				var_dump ($valore);
			?>
				
				
			<br><br><br>
			<b>-- Ejercicio 5: </b><br>
			<?php
				$valor1 = $_GET['valor1'];
				$valor2 = $_GET['valor2'];
				$oper = $_GET['operador'];
				if ($oper == 'suma') {echo "Suma: $valor1 + $valor2 = " . ($valor1 + $valor2);}
				elseif ($oper == 'resta') {echo "Restar: $valor1 - $valor2 = " . ($valor1  - $valor2);}
				elseif ($oper == 'division') {echo "División: $valor1 / $valor2 = " . ($valor1 / $valor2);}
				elseif ($oper == 'multiplicacion') {echo "Multiplicación: $valor1 * $valor2 = " . ($valor1 * $valor2);}
				elseif ($oper == 'potencia') {echo "Poténcia: $valor1 ^ $valor2 = " . ($valor1 ** $valor2);}
				else {echo "Error: Operador o número no válido";}
				?>	
			<br><br><br>
			<b>-- Ejercicio 6: </b><br>
			<?php
				$meses = $_GET['mes'];
				switch ($meses) {
					case "1":
						echo "Enero";
						break;
					case "2":
						echo "Febrero";
						break;
					case "3":
						echo "Marzo";
						break;
					case "4":
						echo "Abril";
						break;
					case "5":
						echo "Mayo";
						break;
					case "6":
						echo "Junio";
						break;
					case "7":
						echo "Julio";
						break;
					case "8":
						echo "Agosto";
						break;
					case "9":
						echo "Septiembre";
						break;
					case "10":
						echo "Octubre";
						break;
					case "11":
						echo "Noviembre";
						break;
					case "12":
						echo "Diciembre";
						break;
					default:
						echo "ERROR!";
					
				}
			?>	
			
			<br><br><br>
			<b>//// BUCLES ////</b><br>
			<b>-- Ejercicio 1: </b><br>
			<?php
				$multi = $_GET['multi']; 
				for($i = 1; $i < 11; $i++) {
					$resultadoM = $multi * $i;
					echo "$multi x $i = $resultadoM<br>";
				}
			?>
			
			<br><br><br>
			<b>-- Ejercicio 2: </b><br>
			<?php
			$total= $_GET['total'];
			$resul = 0;
				for($i = 1; $i <= $total; $i++) {
					$resul = $resul + $i;
				}
			echo $resul;
			?>
			
			<br><br><br>
			<b>-- Ejercicio 3: </b><br>
			<?php
			$potencia = $_GET['potencia'];
			
			if ($potencia > 0 && $potencia < 10) {
				for($i = 1; $i <= 10; $i++) {
					$result = $potencia ** $i;
					echo $result;
					echo", ";
				}
			} else {echo "Error, número no valido";}
			
			?>
			
			
			<br><br><br>
			<b>-- Ejercicio 4: </b><br>
			<?php
				$sig = 1;
				$ant = 0;
				$maxi = $_GET['maximo'];
				for ($i = 0; $i < 1000; $i++) {
					if ($sig < $maxi) {
						
						echo $sig."<br>";
						$x = $sig;
						$sig = $sig + $ant;
						$ant = $x;
					}
					else {break;}
				}
			?>
		</p>
	</body>
</html>
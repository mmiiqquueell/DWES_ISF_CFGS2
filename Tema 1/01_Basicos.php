<DOCTYPE HTML!>
<!-- http://localhost/Ejercicios/Ejercicio_01.php?numero1=5&numero2=3&nom1=IESSONFERRER&nom2=instituto&nombre=Jhon&apellido=Smith&edad=33 -->
<html>
	<head>
		<title>Ejercicios Introductoris</title>
		<meta char-set: "UTF-8"/>
	</head>
	<body>
		<p>
			// Ejercicio 1: <br>
			<?php
				echo "Hola mundo";
			?>

			<br><br><br>
			// Ejercicio 2: <br>
			<?php
				echo "No disponible";
			?>
			
			<br><br><br>
			// Ejercicio 3: <br>
			<?php
				echo "<h1><i><b>Hola mundo</b></i></h1>";
				echo "<h2><i><b>Hola mundo</b></i></h2>";
				echo "<h3><i><b>Hola mundo</b></i></h3>";
				echo "<h4><i><b>Hola mundo</b></i></h4>";
				echo "<h5><i><b>Hola mundo</b></i></h5>";
			?>
			
			
			// Ejercicio 4: <br>
			<?php
					$num1 = $_GET['numero1'];
					$num2 = $_GET['numero2'];
					echo $num1+$num2;
				?>	
			<!--
			<form name="formulario" method="get">
				<input type="text" placeholder="0" name="numero1" id="numero1"></input>
				<input type="text" placeholder="0" name="numero2" id="numero2"></input>
				<input type="button" value="Sumar" id="suma" onclick="sumar()"></input>

			
				
				<?php
					$num1 = $_GET['numero1'];
					$num2 = $_GET['numero2'];
					echo $num1 + $num2;
				?>			
				
				<script>
				
					function sumar() {alert(<?php echo $num1 + $num2 ?>);}
				</script>
				
			</form>
			-->
			<br><br><br>
			// Ejercicio 5: <br>
			<?php
				$pal1 = $_GET['nom1'];
				$pal2 = $_GET['nom2'];
				echo "El $pal2  $pal1 es un buen $pal2";
			?>
			
			<br><br><br>
			// Ejercicio 6: <br>
			<?php
			$nom = $_GET['nombre'];
			$llinatge = $_GET['apellido'];
			$edad = $_GET['edad'];
			echo "<table border=1 rules=all>
					<tr>
						<td><b>Nom:</b></td><td>$nom</td>
					</tr>
					<tr>
						<td><b>Llinatge:</b></td><td>$llinatge</td>
					</tr>
					<tr>
						<td><b>Edad:</b></td><td>$edad</td>
					</tr>
				</table>"
			?>
			
			<br><br><br>
			// Ejercicio 7: <br>
			<?php
				$entero = 5;
				$real = 8;
				$boleano = true;
				$texto = "hola";
				$lista = array("uno",4, false);
				
				var_dump($entero, $real, $boleano, $texto, $lista);
			?>
		</p>
	</body>
</html>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Ejercicios Formularios</title>
		<meta char-set: "UTF-8"/>
	</head>
	<body>
	
		<?php
			$name = $_GET['name'];
			$sex = $_GET['sex'];
			$age = $_GET['age'];
			$mail = $_GET['mail'];
			$afi1 = $_GET['afi1'];
			$afi2 = $_GET['afi2'];
			$afi3 = $_GET['afi3'];
			$afi4 = $_GET['afi4'];
			$afi5 = $_GET['afi5'];
			
			echo "Su nombre es $name, tiene $age años, es $sex, su mail es $mail y su/s afición/es es/son: $afi1 $afi2 $afi3 $afi4 $afi5";
			
			
		?>
		

		
	</body>
</html>

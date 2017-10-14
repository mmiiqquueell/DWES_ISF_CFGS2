<!DOCTYPE HTML!>
<?php

	$name = $_POST['name'];
	$sex = $_POST['sex'];
	$age = $_POST['age'];
	$mail = $_POST['mail'];
	$afi1 = $_POST['afi1'];
	$afi2 = $_POST['afi2'];
	$afi3 = $_POST['afi3'];
	$afi4 = $_POST['afi4'];
	$afi5 = $_POST['afi5'];
	$incompleto = true;
	$incPos1 = 0;
	$incPos2 = 0;
	$incPos3 = 0;
	
	
	
	if ($name == "") {$incompleto = true; $incPos1 = 1;}
	else {$incompleto = false; $incPos1 = 0;}
	if ($age == "" ) {$incompleto = true; $incPos2 = 1;}
	else {$incompleto = false; $incPos2 = 0;}
	if ($mail == "") {$incompleto = true; $incPos3 = 1;}
	else {$incompleto = false; $incPos3 = 0;}


?>
<html>
	<head>
		<title>Ejercicios Formularios</title>
		<meta char-set: "UTF-8"/>
	</head>
	
	<style>
			#ncolor {background-color: #F00;}
			#acolor {background-color: #F00;}
			#ecolor {background-color: #F00;}
	</style>
	
	
	<body>
	
	
		<form name="formulario" method="post" action="E_03 Formularios2.php">
			<input type="text" placeholder="Nombre" name="name" <?php if ( $incPos1 == 1 )  {echo " id='ncolor' ";} ?>></input>
			<br>			
			<input type="text" placeholder="Edad" name="age" <?php if ( $incPos2 == 1 )  {echo " id='acolor' ";} ?>></input>
			<br>
			<input type="text" placeholder="Email" name="mail" <?php if ( $incPos3 == 1 )  {echo " id='ecolor' ";} ?>></input>
			<br>
			<input type="radio" placeholder="Hombre" value="Hombre" name="sex">Hombre</input><br>
			<input type="radio" placeholder="Mujer" value="Mujer" name="sex">Mujer</input><br><br>
			<b>Aficiones</b><br>
			<input type="checkbox" name="afi1" value="Diseño">Diseñador<br>
			<input type="checkbox" name="afi2" value="Coleccionista">Coleccionar<br>
			<input type="checkbox" name="afi3" value="Hacer deporte">Hacer deporte<br>
			<input type="checkbox" name="afi4" value="Jugar a video juegos">Jugar a video juegos<br>
			<input type="checkbox" name="afi5" value="Cantar">Cantar<br><br>
			<input type="submit" ></input>
			
			
			
			<?php

				
				if ($incompleto == true && $incPos1 != 0 || $incPos2 != 0 || $incPos3 != 0) {echo "<br><br>Faltan campos por rellenar";}
				else {echo "<br><br>
				<table border=1 rules=all>
					<tr>
						<td>NOMBRE:</td>
						<td>$name</td>
					</tr>
					<tr>
						<td>EDAD:</td>
						<td>$age</td>
					</tr>
					<tr>
						<td>EMAIL:</td>
						<td>$mail</td>
					</tr>
					<tr>
						<td>GENERO:</td>
						<td>$sex</td>
					</tr>
					<tr>
						<td>AFICIONES:</td>
						<td>$afi1<br>$afi2<br>$afi3<br>$afi4<br>$afi5<br></td>
					</tr>
				</table>";
				}
			
			?>
	
		</form>

		
	</body>
</html>
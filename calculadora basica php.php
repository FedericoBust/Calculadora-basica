<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Operadores Aritmeticos</title>
<style type="text/css">
.prueba {
	font-family: "Lucida Console", Monaco, monospace;
	font-size: 36px;
}
</style>
	</head>
<body>
		<h1 class="prueba">Calculadora</h1>
		<form action="file:///C|/Users/lab6/Desktop/Untitled-3.php" method="post">
			<select name="operador">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacion">Multiplicacion</option>
				<option value="division">Division</option>
		  </select><br />
			Ingresa tu primer numero:<br />
			<input type="text" name="valor1"><br />
			Ingresa tu segundo numero:<br />
			<input type="text" name="valor2"><br>
			<input type="reset" value="Borrar">
			<input type="submit" value="Enviar">
            </select><br />
            ingrese valor a convertir en hexadecimal:<br />
            <input type="text" name="convertir"><br />
            <input type="reset" value="Borrar">
			<input type="submit" value="Enviar">
            </select><br />
            ingrese valor a convertir en binario:<br />
            <input type="text" name="convertir1"><br />
            <input type="reset" value="Borrar">
			<input type="submit" value="Enviar"> 
             </select><br />
            ingrese valor a convertir en decimal:<br />
            <input type="text" name="convertir2"><br />
            <input type="reset" value="Borrar">
			<input type="submit" value="Enviar">   
</form>
</body>
</html>
<?php 
	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
		if ($_POST["operador"] == "suma") {
			print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "resta") {
			print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "multiplicacion") {
			print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "division") {
			print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		}
	} else {
		print("Ingresa alg&uacute;n valor");
		print ('<br /><a href="calculadora.php">Volver</a>');
	}
?>

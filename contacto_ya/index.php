<!DOCTYPE html>
<html>
	<head>
	<iframe src="../templates/head.html" class="iframehead"></iframe>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contacto</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<br>
<br>
<body>
<div class="contacto-box">
	<h1>Contacto</h1>
	<form>
	<!--Nombres-->
		<label for="nombres">Nombres y apellidos</label>
		<input type="text"required>
	<!--correo-->
		<label for="correo">Correo</label>
		<input type="email"required>
	<!--asunto-->
		<label for="asunto">Asunto</label>
		<input type="text" required>
	<!--mensaje-->
		<label for="mensaje">Mensaje</label>
		<input type="text" required>
		<input class="button" type="submit" value="Enviar">
	</form>
<center>
	<iframe src="../templates/foot/foot.html" frameborder="0" width="200%" height="300px" scrolling="NO"></iframe>
</center>
</div>
</body>
</html>

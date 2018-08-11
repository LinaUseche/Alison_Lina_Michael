<!DOCTYPE hml>
<html>
	<head>
		<iframe src="../templates/head.html" class="iframehead"></iframe>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login-</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body>
<!--contendra las imagenes y botones...-->
 	<div class="login-box">
 		<img class="logo" src="images/logo.jpg">
 		<h1>Ingreso</h1>
 		<form>
 			<!---nombre de usuario -->
 			<label for="username">Nombre de usuario</label>
 			<input type="text" placeholder="Nombre">

 			<!--contraseña-->
 			<label for="password">Contraseña</label>
 			<input type="password" placeholder="******">

 			<input class="button" type="submit" value="Ingresar">

 			<a href="#">¡No tengo una cuenta!</a>
 		</form>
 	</div>
</body>
<footer>
		<iframe src="../templates/foot/foot.html" class="iframefoot" scrolling="NO"></iframe>
</footer>
</html>
<!DOCTYPE html>
<html>
	<head>
		<iframe src="../templates/head.html" class="iframehead"></iframe>
	</head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Registro</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<div class="registro-box">
	<h1>Registro</h1>
	<form>
	<!--Nombre de usuario-->
		<label for="nombre de usuario">Nombre de usuario</label>
		<input type="text" placeholder="Nombre" required>
	<!--Correo-->
		<label for="correo">Correo</label>
		<input type="email" placeholder="example@gmail.com" required>
	<!--Sexo-->
		<label for="sexo">Sexo</label>
		<select name="sexo" required>
			<option>__________</option>
			<option>Femenino</option>
			<option>Masculino</option>
			<option>Indefinido</option>			
		</select>
	<!--contraseña-->
		<label for="password">Contraseña</label>
		<input type="password" placeholder="*****" required>
	<!--confirmacion de contraseña-->
		<label for="password_conf">Confirmar contraseña</label>
		<input type="password" placeholder="*****" required>
	<!--Edad-->
		<label for="edad">Edad</label>
		<select name="edad">
			<option selected="selected" required>Día</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option>23</option>
			<option>24</option>
			<option>25</option>
			<option>26</option>
			<option>27</option>
			<option>28</option>
			<option>29</option>
			<option>30</option>
			<option>31</option>
		</select>
		<select name="mes">
			<option selected="selected" required>Mes</option>
			<option>Enero</option>
			<option>Febrero</option>
			<option>Marzo</option>					
			<option>Abril</option>
			<option>Mayo</option>
			<option>Junio</option>
			<option>Julio</option>					
			<option>Agosto</option>
			<option>Septiembre</option>	
			<option>Octubre</option>
			<option>Noviembre</option>					
			<option>Diciembre</option>
		</select>
		<select name="año">
			<option selected="selected" required>Año</option>
			<option>2002</option>
			<option>2001</option>
			<option>2000</option>
			<option>1999</option>
			<option>1998</option>
			<option>1997</option>
			<option>1996</option>
			<option>1995</option>
			<option>1994</option>
			<option>1993</option>
			<option>1992</option>
			<option>1991</option>
			<option>1990</option>
			<option>1989</option>
			<option>1988</option>
			<option>1987</option>
			<option>1986</option>
			<option>1985</option>
			<option>1984</option>
			<option>1983</option>
			<option>1982</option>
			<option>1981</option>
			<option>1980</option>
			<option>1979</option>
			<option>1978</option>
			<option>1977</option>
			<option>1976</option>
			<option>1975</option>
			<option>1974</option>
			<option>1973</option>
			<option>1972</option>
			<option>1971</option>
			<option>1970</option>
			<option>1969</option>
			<option>1968</option>
			<option>1967</option>
			<option>1966</option>
			<option>1965</option>
			<option>1964</option>
			<option>1963</option>
			<option>1962</option>
			<option>1961</option>
			<option>1960</option>
			<option>1959</option>
			<option>1958</option>
			<option>1957</option>
		</select>
 			<input class="button" type="submit" value="Registrarse">
	</form>
</div>
</body>
<footer>
	<iframe src="../templates/foot/foot.html" class="iframefoot" scrolling="NO"></iframe>
</footer>
</html>
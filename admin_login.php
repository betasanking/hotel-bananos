<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesión de administrador</title>
</head>
<style>
	div {
		width: 40%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 30%;
		vertical-align: middle;
		font-size: 30px;
		padding-top: 25px;
		padding-bottom: 50px;
		box-shadow: 0 10px 20px rgba(09,41,98,0.19);
		border-radius: 15px;
		color: #1E90FF;
		border: 10px solid #094198;
		border-radius: 15px;
	}
	body  {
	  	background-color: #FFFFF0;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	  	font-family: sans-serif;
	}
	button, .button {
		background-color: #4AB8F9;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
	}
	.input {
		font-size: 22px;
		text-align: center;
		opacity: 0.5;
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
	}
	button:link, button:visited, .button:link, .button:visited 
	{
		text-decoration: none;
		color: white;
		text-decoration: none;  
		font-size: 25px;
	}
	button:hover, button:active, .button:hover, .button:active
	{
		background-color: white;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
		color: #4AB8F9;
		text-decoration: none;  
		font-size: 25px;
	}
	input:hover, input:active 
	{
		background-color: #8c8c8c;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>
<body>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br>
	<div style="background-color: #E6F2F8;">
	<form action="admin_db.php" method="post">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; color: #094198;"><b>Inicio de sesión de administrador</b></p></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">ID de usuario:</td>
				<td><input class="input" type="text" name="adminid" placeholder="Enter user ID" value="" required></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">Contraseña:</td>
				<td><input class="input" type="password" name="password"  placeholder="Enter password" value="" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input class="button" style="font-size: 25px; " type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
	<table>
		<tr><td><br></td></tr>
			<tr>
				<td style="color: #094198;"><b>¿Nuevo administrador?</b></td>
				<td style="color: #094198;"><b>No se puede iniciar sesión</b></td>
			</tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px;" href="admin_signup.php">Registro de usuarios</a></button></td>
				<td><button type="button"><a style="text-decoration: none; font-size: 25px;" href="admin_forgot_pwd.php">¿Ha olvidado su contraseña?</a></button></td>
			</tr>
		</table>
</div>
</body>
</html>
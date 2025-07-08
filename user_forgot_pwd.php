<!DOCTYPE html>
<html>
<head>
	<title>Usuario Contraseña olvidada</title>
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
		border: 4px solid #009999;
		padding-top: 30px;
		padding-bottom: 30px;
		border-radius: 20px;
	}
	body  {
	  	background-color: #d9d9d9;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	}
	button {
		background-color: #009999;
		border: 1px solid #a6a6a6;
		border-radius: 10px;
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
	button:link, button:visited 
	{
		text-decoration: none;
	}
	button:hover, button:active 
	{
		background-color: #e6b800;
		border: 1px solid #a6a6a6;
		border-radius: 10px;
		box-shadow: 2px 2px #a6a6a6;
		font-size: 28px;
	}
	input:hover, input:active 
	{
		background-color: #8c8c8c;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>
<body>
	<?php $email = 0;
		$dob = 0;
		?>
		<br><br><br><br><br><br><br><br><br><br>
	<div style="background-color: #f2f2f2;">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: #009999;"><b>Usuario Contraseña olvidada</b></p></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<form action="user_forgot_pwd1.php" method="post">
			<tr>
				<td>Introduzca la dirección de correo electrónico del usuario: </td>
				<td><input class="input" type="email" name="email" placeholder="Introduzca la dirección de correo electrónico" required></td>
			</tr>
			<tr><td><br></td>
			</tr>
			<tr>
				<td>Introduzca la fecha de nacimiento:</td>
				<td> <input class="input" type="date" name="dob" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input style="font-size: 28px; background-color: #009999; border: 1px solid #a6a6a6; box-shadow: 2px 2px #a6a6a6; color: white; border-radius: 10px;" type="submit" value="Recover Password"></td>
			</tr>
			</form>
		</table>
	</body>
</html>
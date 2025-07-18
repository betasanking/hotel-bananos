<!DOCTYPE html>
<html>
<head>
	<title>Usuario Registrado</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 30px;
	}
	td {
		padding: 15px;
	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
	}
	ul {
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: rgba(09,41,98,0.9);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	li a:visited {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;	
	}
	li a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	li a:hover {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	.decor {
		font-family: Times New Roman;
	}
</style>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_row($result); ?>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px; position: sticky; z-index: 1">Hotel <p style="color: #e6b800; display: inline;">Bananos</p> - Quillabamba</td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hola, <?php echo $row[2]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">Mis datos personales</a></li>
		<li><a href="bookroom.php">Reservar una habitación</a></li>
		<li><a href="user_room_status.php">Mostrar estado de la reserva</a></li>
		<li><a href="user_payment.php">Pagar</a></li>
		<li><a href="user_booking_history.php">Historial de reservas</a></li>
		<li><a href="index.php">Cerrar sesión</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 24px;"></p>
			<table  class="basic_box decor">
				<tr>
					<td colspan="2"><p style="font-size: 38px; text-align: center;"><b>Bienvenido!</b></p>
				</td>
				<tr>
					<td><b>Nombre: </b></td>
					<td><?php echo $row[2] ?><br></td>
				</tr>
				<tr>
					<td><b>N° celular: </b></td>
					<td><?php echo $row[0] ?><br></td>
				</tr>
				<tr>
					<td><b>Correo electronico: </b></td>
					<td><?php echo $row[3] ?><br></td>
				</tr>
				<tr>
					<td><b>Fecha de nacimiento: </b></td>
					<td><?php echo $row[5] ?><br></td>
				</tr>
				<tr>
					<td><b>DNI </b></td>
					<td><?php echo $row[4] ?><br></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>
	</div>
</body>
</html>
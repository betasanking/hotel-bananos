<!DOCTYPE html>
<html>
<head>
	<title>Forma de pago</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	p {
		font-size: 24px;
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
	td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
	}
	ul {
	  	list-style-type: none;
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
	a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	a:hover {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
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
			<td id="td1" style="padding: 10px; font-size: 48px;">Hotel <p style="color: #e6b800; font-size: 48px; display: inline;">Bananos</p> -Quillabamba</td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hola, <?php echo $row[2]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">Mi información personal</a></li>
		<li><a href="bookroom.php">Reservar una habitación</a></li>
		<li><a href="user_room_status.php">Mostrar el estado de la reserva</a></li>
		<li><a href="user_payment.php">Forma de pago</a></li>
		<li><a href="user_booking_history.php">Historial de reservas</a></li>
		<li><a href="index.php">Cierre de sesión</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p>El pago se ha realizado correctamente.<br></p>
		<P><br>Haga clic en Siguiente para ir a la página de inicio.</P>
		<a href="user_view.php" style="width: 10%; text-align: center; color: black; border: 3px solid #e6b800;">Siguiente</a>
	</div>
</body>
</html>
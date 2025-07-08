<!DOCTYPE html>
<html>
<head>
	<title>Estado de la habitación del usuario</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
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
		text-align: center;
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
			<td id="td1" style="padding: 10px; font-size: 48px;">Hotel <p style="color: #e6b800; display: inline;">Bananos</p> Quillabamba</td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row[2]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">Mis datos personales/a></li>
		<li><a href="bookroom.php">Reservar una habitación</a></li>
		<li><a href="user_room_status.php">Mostrar estado de la reserva</a></li>
		<li><a href="user_payment.php">Forma de pagos</a></li>
		<li><a href="user_booking_history.php">Historial de reservas</a></li>
		<li><a href="index.php">Cerrar sesión</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
				<?php
			$conn = new mysqli("localhost","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$bid = $_POST["book_id"];
			$sql = "SELECT * FROM booked_hist WHERE book_id='$bid'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_row($result);
		?>
			<table class="basic_box">
				<tr>
					<th colspan="2">Historial de reservas</th>
				</tr>
				<tr>
					<td>Número de reserva: </td>
					<td><?php echo $row[14]; ?></td>	
				</tr>
				<tr>
					<td>Nombre: </td>
					<td><?php echo $row[1]; ?></td>	
				</tr>
				<tr>
					<td>Tipo de habitación: </td>
					<td><?php echo $row[3]; ?></td>	
				</tr>
				<tr>
					<td>Fecha de check-in(entrada): </td>
					<td><?php echo $row[4]; ?></td>	
				</tr>
				<tr>
					<td>Fecha de check-out(salida): </td>
					<td><?php echo $row[5]; ?></td>	
				</tr>
				<tr>
					<td>Días de estancia: </td>
					<td><?php echo $row[6]; ?></td>	
				</tr>
				<tr>
					<td>Importe total de la factura: </td>
					<td><?php echo $row[13]; ?></td>	
				</tr>
				<tr>
					<td>Aire Acondicionado: </td>
					<td><?php if(strcmp($row[7], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Desayuno: </td>
					<td><?php if(strcmp($row[8], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Almuerzo: </td>
					<td><?php if(strcmp($row[9], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Snacks: </td>
					<td><?php if(strcmp($row[10], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Cena: </td>
					<td><?php if(strcmp($row[11], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td>Piscina: </td>
					<td><?php if(strcmp($row[12], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td colspan="2"><a href="user_booking_history.php">Atrás</a></td>
				</tr>
			</table>
	</div>
</body>
</html>
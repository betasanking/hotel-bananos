<!DOCTYPE html>
<html>
<head>
	<title>Usuario registrado</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
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
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
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
			<td id="td1" style="padding: 10px; font-size: 48px;">Hotel <p style="color: #e6b800; display: inline;">Bananos</p> -Quillabamba</td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row[2]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">Mi información personal</a></li>
		<li><a href="bookroom.php">Reservar una habitación</a></li>
		<li><a href="user_room_status.php">Mostrar el estado de la reserva</a></li>
		<li><a href="user_payment.php">Formas de pago</a></li>
		<li><a href="user_booking_history.php">Historial de reservas</a></li>
		<li><a href="index.php">Cerrar sesión</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Historial de reservas</b></p>
				</td>
				<tr>
					<th>Número de reserva</th>
					<th>Nombre</th>
					<th>Tipo de habitación</th>
					<th>Fecha de Check-in (entrada)</th>
					<th>Fecha de Check-out(salida) </th>
					<th>Price</th>
				</tr>
				<tr>
				<?php
					$phone = $row[0];
					$id = $row[4];
					$sql1 = "SELECT * from booked_hist";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		if($row[0]==$phone && $row[2]==$id)
				    		{
				    		?>
				    		<td><?php echo $row[14]; ?></td>
				   			<td><?php echo $row[1]; ?></td>
				   			<td><?php echo $row[3]; ?></td>
				   			<td><?php echo $row[4]; ?></td>
				    		<td><?php echo $row[5]; ?></td>
				    		<td><?php echo $row[13]; } ?></td>
				</tr><?php
				    	}
				    	mysqli_free_result($result); 
				    }?>
			</table><br><br>
			<table class="basic_box">
				<tr>
					<td colspan="1">Introducir ID de reserva:</td>
					<td colspan="2">
						<form action="user_room_history.php" method="post">
							<input type="number" name="book_id">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style="text-align: center;"><button type="submit">Ver detalles</button></td></form>	
				</tr>
			</table>
	</div>
</body>
</html>
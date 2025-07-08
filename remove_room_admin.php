<!DOCTYPE html>
<html>
<head>
	<title>Admin Eliminar Habitaciones</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	td {
		text-align: center;
	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	th {
		font-weight: bold;
		padding-left: 15px;
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

	li a.active {
	  	background-color: #e6b800;
	  	color: white;
	}

	li a:hover:not(.active) {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
	}
</style>
<body>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #e6b800; display: inline;">DELUXE</p> HOTEL</td>
		</tr>
	</table>
	<ul>
		<li><a href="admin_view.php" class="active">Información sobre habitaciones</a></li>
		<li><a href="add_room_admin.php">Añadir habitación</a></li>
		<li><a href="remove_room_admin.php">Eliminar habitaciones</a></li>
		<li><a href="admin_room_status.php">Solicitudes de reserva</a></li>
		<li><a href="confirmed_bookings.php">Reservas confirmadas</a></li>
		<li><a href="booking_history.php">Historial de reservas</a></li>
		<li><a href="index.php">Cierre de sesión</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			$conn = new mysqli("localhost","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from rooms_count";
			$result=mysqli_query($conn,$sql); ?>
		  	<table class="basic_box">
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Eliminar habitaciones</p></th>
				</tr>
				<tr>
					<th>Tipo de habitación</th>
					<th>Habitaciones disponibles</th>
					<th>Habitaciones ocupadas</th>
					<th>Precio</th>
				</tr>
			<?php 
			while ($row=mysqli_fetch_row($result))
    		{	?>	
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[3]; 
			} ?></td>
				</tr>
			</table>
			<br><br>
			<form class="basic_box" action="admin_room_removed.php" method="post">
			<table>
				<tr>
					<td style="text-align: left;"><b>Seleccione el tipo de habitación:</td>
					<td style="text-align: left;">
						<select name="rooms" required>
							<option value="">Seleccionar</option>
							<option value="Single bed">Cama individual</option>
							<option value="Double bed">Cama doble</option>
							<option value="Four bed">Cuatro camas</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">Introduzca el número de habitaciones que desea eliminar:</td>
					<td style="text-align: left;"><input type="number" min="0" name="noofrooms" id="rooms" required></td>
				</tr>
			</table><br>
			<input style="margin-left: 43%;" type="submit" value="Submit">
			</form>
	</div>
</body>
</html>
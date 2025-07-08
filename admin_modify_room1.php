<!DOCTYPE html>
<html>
<head>
	<title>Añadida sala de administración</title>
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
<script>
    function submitForm(action)
    {
        document.getElementById('columnarForm').action = action;
        document.getElementById('columnarForm').submit();
    }
</script>
<body>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">HOtel <p style="color: #e6b800; display: inline;">Bananos</p> -Quillabamba</td>
		</tr>
	</table>
	<ul>
		<li><a href="admin_view.php" class="active">Información sobre habitaciones</a></li>
		<li><a href="add_room_admin.php">Añadir habitación</a></li>
		<li><a href="remove_room_admin.php">Eliminar habitaciones</a></li>
		<li><a href="admin_room_status.php">Solicitudes de reserva</a></li>
		<li><a href="confirmed_bookings.php">Reservas confirmadas</a></li>
		<li><a href="booking_history.php">Historial de reservas</a></li>
		<li><a href="index.php">Cerrar sesión</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<td>Admin La fecha de salida de la sala se actualiza correctamente</td>
				</tr>
				<tr>
					<td><a href="admin_view.php">Haga clic aquí para ser redirigido.</a></td>
				</tr>
			</table>
		</div>
	</body>
</html>
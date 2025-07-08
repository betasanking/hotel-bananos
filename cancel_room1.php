<!DOCTYPE html>
<html>
<head>
	<title>Admin Cancelar reserva</title>
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
		background-color: #009999;
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
	  	background-color: #009999;
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
			<td id="td1" style="padding: 10px; font-size: 48px;">Hotel <p style="color: #e6b800; display: inline;">Bananos</p> -Quillabamba</td>
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
		<p>La reserva de la habitación se ha cancelado correctamente.<br></p>
		<P><br>Haga clic en Siguiente para ir a la página de inicio.</P>
		<a href="admin_view.php" style="width: 10%; text-align: center; color: black; border: 3px solid #e6b800;">Next</a>
	</div>
</body>
</html>
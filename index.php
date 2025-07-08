<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hotel Bananos - Quillabamba</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<style>
		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}

		html {
			scroll-behavior: smooth;
		}

		body {
			font-family: 'Poppins', sans-serif;
			background: #f2f2f2;
		}

		ul {
			list-style-type: none;
			background-color: rgba(9, 41, 98, 0.3);
			backdrop-filter: blur(8px);
			position: sticky;
			top: 0;
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 10px 20px;
			z-index: 100;
		}

		li {
			display: inline-block;
			margin: 0 10px;
			font-size: 18px;
			font-weight: bold;
		}

		a:link, a:visited {
			color: white;
			padding: 10px 20px;
			text-decoration: none;
			display: block;
			border-radius: 5px;
			transition: 0.3s;
		}

		a:hover, a:active {
			background-color: white;
			color: #094198;
		}

		h1 {
			background-color: #092962;
			color: white;
			padding: 25px 0;
			font-size: 50px;
			text-align: center;
		}

		h1 p {
			color: #e6b800;
			display: inline;
		}

		h2 {
			font-size: 30px;
			text-align: center;
			padding: 10px;
		}

		.reserve_room {
			background: linear-gradient(135deg, #094198, #4AB8F9);
			color: white;
			padding: 14px 28px;
			font-size: 24px;
			text-align: center;
			text-shadow: 1px 1px 3px black;
			border: none;
			border-radius: 50px;
			width: 300px;
			cursor: pointer;
			margin: 30px auto;
			display: block;
			transition: all 0.4s ease;
		}

		.reserve_room:hover {
			background: #ffffff;
			color: #094198;
			transform: scale(1.05);
		}

		.slideshow-container {
			max-width: 100%;
			position: relative;
			margin: auto;
		}

		.mySlides {
			display: none;
		}

		.mySlides img {
			width: 100%;
			vertical-align: middle;
		}

		.text {
			color: #f2f2f2;
			font-size: 30px;
			padding: 8px 12px;
			position: absolute;
			bottom: 20px;
			width: 100%;
			text-shadow: 4px 4px black;
			text-align: center;
		}

		.dot {
			height: 15px;
			width: 15px;
			margin: 0 2px;
			background-color: white;
			border-radius: 50%;
			display: inline-block;
			transition: background-color 0.6s ease;
		}

		.active {
			background-color: #717171;
		}

		.fade {
			animation-name: fade;
			animation-duration: 1.5s;
		}

		@keyframes fade {
			from {opacity: .4}
			to {opacity: 1}
		}

		.basic_box {
			border-radius: 10px;
			margin: 30px 100px;
			padding: 30px;
			box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
			background-color: white;
		}

		.row {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}

		.column {
			flex: 1;
			padding: 10px;
			text-align: center;
		}

		.column img {
			width: 100%;
			max-height: 250px;
			object-fit: cover;
			border-radius: 8px;
		}

		.r_room {
			color: #FFF;
			padding: 15px;
			font-size: 28px;
			text-align: center;
			background-color: #092962;
			width: 60%;
			margin: 20px auto;
			border-radius: 40px;
			text-shadow: 2px 2px black;
		}

		.footer {
			background-color: #092962;
			color: white;
			padding: 40px 20px;
			text-align: center;
		}

		.foot-text {
			color: #D6FEFF;
			font-size: 16px;
			margin: 5px;
		}
	</style>
</head>

<body>

	<h1>HOTEL <p>BANANOS</p> QUILLABAMBA</h1>

	<ul>
		<li><a href="index.php">Menú principal</a></li>
		<li><a href="admin_login.php">Administrador</a></li>
		<li><a href="user_login.php">Iniciar sesión</a></li>
		<li><a href="#rooms_and_rates">Habitaciones</a></li>
		<li><a href="image_gallery.php">Galería</a></li>
		<li><a href="#contact">Contacto</a></li>
	</ul>

	<div class="slideshow-container">

		<div class="mySlides fade">
			<img src="Images/p1.jpg">
			<div class="text">Disfruta de la mejor experiencia en nuestras habitaciones</div>
		</div>

		<div class="mySlides fade">
			<img src="Images/p2.jpg">
			<div class="text">Lujo exquisito</div>
		</div>

		<div class="mySlides fade">
			<img src="Images/p3.jpg">
			<div class="text">SABOREA CADA SERVICIO</div>
		</div>

		<div class="mySlides fade">
			<img src="Images/p4.jpg">
			<div class="text">VIAJES FAMILIARES</div>
		</div>

	</div>

	<br>
	<div style="text-align:center">
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
	</div>

	<script>
		let slideIndex = 0;
		showSlides();

		function showSlides() {
			let i;
			const slides = document.getElementsByClassName("mySlides");
			const dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			slideIndex++;
			if (slideIndex > slides.length) { slideIndex = 1 }
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " active";
			setTimeout(showSlides, 4500);
		}
	</script>

	<a class="reserve_room" href="user_login.php">Reservar Habitación</a>

	<h2>Experimente una buena estancia, disfrute de fantásticas ofertas</h2>
	<h2 style="color: teal;">Encuentre nuestra acogedora recepción</h2>

	<h2 class="r_room">Nuestras habitaciones</h2>

	<div id="rooms_and_rates" class="basic_box">
		<div class="row">
			<div class="column">
				<img src="images/lujo.jpg" alt="Habitación de lujo">
				<h3>Habitación de lujo</h3>
			</div>
			<div class="column">
				<img src="images/ejecutiva.jpg" alt="Habitación Ejecutiva">
				<h3>Habitación Ejecutiva</h3>
			</div>
			<div class="column">
				<img src="images/estandar.jpg" alt="Habitación Estándar">
				<h3>Habitación Estándar</h3>
			</div>
		</div>
	</div>

	<div id="contact" class="footer">
		<hr>
		<h2 class="foot-text">¡Contáctanos!</h2>
		<h3 class="foot-text">Programadores: Ing. Álvaro Jesús Vargas Figueroa</h3>
	</div>

</body>
</html>

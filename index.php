<!DOCTYPE html>
<html lang="es">
<head>
	<title>JOMOTEC | INICIO</title>
	<meta charset="utf-8">
	<link rel="icon" href="assets/img/logo.png" type="image/icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script src="js/subir.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<a class="navbar-brand" href="#">
			<img src="assets/img/logo.png" alt="logo" style="width:50px;">
		</a>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="#"><strong>Cómputo y Servicios "JOMOTEC"</strong></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/rectec" target="_blank">Iniciar Sesión</a>
			</li>
		</ul>
	</nav>
	<br>

	<span class="ir-arriba"><img class="flecha" src="https://th.bing.com/th/id/OIP.uKDR0QxG651E2BynzO95BQHaHa?w=193&h=193&c=7&o=5&pid=1.7"></span>

	<div class="container">
		<div id="accordion">
			<div class="card">
				<div class="card-header">
					<a class="card-link acordeon" data-toggle="collapse" href="#collapseOne">
						<center>¿QUIENES SOMOS?</center>
					</a>
				</div>
				<div id="collapseOne" class="collapse show" data-parent="#accordion">
					<div class="card-body" id="card-body">
						<center>
							Somos una <i>micro-empresa</i> originaria de Cuernavaca Morelos, contamos con <strong>técnicos profesionales</strong> en materia de <strong>Informática</strong> comprometidos completamente a <i>brindar el mejor servicio al cliente</i> y darle la mejor experiencia de servicio, eficiencia, honestidad y confiabilidad.
						</center><br>
						<p align="center"><img src="assets/img/muñeco.png" id="muñeco" alt="trabajador"></p>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<a class="collapsed card-link acordeon" data-toggle="collapse" href="#collapseTwo">
						<center>¿QUÉ SERVICIOS OFRECEMOS?</center>
					</a>
				</div>
				<div id="collapseTwo" class="collapse" data-parent="#accordion">
					<div class="card-body">
						<center>
							<img src="assets/img/portada.png" id="portada" alt="Servicios">
						</center>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<a class="collapsed card-link acordeon" data-toggle="collapse" href="#collapseThree">
						<center>¿CUÁLES SON LOS PRECIOS QUE MANEJAMOS?</center>
					</a>
				</div>
				<div id="collapseThree" class="collapse" data-parent="#accordion">
					<div class="card-body">
						<center>
							Nuestra <i>micro-empresa</i> trata de utilizar los precios más accesibles bajo un buen estándar de calidad, teniendo como precio mínimo: <strong>$50</strong> y como precio máximo: <strong>$800</strong>; Te recomendamos consultar a uno de nuestros técnicos sobre cuáles son los precios de cada serivcio y las <strong><a href="ps/ps.pdf">políticas del servicio</a></strong> que manejamos para que dispongas de mejor confianza y seguridad sobre nuestro trabajo, recuerda: <strong><i>La calidad y tu seguridad es nuestra meta</i></strong>
						</center>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<a class="collapsed card-link acordeon" data-toggle="collapse" href="#collapseFour">
						<center>NUESTRAS REDES</center>
					</a>
				</div>
				<div id="collapseFour" class="collapse" data-parent="#accordion">
					<div class="card-body">
						<center>
							<div class="container">
								<img src="assets/img/fb.png" id="fb" alt="Facebook"><a href="https://fb.com/jomotec.cuernavaca" style="margin: 10px;" target="_blank">Jomotec Cómputo y Servicios</a><br><br>

								<img src="assets/img/wa.png" id="wa" alt="WhatsApp">

								<a href="https://api.whatsapp.com/send?phone=527775990128&text=Contacto%20a%20través%20de%20la%20web%20de%20JOMOTEC
								" style="margin: 10px;" target="_blank">777-599-01-28</a>

								<a href="https://api.whatsapp.com/send?phone=527771689089&text=Contacto%20a%20través%20de%20la%20web%20de%20JOMOTEC" target="
								_blank">777-168-90-89</a><br>
							</div>

							<div>
								<img src="assets/img/llamadas.png" id="llamada" alt="llamada" style="margin: 10px;"><a href="tel:527775990128" style="margin: 10px;">777-599-01-28</a><br>
								<a href="tel:527771689089">777-168-90-89</a>
							</div>
						</center>
					</div>
				</div>
			</div>
			<div class="botones">
				<div class="container" align="center">
					<a class="boton" href="sets/curriculums.php"><button style="margin: 10px" type="sumbit" class="btn btn-danger btn-lg"><img id="cv" src="assets/img/cv.png">CURRÍCULUMS</button></a>
					<button name="correo" style="margin: 10px" type="sumbit" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal"><img id="contact" src="assets/img/contacto.png">CONTÁCTANOS</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-contenido modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
					<br>
					<div id="form_correo" class="container">
						<div class="container">
							<form class="form-inline"><img id="correo-index" src="assets/img/correo.png" style="margin-top: 5px" ><h2 class="form-title" style="margin: 10px">CORREO ELECTRÓNICO</h2></form>
							<form method="POST" action="sets/send.php">
								<div>
									<br>
									<div class="form-group">
										<label><strong>NOMBRE :</strong></label>
										<input required="#" type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
									</div>
									<div class="form-group">
										<label><strong>E-MAIL :</strong></label>
										<input required="#" type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo">
									</div>
									<div class="form-group">
										<label><strong>MENSAJE :</strong></label>
										<textarea required="#" class="form-control" rows="3" id="mensaje" name="mensaje" placeholder="Redacta tu mensaje aquí"></textarea>
									</div>
									<div class="form-group" align="center">
										<input type="submit" class="btn btn-primary" id="enviar" name="enviar" value="Enviar Correo">
									</div><br>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<br>
<footer>
	<div class="container" align="center">
		<br><h4>¿DÓNDE NOS UBICAMOS?</h4><br>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15098.171568427424!2d-99.2447716!3d18.9073494!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9f97b9c3e24e2b0!2sMercado%20Municipal%20Dr.%20Lauro%20Ortega%20Martinez!5e0!3m2!1ses-419!2smx!4v1604898014434!5m2!1ses-419!2smx" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	<br>
	<div class="container" align="center">
		<p id="foot">All rights reserved. Copyrights by JOMOTEC ©</p>
	</div>
	<br>
</footer>
<br>
</html>
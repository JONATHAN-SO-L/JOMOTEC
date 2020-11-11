<?php

if(isset($_POST['enviar'])){

	$name=$_POST['nombre'];
	$email=$_POST['email'];
	$message=$_POST['mensaje'];

	$destinatario="computoyserviciosjomotec@gmail.com";
	$asunto=utf8_decode("WEB DE JOMOTEC");
	$cuerpo= utf8_decode("Te ha contactado:  ".$name."\n\nCon el correo electrónico siguiente:  ".$email."\n\nEste es su mensaje: \n\n".$message);

	mail($destinatario, $asunto, $cuerpo);

	echo "<script>alert('¡TU CORREO SE HA ENVIADO CON ÉXITO! PRONTO UNO DE NUESTROS TÉCNICOS SE PONDRÁ EN CONTACTO CONTIGO, GRACIAS POR TU PREFERENCIA')</script>";

	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/">';

}

?>

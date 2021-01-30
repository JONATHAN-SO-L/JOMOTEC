<?php

if(isset($_POST['enviar'])){

	$name=$_POST['nombre'];
	$email=$_POST['email'];
	$message=$_POST['mensaje'];

	$destinatario="computoyserviciosjomotec@gmail.com";
	$asunto=utf8_decode("VALORACION DEL SERVICIO DE JOMOTEC");
	$cuerpo= utf8_decode("Te ha contactado:  ".$name."\n\nCon el siguiente correo electrónico:  ".$email."\n\nEste es su mensaje: \n\n".$message);

	mail($destinatario, $asunto, $cuerpo);

	echo "<script>alert('¡TU MENSAJE SE HA ENVIADO CON ÉXITO! EN VERDAD AGRADECEMOS TU CONFIANZA EN NOSOTROS TRABAJAREMOS PARA MEJORAR PARA TI, GRACIAS POR TU PREFERENCIA')</script>";

	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/">';

}

?>

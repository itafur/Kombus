<?php
	
	$to = "isaitafur@gmail.com";
    $subject = "Correo de prueba";
	$message = "Este es sólo un mensaje de prueba.";
	$from = "correo@tudominio.com";
	$headers = "From:" . $from;
	mail($to,$subject,$message,$headers);
	echo "Correo enviado";

?>
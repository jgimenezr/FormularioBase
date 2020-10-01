<?php

//librerias
  require 'PHPMailer/PHPMailerAutoload.php';

//Creación de una nueva instancia de PHPMailer
¿
$mail = new PHPMailer();
$mail->IsSMTP();

//Configuracion servidor mail
$mail->From = "jjgimenezprueba@gmail.com"; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username ='jjgimenezprueba@gmail.com'; //nombre usuario
$mail->Password = 'Hola.321'; //contraseña
$mail->FromName = "Juan José Gimenez";

$comentarios = "Nombres: ".$_POST['nombre']."\n";
$comentarios .= "Apellidos: ".$_POST['apellido']."\n";
$comentarios .= "Correo: ".$_POST['email']."\n";
$comentarios .= "Comentario: ".$_POST['comentario'];

//Agregar destinatario
$mail->AddAddress("xymenez92@gmail.com");
$mail->Subject = "Datos Formulario Web Juan Jose Gimenez";
$mail->Body = $comentarios;

//Avisar si fue enviado o no y dirigir al index
if ($mail->Send()) {

	echo '<script type="text/javascript">

	alert("Enviado Correctamente");

    if ( window.history.replaceState){

    	window.history.replaceState( null, null, null, null, window.location.href );

    }
    		
    window.location = "index.php";

    </script>';

} else {

	echo '<script type="text/javascript">

	alert("No se enviaron los datos");

    if ( window.history.replaceState ){

    	window.history.replaceState( null, null, null, null, window.location.href );

    }
    		
    window.location = "index.php";

    </script>';



}
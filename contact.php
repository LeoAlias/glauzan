<!-- <?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = "Formulario de contacto: ".$_POST['subject'];
  $message = $_POST['message'];
  $recipient = "leo.alias@gmail.com";
  $mailheader = "From: $email \r\n";
  $formcontent=" De: $name \n Mensaje: $message";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

?> -->
<?php
$name = $_POST['name'];
$mail = $_POST['mail'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'leo.alias@gmail.com';
$asunto = 'Mensaje de... (Escribe como quieres que se vea el remitente de tu correo)';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>


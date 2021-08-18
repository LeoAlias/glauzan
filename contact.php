<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = "Formulario de contacto: ".$_POST['subject'];
  $message = $_POST['message'];
  $recipient = "leo.alias@gmail.com";
  $mailheader = "From: $email \r\n";
  $formcontent=" De: $name \n Mensaje: $message";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

?>
<?php
if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"]) ){
$to = "comercial@glcomerciointernacional.com.ar";
$subject = "Mensaje Enviado";
$contenido .= "Name: ".$_POST["name"]."\n";
$contenido .= "Email: ".$_POST["email"]."\n\n";
$contenido .= "message: ".$_POST["message"]."\n\n";
$header = "From: administracion@glcomerciointernacional.com.ar\nReply-To:".$_POST["email"]."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido ,$header)){
//echo "Mail Enviado.";
}
}
header("Location:index.html");
?>

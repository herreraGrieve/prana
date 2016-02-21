<?php

$EmailFrom = "example@gmail.com";
$EmailTo = "pedro-hg@outlook.com";
$Subject = "Mensaje enviado desde pagina de contacto";
$Name = Trim(stripslashes($_POST['nombre'])); 
$Email = Trim(stripslashes($_POST['mail'])); 
$Tel = Trim(stripslashes($_POST['telefono'])); 
$Message = Trim(stripslashes($_POST['mensaje'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Nombres y apellidos: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Telefono: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email / direccion: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=gracias.html\">";
}
/*else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}*/
?>
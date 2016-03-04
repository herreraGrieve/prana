<?php

$EmailFrom = "rossanataliavelez@hotmail.com";
$EmailTo = "rossanataliavelez@hotmail.com";
$Subject = "Reserva de cita";
$Name = Trim(stripslashes($_POST['nombre'])); 
$Email = Trim(stripslashes($_POST['mail'])); 
$Tel = Trim(stripslashes($_POST['telefono'])); 
$zip = Trim(stripslashes($_POST['zip'])); 

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
$Body .= "Codigo Zip: ";
$Body .= $zip;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=gracias-reserva.html\">";
}
/*else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}*/
?>
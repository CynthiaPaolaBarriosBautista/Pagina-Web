<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$asunto = "Nuevo mensaje de contacto desde el sitio web";

$cuerpo = "Nombre: $nombre\n";
$cuerpo .= "Email: $email\n";
$cuerpo .= "Mensaje:\n$mensaje\n";

if(mail($email, $asunto, $cuerpo)){
    echo "Gracias por contactarnos, $nombre. Tu mensaje ha sido enviado correctamente.";
} else {
    echo "Lo sentimos, ha ocurrido un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
}

echo "Gracias por contactarnos, $nombre. Tu mensaje ha sido recibido correctamente.";

?>


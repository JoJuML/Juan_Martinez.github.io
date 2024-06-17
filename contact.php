<?php
  $mail_to = 'josephone_mx@outlook.com'; // correo electrónico donde se enviará el formulario
  $subject = 'Mensaje de contacto desde tu sitio web'; // asunto del correo electrónico

  // Procesar el formulario
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Enviar el correo electrónico
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    //$mensaje Completo = ;

    if (mail($mail_to, $subject, "Nombre: $nombre\r\nEmail: $email\r\nMensaje: $mensaje",$headers))
    {
      echo "Mensaje enviado con éxito";
    } else {
      echo "Error al enviar el mensaje";
    }
  }
?>
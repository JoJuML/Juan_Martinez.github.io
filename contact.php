<?php
  $mail_to = 'josephone_mx@outlook.com'; // correo electrónico donde se enviará el formulario
  $subject = 'Mensaje de contacto desde tu sitio web'; // asunto del correo electrónico

  // Procesar el formulario
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Enviar el correo electrónico
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    //$mensaje Completo = ;

    if (mail($mail_to, $subject, "Nombre: $name\r\nEmail: $email\r\nMensaje: $message",$headers))
    {
      echo "Message sent successfully";
    } else {
      echo "Error sending Message";
    }
  }
?>
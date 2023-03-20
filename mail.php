<?php
if(isset($_POST['submit'])) {
    // Correo electrónico de destino
    $to = "info@ruvamex.com";

    // Asunto del correo electrónico
    $subject = "Nuevo formulario de contacto recibido";

    // Mensaje del correo electrónico
    $message = "Nombre: " . $_POST['name'] . "\nCorreo electrónico: " . $_POST['email'] . "\nTeléfono: " . $_POST['phone'];

    // Cabeceras del correo electrónico
    $headers = "From: " . $_POST['email'] . "\r\n" .
               "Reply-To: " . $_POST['email'] . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Envía el correo electrónico
    mail($to, $subject, $message, $headers);
}
?>

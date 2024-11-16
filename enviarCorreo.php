<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configuración del correo
    $to = "jedavesu@gmail.com"; // Reemplaza con tu dirección de correo
    $subject = "Mensaje de contacto desde el formulario";

    // Obtención de los datos del formulario
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]); // Cambié "correo electrónico" por "email" para coincidir con el nombre del campo
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    // Contenido del mensaje
    $message = "Nombre: $nombre\n";
    $message .= "Correo Electrónico: $email\n\n";
    $message .= "Mensaje:\n$mensaje\n";

    // Encabezados
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Hubo un problema al enviar el mensaje. Inténtalo nuevamente.";
    }
}
?>

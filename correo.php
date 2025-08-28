<?php
// Verifica que los datos fueron enviados por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura y limpia los datos
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mensaje = htmlspecialchars(trim($_POST['mensaje']));

    // Dirección de destino
    $destino = "carlosbruzua@rivasdev.com"; // ← Reemplaza con tu correo real

    // Asunto y contenido del mensaje
    $asunto = "Nuevo mensaje desde tu portafolio";
    $contenido = "Nombre: $nombre\nCorreo: $email\nMensaje:\n$mensaje";

    // Cabeceras del correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envía el correo
    if (mail($destino, $asunto, $contenido, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje. Intenta más tarde.";
    }
} else {
    echo "Acceso no permitido.";
}
?>


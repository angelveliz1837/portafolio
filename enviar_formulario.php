<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $tema = $_POST["tema"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "i202210826@cibertec.edu.pe";

    $asunto = "Mensaje de contacto de $nombre";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Teléfono: $telefono\n";
    $contenido .= "Correo: $correo\n";
    $contenido .= "Tema: $tema\n";
    $contenido .= "Mensaje:\n$mensaje";

    mail($destinatario, $asunto, $contenido);

    header("Location: index.php#contacto");
}
?>
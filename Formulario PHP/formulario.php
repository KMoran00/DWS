<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $fecha_nacimiento = htmlspecialchars($_POST['fecha_nacimiento']);


    // Validar datos (opcional)
    if (!empty($nombre) && !empty($correo) && !empty($telefono)) {
        echo "<h2>Formulario completo exitosamente:</h2>";
        echo "Nombre: " . $nombre . "<br>";
        echo "Correo: " . $correo . "<br>";
        echo "Teléfono: " . $telefono . "<br>";
        echo "Fecha de Nacimiento: " . $fecha_nacimiento . "<br>";

    } else {
        echo "Rellene todos los campos del formulario.";
    }
}
?>
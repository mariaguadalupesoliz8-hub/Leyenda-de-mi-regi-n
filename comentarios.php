<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    // Guardar en archivo de texto
    $archivo = fopen("comentarios.txt", "a");
    fwrite($archivo, "$nombre: $mensaje\n");
    fclose($archivo);

    echo "Gracias por tu comentario, $nombre!";
}
?>

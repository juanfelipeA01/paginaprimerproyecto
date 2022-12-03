<?php
$asunto = $_POST['asunto'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $nombre . "\n" . $_POST['mensaje'];
echo('<script> alert("El menseaje fue enviado") </script>');
mail("jualxlatan2@gmail.com", $asunto, $mensaje, "FROM: $email");
header("Location: contactos.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtén los valores del formulario
  $nombre = $_POST["nombre"];
  $direccion = $_POST["direccion"];
  $telefono = $_POST["telefono"];
  $correo = $_POST["correo"];
  $pedido = $_POST["pedido"];

  // Configura los detalles del correo electrónico
  $destinatario = "natalia85829428@gmail.com"; // Cambia esto por tu dirección de correo electrónico
  $asunto = "Nuevo pedido de comida";
  $cuerpo = "Nombre: " . $nombre . "\n";
  $cuerpo .= "Dirección: " . $direccion . "\n";
  $cuerpo .= "Teléfono: " . $telefono . "\n";
  $cuerpo .= "Correo electrónico: " . $correo . "\n";
  $cuerpo .= "Pedido: " . $pedido;

  // Envía el correo electrónico
  $enviado = mail($destinatario, $asunto, $cuerpo);

  // Verifica si el correo electrónico se envió correctamente
  if ($enviado) {
    echo "Gracias por tu pedido. Te hemos enviado un correo de confirmación.";
  } else {
    echo "Lo sentimos, ha ocurrido un error al procesar tu pedido. Por favor, inténtalo nuevamente.";
  }
}
?>
</body>
</html>
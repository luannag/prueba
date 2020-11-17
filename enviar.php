<?php  
$destino = "luanna.gonzart@gmail.com";


$nombre = $_POST['nombre'];
$hm = $_POST['hm'];
$fecha = $_POST['fecha'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$asunto = "Mensaje BeGurus"
$carta = "De: $nombre \n";
$carta .= "Genero: $hm \n";
$carta .= "Correo: $correo \n";
$carta .= "Fecha de nacimiento: $fecha \n";
$carta .= "Mensaje: $mensaje";

mail($destino,$asunto, $carta);
header('Location:Contacto.html');

?>
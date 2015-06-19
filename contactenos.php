<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'carlos.marin@hotmail.com';
$titulo = 'Estilo';
$header = 'From:' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript’>
alert('your message has been send.'); 
</script>";
} else {
echo 'Falló el envio';
}
}
?>
[/php]
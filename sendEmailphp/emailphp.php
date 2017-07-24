
<?php
$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['message'];
$para = 'jorgeluis.zevallos@gmail.com';
$titulo = 'Mensaje desde Trouve webSite';
$header = 'From:'.$email;
$msjCorreo = "Email :".$email."\r\n"."Nombre: ".$nombre."\r\n"."Mensaje: \r\n".$mensaje;

if ($_POST['submit']){
	mail($para,$titulo,$msjCorreo,$header);
echo $msjCorreo;
} else {
echo 'Fallo el envio';
}

?>

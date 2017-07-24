
<?php
$para      = 'jorgeluis.zevallos@gmail.com';
$titulo    = 'Mensaje enviado desde Trouve Website';
$name = $_POST["nombre"];



$mensaje   = $_POST['mensaje']."\r\n".$_name;
$cabeceras = 'From:'.$email."\r\n".
    'Reply-To: jorgeluis.zevallos@gmail.com'."\r\n".
    'X-Mailer: PHP/' . phpversion();?>
<script type="text/javascript">

function envio(){</script>

 <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
 	mail($para, $titulo, $mensaje, $cabeceras);
    ?><script>alert('Mensaje enviado');</script><?php
}
else {
?><script>alert('Error en el envio');</script><?php
}
?><script type="text/javascript">
}
</script>


<htmml>
<head>
<style type="text/css">
body{width: 60%;height: auto;padding: 0 20% 0 20%;}
div{
	width: 100%;height: 300px;
	}
input{ width: 300px;height: 30px;}
textarea{width: 300px;height: 200px;}
</style>


</head>
<body>
<div>
<form method="post" action="">
<input type="text" name="nombre" value="your name"><br>
<input type="text" name="correo" value="your email"><br>
<textarea name="mensaje" cols=4 rows=40 >your message here...</textarea><br>
<input type="submit" name="submit" value="Enviar" onclick="envio();">
</form>
</div>
</body>

</html>
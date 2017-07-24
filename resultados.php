<?php
$fechainicio=$_POST['entrada'];
$fechasalida=$_POST['salida'];

define('DB_USER','a3122364_jorge');
define('DB_PASSWORD','TristanAaron16');
define('DB_HOST','mysql7.000webhost.com');
define('DB_NAME','a3122364_ancla');

$dbc= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME)
    or die('No se pudo conectar: ' . mysqli_connect_error());


mysqli_set_charset($dbc,'utf8');

$query1='select count(tipo) from habitacion where tipo="Matrimonia"' ;
$r1=@mysqli_query($dbc,$query1);

$query2='select count(tipo) from habitacion where tipo="Doble"' ;
$r2=@mysqli_query($dbc,$query2);

$query3='select count(tipo) from habitacion where tipo="Triple"' ;
$r3=@mysqli_query($dbc,$query3);

$query4='select count(tipo) from habitacion where tipo="Familiar"' ;
$r4=@mysqli_query($dbc,$query4);



$queryReservasMatrimonial='select count(tipo) as Cantidad from habitacion inner join reserva on 
habitacion.id=reserva.id_habitacion where tipo="Matrimonia" and fecha_inicio and fecha_fin
between"'.$fechainicio.'" and "'.$fechasalida.'";' ;
$reservaMatrimonial=@mysqli_query($dbc,$queryReservasMatrimonial);

$queryReservasDoble='select count(tipo) as Cantidad from habitacion inner join reserva on 
habitacion.id=reserva.id_habitacion where tipo="Doble" and fecha_inicio and fecha_fin
between"'.$fechainicio.'" and "'.$fechasalida.'";' ;
$reservaDoble=@mysqli_query($dbc,$queryReservasDoble);

$queryReservasTriple='select count(tipo) as Cantidad from habitacion inner join reserva on 
habitacion.id=reserva.id_habitacion where tipo="Triple" and fecha_inicio and fecha_fin
between"'.$fechainicio.'" and "'.$fechasalida.'";' ;
$reservaTriple=@mysqli_query($dbc,$queryReservasTriple);

$queryReservasFamiliar='select count(tipo) as Cantidad from habitacion inner join reserva on 
habitacion.id=reserva.id_habitacion where tipo="Familiar" and fecha_inicio and fecha_fin
between"'.$fechainicio.'" and "'.$fechasalida.'";' ;
$reservaFamiliar=@mysqli_query($dbc,$queryReservasFamiliar);

$query6='Select precio from habitacion where tipo="Matrimonia"';
$r6=@mysqli_query($dbc,$query6);
$query7='Select precio from habitacion where tipo="Doble"';
$r7=@mysqli_query($dbc,$query7);
$query8='Select precio from habitacion where tipo="Triple"';
$r8=@mysqli_query($dbc,$query8);
$query9='Select precio from habitacion where tipo="Familiar"';
$r9=@mysqli_query($dbc,$query9);


$count1 = mysqli_fetch_array($r1);
$totalMatrimonial=$count1[0];
$rMatrimonial = mysqli_fetch_array($reservaMatrimonial);
$totalrMatrimonial=$rMatrimonial[0];
$libreMatrimonial=$totalMatrimonial-$totalrMatrimonial;


$count2 = mysqli_fetch_array($r2);
$totalDobles=$count2[0]; 
$rDoble = mysqli_fetch_array($reservaDoble);
$totalrDoble=$rDoble[0];
$libreDoble=$totalDobles-$totalrDoble;

$count3 = mysqli_fetch_array($r3);
$totalTriples=$count3[0];
$rTriple = mysqli_fetch_array($reservaTriple);
$totalrTriple=$rTriple[0];
$libreTriple=$totalTriples-$totalrTriple;

$count4 = mysqli_fetch_array($r4);
$totalFamiliar=$count4[0];
$rFamiliar = mysqli_fetch_array($reservaFamiliar);
$totalrFamiliar=$rFamiliar[0];
$libreFamiliar=$totalFamiliar-$totalrFamiliar;


$precioMatrimonial = mysqli_fetch_array($r6);
$pMatrimonial=$precioMatrimonial[0]; 
$precioDoble = mysqli_fetch_array($r7);
$pDoble=$precioDoble[0];
$precioTriple = mysqli_fetch_array($r8);
$pTriple=$precioTriple[0];
$precioFamiliar = mysqli_fetch_array($r9);
$pFamiliar=$precioFamiliar[0];

$cantDiasMatrimonial='SELECT DATEDIFF("'.$fechainicio.'","'.$fechasalida.'") AS DiffDate from habitacion inner join reserva on 
habitacion.id=reserva.id_habitacion where tipo="Matrimonia" and fecha_inicio and fecha_fin
between"'.$fechainicio.'" and "'.$fechasalida.'";';
$diasM=@mysqli_query($dbc,$cantDiasMatrimonial);
$diasMatrimonial = mysqli_fetch_array($diasM);
$dMatrimonial=$diasMatrimonial[0];

$cantDiasDoble='SELECT DATEDIFF("'.$fechainicio.'","'.$fechasalida.'") AS DiffDate from habitacion inner join reserva on 
habitacion.id=reserva.id_habitacion where tipo="Matrimonia" and fecha_inicio and fecha_fin
between"'.$fechainicio.'" and "'.$fechasalida.'";';
$diasD=@mysqli_query($dbc,$cantDiasDoble);
$diasDoble = mysqli_fetch_array($diasD);
$dDoble=$diasDoble[0];

$cantDiasTriple='SELECT DATEDIFF("'.$fechainicio.'","'.$fechasalida.'") AS DiffDate from habitacion inner join reserva on 
habitacion.id=reserva.id_habitacion where tipo="Matrimonia" and fecha_inicio and fecha_fin
between"'.$fechainicio.'" and "'.$fechasalida.'";';
$diasT=@mysqli_query($dbc,$cantDiasTriple);
$diasTriple = mysqli_fetch_array($diasT);
$dTriple=$diasTriple[0];

$cantDiasFamiliar='SELECT DATEDIFF("'.$fechainicio.'","'.$fechasalida.'") AS DiffDate from habitacion inner join reserva on 
habitacion.id=reserva.id_habitacion where tipo="Matrimonia" and fecha_inicio and fecha_fin
between"'.$fechainicio.'" and "'.$fechasalida.'";';
$diasF=@mysqli_query($dbc,$cantDiasFamiliar);
$diasFamiliar = mysqli_fetch_array($diasF);
$dFamiliar=$diasFamiliar[0];


		

mysqli_close($dbc);



?>


<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <script type="text/javascript" src="functionDate.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		

	<script type="text/javascript">
var x=0,y=0,z=0,w=0;
var a="<?php echo $libreMatrimonial; ?>";
var b="<?php echo $libreDoble; ?>";
var c="<?php echo $libreTriple; ?>";
var d="<?php echo $libreFamiliar; ?>";
var sumador=0;

function add(){


if(x<a){
x=x+1;
}document.getElementById('a1').innerHTML=x;


}
function less(){


if(x>0){
x=x-1;
}
document.getElementById('a1').innerHTML=x;

}

function add1(){


if(y<b){
y=y+1;
}document.getElementById('b1').innerHTML=y;


}

function less1(){


if(y>0){
y=y-1;
}
document.getElementById('b1').innerHTML=y;
}

function add2(){


if(z<c){
z=z+1;
}document.getElementById('c1').innerHTML=z;


}
function less2(){


if(z>0){
z=z-1;
}
document.getElementById('c1').innerHTML=z;

}

function add3(){


if(w<d){
w=w+1;
}document.getElementById('d1').innerHTML=w;


}
function less3(){


if(w>0){
w=w-1;
}
document.getElementById('d1').innerHTML=w;

}



var contM=0;

function deseleccionarM(){

contM=0;
document.getElementById('mostrando').innerHTML="";
}

function deseleccionarD(){

contD=0;
document.getElementById('mostrando').innerHTML="";
}

function deseleccionarT(){

contT=0;
document.getElementById('mostrando').innerHTML="";
}

function deseleccionarF(){

contF=0;
document.getElementById('mostrando').innerHTML="";
}

function imprimirMatrimonial(){

var noches=Math.abs(<?php echo $dMatrimonial; ?>);
var cant=x;
var precio=<?php echo $pMatrimonial;?>;
var totalPrecioM=noches*precio*cant;
sumador=sumador+totalPrecioM;

var datos="<br><br><label><h2>Habitacion: matrimonial<img src='icons/anular.png' class='anular-adds' onclick='deseleccionarM();'></h2></label><br>Cantidad:<label>"+cant+"</label><br>Precio noche:<label>S/."+precio+".00</label><br><label>Numero Noches:"+noches+"</label><br><h3><b>Total precio:<label>"+totalPrecioM+"</label></b></h3><br>";
contM=contM+1;
if(contM<=1)
	
	{document.getElementById('mostrando').innerHTML+=datos;document.getElementById('total').innerHTML="<h2>Total Reserva: S/."+sumador+".00</h2>";
document.getElementById('button-confirmar').innerHTML="<input type='submit' value='Reserva'>";

}
	
}

var contD=0;
function imprimirDoble(){
var noches=Math.abs(<?php echo $dDoble; ?>);
var cant=y;
var precio=<?php echo $pDoble;?>;
var totalPrecioD=noches*precio*cant;
var datos="<br><br><label><h2>Habitacion: Doble<img src='icons/anular.png' class='anular-adds' onclick='deseleccionarD();'></h2></label><br>Cantidad:<label>"+cant+"</label><br>Precio noche:<label> S/"+precio+".00</label><br><label>Numero Noches:"+noches+"</label><br><h3><b>Total precio:<label>"+totalPrecioD+"</label></b></h3><br>";
sumador=sumador+totalPrecioD;

contD=contD+1;
if(contD<=1)
	
	{document.getElementById('mostrando').innerHTML+=datos;document.getElementById('total').innerHTML="<h2>Total Reserva: S/."+sumador+".00</h2>";
document.getElementById('button-confirmar').innerHTML="<input type='submit' value='Reserva'>";
}
	
}

var contT=0;
function imprimirTriple(){
var noches=Math.abs(<?php echo $dTriple; ?>);
var cant=z;
var precio=<?php echo $pTriple;?>;
var totalPrecioT=noches*precio*cant;
var datos="<br><br><label><h2>Habitacion: Triple<img src='icons/anular.png' class='anular-adds' onclick='deseleccionarT();'></h2></label><br>Cantidad:<label>"+cant+"</label><br>Precio noche:<label>S/."+precio+".00</label><br><label>Numero Noches:"+noches+"</label><br><h3><b>Total precio:<label>"+totalPrecioT+"</label></b></h3><br>";
sumador=sumador+totalPrecioT;
contT=contT+1;
if(contT<=1)
	
	{document.getElementById('mostrando').innerHTML+=datos;document.getElementById('total').innerHTML="<h2>Total Reserva: S/."+sumador+".00</h2>";
document.getElementById('button-confirmar').innerHTML="<input type='submit' value='Reserva'>";
}
	
}

var contF=0;
function imprimirFamiliar(){
var noches=Math.abs(<?php echo $dFamiliar; ?>);
var cant=w;
var precio=<?php echo $pFamiliar;?>;
var totalPrecioF=noches*precio*cant;
sumador=sumador+totalPrecioF;

var datos="<br><br><label><h2>Habitacion: Familiar<img src='icons/anular.png' class='anular-adds' onclick='deseleccionarF();'></h2></label><br>Cantidad:<label>"+cant+"</label><br>Precio noche:<label>S/."
+precio+".00</label><br><label>Numero Noches:"+noches+"</label><br><h3><b>Total precio:<label>S/."+totalPrecioF+".00</label></b></h3><br>";
var cancel="<img src='icons/anular.jpg' class='anular-adds'>";
contF=contF+1;
if(contF<=1)
	
	{document.getElementById('mostrando').innerHTML+=datos;document.getElementById('total').innerHTML="<h2>Total Reserva: S/."+sumador+".00</h2>";
document.getElementById('button-confirmar').innerHTML="<input type='submit' value='Reserva'>";
}
	
}








</script>
		

   
<title>Hostal El Ancla / Reservas/ Resultados</title>
 <script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
<div id="container">
	              <div id="top">
	              		<div class="logo"><a href="index.html"><img src="icons/logoancla.png"></a></div>
						<div id="menu">
							<ul>
								<li><a href="nosotros.html"/>Sobre Nosotros</a><img src="icons/line.png"></li>
								<li><a href="servicios.html"/>Servicios</a><img src="icons/line.png"></li>
								<Li><a href="galeria.html"/>Galeria</a><img src="icons/line.png"></li>
								<li ><a  href="reserva.php"><label id="reserva-link">Reservas</label></a><img src="icons/line.png"></li>
								<li><a href="preguntas.html"/>Preguntas Frecuentes</a><img src="icons/line.png"></li>
							</ul>
						</div>
					    <div class="box-menu"><img src="icons/textBig.png" onclick="changeTextBig()";></div>
<div class="box-menu"><img src="icons/textSmall.png" onclick="changeTextSmall()";></div>
					    <div class="box-menu"><a href="mailto:elanclareservas@gmail.com"><img src="icons/email.png" ></a></div>
</div>

	


	<div id= "middle-result">
			<div id="context-result">
					<div class="context-box-result">
						<h1>Resultados de busqueda:</h1>
						 <p>A continuacion le mostramos los resultados por habitaciones(Matrimonial, Doble, Triple y Familiar)</p>
						<br>

						<div class="matrimonial">
								<div class="title"><h1><label id="hab-disponible">Hab. Disponibles: <label id="rc1"><?php echo $libreMatrimonial; ?></label> </label><?php echo "s/".$pMatrimonial.".00";?></h1></div><div class="title"><h2>Habitacion Matrimonial:<br><label id="fecha-buscada"><?php echo $fechainicio?> al <?php echo $fechasalida ?></label></h2></div>
								<div class="description"><label>Descripcion:</label><br>
								<p>Habitacion muy amplia y con espacios acogedores. La habitaciÃ³n tiene buena
									luminosidad y esta decorada con superficie rocosa en las paredes.
								    Cuenta con una cama de 2 plazas, toallas y jabones. </p><br>
								
								</div>
								<div class="description"><img src="images/fotoM1.jpg"></div>
								<div class="adds">
									<label>Servicios agregados:</label>
									<ul>
										<li></li>
									</ul>

								</div>
								
								<div class="price">
									<ul>
										<li>Precio Total:</li>
										
									</ul>
								</div>
								<div id="choose-number-room">
								<label>Seleccione n&ordm; habitaciones</label><br>
								<div class="button-reservar-less"><input type="button" value="-" onclick="less()" ></div>
								<div class="button-reservar-number"><p id="a1">0</p></div>
								<div class="button-reservar-more"><input type="button" value="+" onclick="add()"></div>
								<div class="button-reservar"><input type="button" value="Agregar" onclick="imprimirMatrimonial();"></div>
								
								

								</div>
					   </div>

						<div class="Doble">
								<div class="title"><h1><label id="hab-disponible">Hab. Disponibles: <?php echo $libreDoble; ?> </label><?php echo "s/".$pDoble.".00"?></h1></div><div class="title"><h2>Habitacion Doble:<br><label id="fecha-buscada"><?php echo $fechainicio?> al <?php echo $fechasalida ?></label></h2></div>
								<div class="description"><label>Descripcion:</label><br>
								<p>Habitacion muy amplia y con espacios acogedores. La habitaciÃ³n tiene buena
									luminosidad y esta decorada con superficie rocosa en las paredes.
								    Cuenta con una cama de 2 plazas, toallas y jabones. </p><br>
								
								</div>
								<div class="description"><img src="images/fotoM1.jpg"></div>
								<div class="adds">
									<label>Servicios agregados:</label>
									<ul>
										<li></li>
									</ul>

								</div>
								
								<div class="price">
									<ul>
										
										<li>Precio Total:</li>
										
									</ul>
								</div>
								<div id="choose-number-room">
								<label>Seleccione n&ordm; habitaciones</label><br>
								<div class="button-reservar-less"><input type="button" value="-"onclick="less1();"></div>
								<div class="button-reservar-number"><p id="b1">0</p></div>
								<div class="button-reservar-more"><input type="button" value="+" onclick="add1();"></div>
								<div class="button-reservar"><input type="button" value="Agregar" onclick="imprimirDoble()";></div>
								


								</div>
					   </div>

						<div class="triple">
								<div class="title"><h1><label id="hab-disponible">Hab. Disponibles:<label id='rc3'><?php echo $libreTriple;?></label></label><?php echo "s/".$pTriple.".00"; ?></h1></div><div class="title"><h2>Habitacion Triple:<br><label id="fecha-buscada"><?php echo $fechainicio;?> al <?php echo $fechasalida; ?></label></h2></div>
								<div class="description"><label>Descripcion:</label><br>
								<p>Habitacion muy amplia y con espacios acogedores. La habitaciÃ³n tiene buena
									luminosidad y esta decorada con superficie rocosa en las paredes.
								    Cuenta con una cama de 2 plazas, toallas y jabones. </p><br>
								
								</div>
								<div class="description"><img src="images/fotoM1.jpg"></div>
								<div class="adds">
									<label>Servicios agregados:</label>
									<ul>
										<li></li>
									</ul>

								</div>
								
								<div class="price">
									<ul>
										
										<li>Precio Total:</li>
										
									</ul>
								</div>
								
								<div id="choose-number-room">
								<label>Seleccione n&ordm; habitaciones</label><br>
								<div class="button-reservar-less"><input type="button" value="-" onclick="less2()"></div>
								<div class="button-reservar-number"><p id="c1">0</p></div>
								<div class="button-reservar-more"><input type="button" value="+" onclick="add2()"></div>
								<div class="button-reservar"><input type="button" value="Agregar" onclick="imprimirTriple()";></div>
								
								</div>

					   </div>

						<div class="familiar">
								<div class="title"><h1><label id="hab-disponible">Hab. Disponibles:<label id='rc4'><?php echo $libreFamiliar; ?></label> </label><?php echo "s/".$pFamiliar.".00" ?></h1></div><div class="title"><h2>Habitacion Familiar:<br><label id="fecha-buscada"><?php echo $fechainicio?> al <?php echo $fechasalida ?></label></h2></div>
								<div class="description"><label>Descripcion:</label><br>
								<p>Habitacion muy amplia y con espacios acogedores. La habitaciÃ³n tiene buena
									luminosidad y esta decorada con superficie rocosa en las paredes.
								    Cuenta con una cama de 2 plazas, toallas y jabones. </p><br>
								
								</div>
								<div class="description"><img src="images/fotoM1.jpg"></div>
								<div class="adds">
									<label>Servicios agregados:</label>
									<ul>
										<li></li>
									</ul>

								</div>
								
								<div class="price">
									<ul>
										
										<li>Precio Total:</li>
										
									</ul>
								</div>
								
								<div id="choose-number-room">
								<label>Seleccione n&ordm; habitaciones</label><br>
								<div class="button-reservar-less"><input type="button" value="-" onclick="less3();"></div>
								<div class="button-reservar-number"><p id="d1">0</p></div>
								<div class="button-reservar-more"><input type="button" value="+" onclick="add3()"></div>
								<div class="button-reservar"><input type="button" value="Agregrar" onclick="imprimirFamiliar();"></div>
								
								</div>

					   </div>

						
					</div>
					

			 </div>

			<div id="side-result">
				    <div id="change-date">
										<h3>Cambio de Fecha: </h3>
										<label>Entrada:</label><input type="text" id="checkin">
										<label>Salida :</label><input type="text" id="checkout"><br>
										<input type="button" value="BUSCAR" id="button-Search-change">
					</div>
                                                
					<div id="seleccion">

							<div id="mostrando">
                                                              <h1>Datos de su Reserva:</h1>        
                                                         
                                                         </div>
                                                        <div id="total">
                                                          
                                                         </div>
                                                         <form action="usuario.html" method="post" id="box-confirmar"><div id="button-confirmar"></div><form>
                                                         

					</div>
					
		 

			</div>
		</div>

		<div id="foot">
			<div class="foot-box">

					
					<ul><li><a href="conectMysql.html"><img src="icons/mapa.png">Mapa</a></li>
					<li><a href="<!--servicios.html-->"><img src="icons/servicios.png">Tours</a></li>
					<Li><a href="<!--galleria.html-->"><img src="icons/surf.png">Surf (clases/viajes)</a></li>
					</ul>


			</div>
			<div class="foot-box">
				<ul>
					<li><a href="conectMysql.html"><img src="icons/about.png">Sobre Nosotros</a></li>
					<li><a href="<!--servicios.html-->"><img src="icons/servicios.png">Servicios</a></li>
					<Li><a href="<!--galleria.html-->"><img src="icons/fotos.png">Galeria</a></li>
					<li><a href="reservas.html"><img src="icons/reservas.png">Reservas</a></li>
					<li><a href="<!--preguntas.html-->"><img src="icons/preguntas.png">Preguntas Frecuentes</a></li>
			    </ul>
					
			</div>
			<div class="foot-box">
				    <div class="logoF"><img src="icons/logoancla.png"></div>
					<ul>Escribemos:<li id="social"><a href="conectMysql.html"><img src="icons/facebook.png"></a>
						<a href="<!--servicios.html-->"><img src="icons/email.png"></a></li>
					
					
					</ul>
			</div>


</div>
<div id="autor">by Hostal El Ancla copyright2016</div>
</div>
</body>
</html>
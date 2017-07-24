

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <script type="text/javascript" src="js/funciones.js"></script>
  <script type="text/javascript">

 function changeTextBig(){
        	document.getElementById('menu').style="font-size:22px";
        	document.getElementById('foot').style="font-size:22px";
        }
         function changeTextSmall(){
        	document.getElementById('menu').style="font-size:16px";
        	document.getElementById('foot').style="font-size:16px";
        }
  </script>
   
<title>Hostal El Ancla / Reservas</title>
</head>
<body>
<div id="container">
			<div id="top">
							<div class="logo"><a href="index.html"><img src="icons/logoancla.png"></a>
							</div>
							<div id="menu">
								<ul>
									<li><a href="nosotros.html">Sobre Nosotros</a><img src="icons/line.png"></li>
									<li><a href="servicios.html">Servicios</a><img src="icons/line.png"></li>
									<Li><a href="galeria.html">Galeria</a><img src="icons/line.png"></li>
									<li ><a  href="reserva.php"><label id="reserva-link">Reservas</label></a><img src="icons/line.png"></li>
									<li><a href="preguntas.html">Preguntas Frecuentes</a><img src="icons/line.png"></li>
								</ul>
							</div>
							<div class="box-menu"><img src="icons/textBig.png" onclick="changeTextBig()";></div>
<div class="box-menu"><img src="icons/textSmall.png" onclick="changeTextSmall()";></div>
							<div class="box-menu"><a href="mailto:elanclareservas@gmail.com"><img src="icons/email.png" ></a></div>
</div>

    <div id="middle">
    	<div id="context">
								<div class="context-box">
										<h1>Busqueda de habitaciones: </h1>
										<form action="resultados.php" method="post">
											<label id="fecha1">Entrada:<img src="icons/calendario.png"></label><input type="date" name="entrada" value="<?php echo date("Y-m-d");?>">
											<label id="fecha2">Salida:<img src="icons/calendario.png"></label><input type="date" name="salida"value="<?php echo date("Y-m-d");?>"><br><br>
											<!--<select name="tipo">
												<option value="Matrimonial">Matrimonial</option>
												<option value="Doble">Doble</option>
												<option value="Triple">Triple</option>
												<option value="Familiar">Familiar</option>

											</select><br><br>-->
											  <label id="adicionales">Servicios adicionales:</label>
											  <input type="checkbox" name="Mascota" value="Mascota" class="checkbox"> Mascota
											  <input type="checkbox" name="Parking" value="Parking"  class="checkbox"> Parking
											  <input type="checkbox" name="Desayuno" value="Desayuno"  class="checkbox"> Desayuno<br><br>
									        
											<input type="submit" value="Buscar" id="button-search">
									    </form>
									</div>
								</div>
								    <div id="comment-confirm">
    <div id="TA_selfserveprop633" class="TA_selfserveprop"><a href=""></a>
    <ul id="SWkDpWBqh4C" class="TA_links eC2jwuclzwe"><a href=""></a>
        <li id="iXc1QV0Dbv" class="Z26Umg03HgL"><a href=""></a><a target="_blank" href="https://www.tripadvisor.com.pe/"><img src="https://www.tripadvisor.com.pe/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor" /></a></li>
    </ul>
    </div>
    <script src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=633&amp;locationId=1516204&amp;lang=es_PE&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=false&amp;display_version=2"></script>   				
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
					<li><a href="servicios.html"><img src="icons/servicios.png">Servicios</a></li>
					<Li><a href="<!--galleria.html-->"><img src="icons/fotos.png">Galeria</a></li>
					<li><a href="reservas.html"><img src="icons/reservas.png">Reservas</a></li>
					<li><a href="<!--preguntas.html-->"><img src="icons/preguntas.png">Preguntas Frecuentes</a></li>
			    </ul>
					
			</div>
						<div class="foot-box">
							    <div class="logoF"><img src="icons/logoancla.png"></div>
								<ul>Escribemos:<li id="social"><a href="conectMysql.html"><img src="icons/facebook.png"></a><a href="<!--servicios.html-->"><img src="icons/email.png"></a></li>
								
								
								</ul>
						        



						</div>
</div>
<div id="autor">by Hostal El Ancla copyright2016</div>
</div>

</body>
</html>
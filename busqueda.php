<?php require_once("includes/header.php"); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/unslider.min.js"></script>
<!--<script src="./js/google.js" type="text/javascript"></script>-->

<!--<style type="text/css" media="screen">

      .panel-body {
        width:800px;
		height:2000px;
		overflow-x: scroll;
		overflow-y: scroll;
      }

	  

    </style> -->
</head>

<body> 
<!-- ************************************************** -->
	<header class="clearfix">
		<a href="./"><div class="logo col-md-3"><h2 class="logo-text">My Patente</h2></div></a>
		<nav class="clearfix">
			<ul class="clearfix">
				<li><a href="./index.php">Inicio</a></li>
				<li><a href="#contacto" class="last">contact</a></li>
			</ul>
        </nav>
        <div class="pullcontainer" id="patente">
			<a href="#" id="pull"><i class="fa fa-bars fa-2x"></i></a>
        </div>     
	</header>		
<!-- ************************************************** -->
	<div class="banner bbusqueda">
		<ul>
			<li style="background-image: url('img/planos1.jpg');">
			  <div class="container">
				<div class="row">
				  <div class="col-md-6 col-md-offset-3">
					<div class="hero-title2">
					  Resultados de la búsqueda
					</div>
					<br>
					<br>
				</div>
			</div>
		</div>
		</li>
		</ul>
    </div>
	
	<!-- FILTROS DE BUSQUEDAS -->
    <div class="quote-container">
      <div class="container vert-text">
		<br>
        <h1>Buscador de Patentes</h1>
        <br>
        <br>
        <form action="busqueda.php" method="post">
		<tr></tr>
        <tr>
        <div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-primary">
					<div class="panel-heading"> <!-- OJO ESTÁ EN AZUL, CAMBIARLOOOOOO-->
						<input name="buscador" type="text" value="<?php  $a; ?>" />
						<input name="Buscar" type="submit" id="Buscar" value="Buscar" />
						<div id="searchForm" style="display:none;"></div>
						<select id="restrict" onchange="formSubmit(searchform);return false;"></select>
						<select id="sort" onchange="formSubmit(searchform);return false;"></select>
						<a name="Volver" type="submit" href="index.php" value="Volver" class="btn btn-lg btn-primary derecha">Volver</a>
						</td>
					</div>
					<div class="panel-body"> 
					
						<!-- ************************** /Codigo PHP ************************** -->
							<?php 
							  include('google.php');

							  error_reporting(E_ALL ^ E_DEPRECATED);
							//funcion para extraer codigo html entre 2 límites

							  function cortar($beg, $end, $str) {
							   $a = explode($beg, $str, 2);
							   $b = explode($end, $a[1]);
							   return $beg . $b[0] . $end;
							  }


							  $url1="http://worldwide.espacenet.com/searchResults?compact=false&AB=";
								$url2="http://www.oepm.es/es/signos_distintivos/resultados.html?denominacion=Contenga&texto=";
								$url3="http://ep.espacenet.com/searchResults?compact=false&AB=";
								$url3end="&ST=quick&locale=en_EP&submitted=true&DB=ep.espacenet.com";

								//Definimos las urls finales con la cadena a buscar
								$f1=$url1.$a;
								$f2=$url2.$a;
								$f3=$url3.$a.$url3end;

								//url de la pagina para arreglar los enlaces relativos
								$oldSetting = libxml_use_internal_errors( true );
								libxml_clear_errors();
								$html = new DOMDocument();
								$html->loadHtmlFile("tmp.php");
								$xpath = new DOMXPath( $html );
								//extraemos todos los enlaces para poder corregirlos
								$links = $xpath->query( '//a[starts-with(@href,"/es/signos_distintivos/detalle.html?")] | //td ');
								$tabladef='<table width="700" border="1"> <tr> <td>';
								$tablacont='</td> </tr> <tr> <td>';
								$tablaend='</td> </tr> </table>';
								$estilo='<style type="text/css"> body,td,th { font-family: "Trebuchet MS", Helvetica, sans-serif; } </style>';
								//----Parte de patentes europeas----

								$urleur = file_get_contents($f3);
								//echo $urleur;
								//extraemos la tabla donde se encuentra el contenido que nos interesa del html obtenido
								$urleur= cortar('<table class="application">', '</table>', $urleur);
								//eliminamos los checkbox innecesarios
								$limpiar_checkbox='<input type="checkbox"[^>]*>';
								$urleur = eregi_replace($limpiar_checkbox,'',$urleur);
								//arreglamos las url relativas
								$url_repair='<a  href="/publicationDetails/[^>]*biblio';
								$urleur = eregi_replace($url_repair,'<a  href="http://worldwide.espacenet.com/publicationDetails/biblio',$urleur);
								//añadimos el estilo de la fuente
								$estilo='<style type="text/css"> body,td,th { font-family: "Trebuchet MS", Helvetica, sans-serif; } </style>';
								//Escribimos todos los resultados a fichero y con su estilo, cabecera con la codificacion

								echo $estilo;
								echo $tabladef;
								echo $urleur;
								echo $tablacont;
								echo $tablaend;
							?>


								<!-- CONTENIDO DE PATENTES -->
								<?php $a=$_POST["buscador"]; ?>
								<!-- FIN CONTENDIO DE PATENTES -->
					
					
					</div>
				</div>            
			</div>
          </div>
        </div>
      </div>
	
	
<!-- ************************************************** -->
  <div id="contacto">
	<?php require_once("includes/footer.php"); ?>
  </div>

</body>
</html>
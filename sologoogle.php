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
				<li><a href="#contacto" class="last">Contacto</a></li>
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
						
						<div id="searchForm" style="display:none;"></div>
						<select id="restrict" onchange="formSubmit(searchform);return false;"></select>
						<select id="sort" onchange="formSubmit(searchform);return false;"></select>
						<input name="Buscar" type="submit" id="Buscar"  class="btn btn-lg btn-primary " value="Buscar" />
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
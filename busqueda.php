<?php require_once("includes/header.php"); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/unslider.min.js"></script>
<!--<script src="./js/google.js" type="text/javascript"></script>-->
</head>
  <body>
		<header class="clearfix">
		    <a href="./"><div class="logo col-md-3"><h2 class="logo-text">My Patente</h2></div></a>
		    <nav class="clearfix">
            <ul class="clearfix">
                <li><a href="./">Buscador</a></li>
                <li><a href="#equipo">Equipo</a></li>
                <li><a href="./busqueda.php" class="active">Búsquedas</a></li>
                <li><a href="#">how we help</a></li>
                <li><a href="#">take the tour</a></li>
                <li><a href="#" class="last">contact</a></li>
            </ul>
        </nav>
        <div class="pullcontainer" id="patente">
        <a href="#" id="pull"><i class="fa fa-bars fa-2x"></i></a>
        </div>     
		</header>
    <div class="banner">
    <ul>
        <li style="background-image: url('img/planos1.jpg');">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <div class="hero-title">
                  Resultados
                </div>
				<br>
				<br>
            </div>
        </div>
    </div>
    </li>
    </ul>
    </div>
    <!-- Formulario -->
    <div id="top" class="header">
      <div class="vert-text">
        <br>
        <h1>Buscador de Patentes</h1>
        <a name="Volver" type="submit" href="index.html" value="Volver" class="btn btn-lg btn-primary">Volver</a>
        <br>
        <br>
        <form action="busqueda.php" method="post">
          <tr></tr>
          <tr>
          <div class="col-md-6 col-md-offset-3 text-center">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <input name="nomb" type="text" value="<?php echo $a; ?>" />
                <input name="Buscar" type="submit" id="Buscar" value="Buscar" />
                <div id="searchForm" style="display:none;"></div>
                  <select id="restrict" onchange="formSubmit(searchform);return false;"></select>
                  <select id="sort" onchange="formSubmit(searchform);return false;"></select>
                  </td>
              </div>
              <div class="panel-body">
    <!-- /Formulario -->

<!-- /Codigo PHP -->
<?php 
  include('google.php');
?>

    <!-- CONTENIDO DE PATENTES -->
    <?php $a=$_POST[buscador]; ?>
    <!-- FIN CONTENDIO DE PATENTES -->

    <!-- FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">            
          </div>
          <div class="col-md-4">
            <ul class="icons">
                    <li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
                    <li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
                    <li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
            </ul>
                <br>
            <div class="copyright" align="center">
                &copy; TIO - MY PATENTE 2014/2015 - COPYRIGHT &copy;
            </div>
          </div>
          <div class="col-md-4">         
          </div>

        </div>
      </div>  
    </footer>

</body>
</html>
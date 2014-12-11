<?php require_once("includes/header.php"); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/unslider.min.js"></script>
<!--<script src="./js/google.js" type="text/javascript"></script>-->

<style type="text/css" media="screen">

      .panel-body {
        width:800px;
		height:2000px;
		overflow-x: scroll;
		overflow-y: scroll;
      }

	  

    </style>
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

  <?php require_once("includes/footer.php"); ?>

</body>
</html>
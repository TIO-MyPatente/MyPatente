<?php require_once("includes/header.php"); ?>
</head>
  <body>
		<header class="clearfix">
		    <a href="./"><div class="logo col-md-3"><h2 class="logo-text">My Patente</h2></div></a>
		    <nav class="clearfix">
            <ul class="clearfix">
                <li><a href="./" class="active">Buscador</a></li>
                <li><a href="#equipo">Equipo</a></li>
                <li><a href="#patentes">Patentes </a> </li>
				<li><a href="#info" class="last">Acerca de</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
        <div class="pullcontainer" id="patente">
        <a href="#" id="pull"><i class="fa fa-bars fa-2x"></i></a>
        </div>
		</header>
    <div class="banner bindex">
    <ul>
        <li style="background-image: url('img/planos1.jpg');">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <div class="hero-title">
                  Buscador de Patentes
                </div>
				<br>
				<br>
				<!-- ****************** FORMULARIO BUSCADOR ********************* -->
				<form action="busqueda.php" method="post">
					<div class="form-group">
					  <input class="form-control" type="text" name="buscador" placeholder="Introduce un término" required autofocus>
					</div>
					<input class="btn btn-lg btn-primary" name="Buscar" type="submit" id="Buscar" value="Buscar">

				</form>
              </div>
            </div>
          </div>
        </li>

    </ul>
</div>

    <div class="container" id="equipo">
    <div class="arrow"></div>
    </div>
	<div class="h2-wrap">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <h2 class="standard-block">EQUIPO</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container carousel">
      <div class="row">

        <div class="col-md-2">
        <div class="ca-hover">
          <div class="carousel-img">
            <img src="img/edu.png" alt="Carousel Img">
          </div>
          <div class="carousel-content">
            <h3>Eduardo Acuña Ledesma</h3>
          </div>
        <div class="overlay"></div>
        </div>
        </div>

        <div class="col-md-2">
        <div class="ca-hover">
          <div class="carousel-img">
            <img src="img/sergio.png" alt="Carousel Img">
          </div>
          <div class="carousel-content">
            <h3>Sergio Díaz González</h3>
          </div>
          <div class="overlay"></div>
        </div>
        </div>

        <div class="col-md-2">
        <div class="ca-hover">
          <div class="carousel-img">
            <img src="img/jhoa.png" alt="Carousel Img">
          </div>
          <div class="carousel-content">
            <h3>Jhoanmary Pérez Fariña</h3>
          </div>
          <div class="overlay"></div>
        </div>
        </div>

		<div class="col-md-2">
        <div class="ca-hover">
          <div class="carousel-img">
            <img src="img/rushil.png" alt="Carousel Img">
          </div>
          <div class="carousel-content">
            <h3>Rushil Lakhani Lakhani</h3>
          </div>
          <div class="overlay"></div>
        </div>
        </div>

		<div class="col-md-2">
        <div class="ca-hover">
          <div class="carousel-img">
            <img src="img/santi.png" alt="Carousel Img">
          </div>
          <div class="carousel-content">
            <h3>Santiago Sainz Fernández</h3>
          </div>
          <div class="overlay"></div>
        </div>
        </div>

        <div class="col-md-2">
        <div class="ca-hover">
          <div class="carousel-img">
            <img src="img/jony.png" alt="Carousel Img">
          </div>
          <div class="carousel-content">
            <h3>Jonathan Barrera Delgado</h3>
          </div>
          <div class="overlay"></div>
        </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="controls">
          <ul>
            <li><span class="pagination active"></span></li>
            <li><span class="pagination"></span></li>
            <li><span class="pagination"></span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-inter" id="info">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Un equipo comprometido con su trabajo.</h3>
          <p>El equipo que ha creado esta aplicación busca brindar a todas las personas la información y flexibilidad necesarias para moverser facilmente en el mundo de las patentes. En nuestra sociedad actual la busqueda de información rápida y eficaz es el mejor instrumento para el triunfo, para ello nuestro equipo trabaja para proporcionar a los usuarios la mejor información sobre patentes de la mejor forma posible.</p>
          <div class="divider"></div>
          <a href="#equipo" class="button solid-color">Conoce al Equipo</a>
        </div>
        <div class="col-md-6">
          <h3>¿Que es una patente y en que te puede ayudar MyPatente?</h3>
          <p>La patente es un derecho, otorgado por un gobierno al titular de la patente, este derecho permite al titular impedir que terceros hagan uso de esa tecnología patentada. El titular es el único que puede hacer uso de la tecnología que reivindica en la patente o autorizar a terceros a implementarla bajo las condiciones que el titular fijo.</p>
          <p>La definición anterior deja en claro la importancia de una aplicación web como la que ofrecemos, a lo largo de los dias se mueven un sin fin de pantetes a nivel mundial, por ello y para facilitar la obtención de datos sobre patentes existe esta aplicación. Con nosotros podras tener conocimiento de las patentes existentes segun paises, algo que puede ayudarte a plantear tu estrategia de negocio para con un tecnología o que puede beneficiarte gracias a nuestro programa premium para empresas que desean que sus patentes estén presentes ante el resto de usuarios. Si lo que necesitas es información sobre patentes, en nuestra aplicación web encontraras la solución que buscas. Bienvenido y disfruta navegando por ella.</p>
        </div>
      </div>
    </div>
    </div>
    <div class="h2-wrap">
      <div class="container" id = "patentes">
        <div class="row">
        <div class="col-md-12">
          <h2 class="standard-block">PATENTES</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid container-articles">
      <div class="row articles">
        <div class="col-md-2 article-img">
          <a href="#"><img src="img/articles/01.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href="#"><img src="img/articles/02.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href="#"><img src="img/articles/03.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href="#"><img src="img/articles/04.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href="#"><img src="img/articles/05.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href="#"><img src="img/articles/06.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
      </div>
      <div class="row articles">
        <div class="col-md-2 article-img">
          <a href="#"><img src="img/articles/07.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href="#"><img src="img/articles/08.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href="#"><img src="img/articles/09.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href="#"><img src="img/articles/10.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href="#"><img src="img/articles/11.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href="#"><img src="img/articles/12.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
      </div>
    </div>

    <div class="quote-container">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <div class="col-md-10 col-md-offset-1">
            <div class="quote-slideshow">
              <figure class="show"><h2>"Las patentes de software son peligrosas para los desarrolladores de software porque imponen monopolios sobre ideas de software." </h2>
              <figcaption>
                Richard Stallman
              </figcaption>
              </figure>
              <figure><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa.</h2>
              <figcaption>
                Nam mi enim, auctor.
              </figcaption>
              </figure>
            </div>
            </div>
            <span class="quote-prev circle"><i class="fa fa-angle-left fa-2x"></i></span>
            <span class="quote-next circle"><i class="fa fa-angle-right fa-2x"></i></span>
          </div>
        </div>
      </div>
    </div>
    <div class="shadow" id= "contacto"></div>
	<?php require_once("includes/footer.php"); ?>

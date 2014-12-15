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
          <h3>Lorem ipsum dolor sit amet consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed.</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa. Nullam condimentum mauris et rhoncus sagittis. Sed eu metus in diam tincidunt egestas non at odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
          <div class="divider"></div>
          <a href="#" class="button solid-color">BUTTON</a>
          <a href="#" class="button extra-color">BUTTON</a>
        </div>
        <div class="col-md-6">
          <h3>Lorem ipsum dolor sit amet consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed.</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa. Nullam condimentum mauris et rhoncus sagittis. Sed eu metus in diam tincidunt egestas non at odio.</p>
          <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vitae lectus erat. Duis consequat laoreet velit. Mauris convallis, sapien sit amet scelerisque accumsan, felis urna aliquet nunc, viverra mollis odio tellus a nisl. Nulla lobortis lectus non rutrum viverra. Sed et molestie libero. Sed ut ultrices dui.</p>
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
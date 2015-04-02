<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/td/html4/strict.">
<html>
<head>
	<title>Title!</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="Style/Style.css">
	<link rel="stylesheet" type="text/css" href="Style/Animation.css">
	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/Smooth_scroll.js"></script>
	<script type="text/javascript" src="js/slideshow.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/js/materialize.min.js"></script>
	<script type="text/javascript" src="js/modals.js"></script>
	
</head>
<body>
	
	<div class="navbar-fixed">
		<nav>
		    <div class="nav-wrapper blue-grey darken-3">
			    <ul id="nav-mobile" class="left hide-on-med-and-down">
				    <li><a class=" active" href="#home" data="home">Home</a></li>
				    <li><a class="" href="#produits" data ="produits">Produits</a></li>
				    <li><a class=" " href="#about" data="about">About</a></li>
				    <li><a class=" " href="#contact" data="contact">Contact</a></li>
			    </ul>
			    <ul id="nav-mobile" class="right hide-on-med-and-down">
				    <li><a href="#modal1" data="signin" class="modal-trigger waves-effect waves-light modal-trigger"> <i class="ion-log-in small"></i> Sign In</a></li>
			    </ul>
		    </div>
	  	</nav>
  	</div>
  	<!-- Modal Structure -->
  	<div id="modal1" class="modal modal-fixed-footer">
  		<div class="modal-content">
  			<h4>Modal Header</h4>
  			<p>A bunch of text</p>
  		</div>
  	</div>
  	<section id="home">
  		<!-- <div class="container">
  			<h1>
  				Bienvenu sur notre Site
  			</h1>
  		</div> -->
  		
  		<div id="slideshow" class="container">
  			
  			<div>
  				<img class="image_slide" src="images/WoodStock.png">
  			</div>
  			<div>
  				<img class="image_slide" src="images/astro.png">
  			</div>
  			<div>
  				<img class="image_slide" src="images/space.png">
  			</div>
  			<div>
  				<img class="image_slide" src="images/electric.png">
  			</div>
  			
  		</div>
  	</section>

  	<section id="produits">
  		<br><br><br>
  		<div class="title">
	  		<h3>Produits</h3>
	  		<h5>Découvrer toutes nos catégories de Produits</h5>
  		</div>
  		<div class="container">

			<div class="row">
				<div class="col s4">
					<div class="center guitar blue-grey darken-3">
						<div class="featured-image view">
							<div class="mask">  
							    <h2>Instruments a cordes</h2>  
							    <p> Retrouvez notre selection de guitares, pianos, violons,
							    	luth...
							    </p>  
							    <a href="#" class="info">Consulter</a>  
							</div>
						</div>
					</div>
				</div>

				<div class="col s4">
					
					<div class="center perc blue-grey darken-3">
						<div class="featured-image view">
							<div class="mask">  
							    <h2>percussions</h2>  
							    <p> Retrouvez notre selection de Batteries, Bangos, 
							    	Tamtams...
							    </p>  
							    <a href="#" class="info">Consulter</a>  
							</div>
						</div>
					</div>

					
					
				</div>
				<div class="col s4">
					<div class="center saxo blue-grey darken-3">
						<div class="featured-image view">
							<div class="mask">  
							    <h2>Instrument a vent</h2>  
							    <p> Retrouvez notre selection de Trempettes, Clarinettes, 
							    	Saxo...
							    </p>  
							    <a href="#" class="info">Consulter</a>  
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s4 offset-s2">
					<div class="center electronic blue-grey darken-3">
						<div class="featured-image view">
							<div class="mask">  
							    <h2>Instruments électroniques</h2>  
							    <p> Retrouvez notre selection de moogs, theramines, 
							    	clavier...
							    </p>  
							    <a href="#" class="info">Consulter</a>  
							</div>
						</div>
					</div>
				</div>
				<div class="col s4">
					<div class="center accessoires blue-grey darken-3">
						<div class="featured-image view">
							<div class="mask">  
							    <h2>Accessoires</h2>  
							    <p> Retrouvez notre selection d'Amplis, Pédales, 
							    	Cordes...
							    </p>  
							    <a href="#" class="info">Consulter</a>  
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  	</section>

  	<section id="about">

  	</section>
  	<footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                	<h5 class="white-text">Footer Content</h5>
                	<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
            	<div class="col l4 offset-l2 s12">
                	<h5 class="white-text">Links</h5>
                	<ul>
                  		<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    	<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  		<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  		<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                	</ul>
            	</div>
            </div>
         </div>
        <div class="footer-copyright">
            <div class="container">
            	© 2014 Copyright Text
            	<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

</body>
</html>
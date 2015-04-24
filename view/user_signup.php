<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/td/html4/strict.">

<html>
<head>
	<title>User</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="Style/Style.css">
	<link rel="stylesheet" type="text/css" href="Style/Animation.css">
	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/Smooth_scroll.js"></script>
	<script type="text/javascript" src="js/slideshow.js"></script>
	<script src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/modals.js"></script>
	
</head>
<body>  

	<div class="navbar-fixed">
		<nav>
		    <div class="nav-wrapper blue-grey darken-3">
			    <ul id="nav-mobile" class="left hide-on-med-and-down">
				    <li><a class="active" href="index.php" data="home">Home</a></li>
				    <li><a class="" href="index.php#produits" data ="produits">Produits</a></li>
				    <li><a class="" href="index.php#services" data="services">Service</a></li>
				    <li><a class="" href="index.php#about" data="about">About</a></li>
				    <li><a class="" href="index.php#contact" data="contact">Contact</a></li>
			    </ul>
			    <ul id="nav-mobile" class="right hide-on-med-and-down">
				    <li>
				    	<a href="#modal1" data="signin" class="modal-trigger waves-effect waves-light modal-trigger"> 
				    		<i class="ion-log-in small"></i> Sign In
				    	</a>
				    </li>
			    </ul>
		    </div>
	  	</nav>
  	</div>

  	<div id="modal1" class="modal modal-fixed-footer">
  		<div class="modal-content">
  			<h4>Sign In</h4>
  			<br>
  			<form >
  				<div class="row">
  					<div class="input-field col s12">
  						<i class="mdi-action-account-circle prefix"></i>
  						<input id="icon_prefix" type="text" class="validate">
  						<label for="icon_prefix">Pseudo</label>
  					</div>
  					<div class="input-field col s12">
  						<i class="mdi-action-lock prefix"></i>
  						<input id="icon_password" type="password" class="validate">
  						<label for="icon_password">Mot de Passe</label>
  						<center>
  							<a class="tooltipped btn-floating btn-medium" data-position="bottom" data-delay="50" data-tooltip="mot de pass oublié" href="#"><i class="mdi-action-help"></i></a>
  						</center>
  					</div>
  				</div>
  				<br>
  				<br>
  				<div class="row">
  					<center>
  					<div class="col s6">
  						<input id="login" type="submit" class="btn cyan darken-2" value="Sign In">
  					</div>
  					<div class="col s6">
  						<a href="user_sigup.php"> 
				    		<input id="signup" type="button" class="btn pink darken-3" value="Sign Up">
				    	</a>
  					</div>
  					</center>
  				</div>
  			</form>
  		</div>
  	</div>

  	<section id="user_signup">
  		<div class="container">
  			<br>
  			<h4>Sign Up</h4>
  			<br>
  			<form action="controller/signupController.php" method="POST">
  				<div class="row">
  					<div class="input-field col s12">
  						<i class="mdi-action-account-circle prefix"></i>
  						<input id="icon_prefix" type="text" name="prenom" class="validate">
  						<label for="icon_prefix">prenom</label>
  					</div>
  					<div class="input-field col s12">
  						<i class="mdi-action-account-circle prefix"></i>
  						<input id="icon_prefix" type="text" name="nom" class="validate">
  						<label for="icon_prefix">nom</label>
  					</div>
  					<div class="input-field col s12">
  						<i class="mdi-action-account-circle prefix"></i>
  						<input id="icon_prefix" type="text" name="sexe" class="validate">
  						<label for="icon_prefix">sex</label>
  					</div>
  					<div class="input-field col s12">
  						<i class="mdi-action-account-circle prefix"></i>
  						<input id="icon_prefix" type="text"  name="date_naissance" class="validate">
  						<label for="icon_prefix">date de naissance</label>
  					</div>
  					<div class="input-field col s12">
  						<i class="mdi-action-account-circle prefix"></i>
  						<input id="icon_prefix" type="text"  name="adresse" class="validate">
  						<label for="icon_prefix">adresse</label>
  					</div>
  					<div class="input-field col s12">
  						<i class="mdi-action-account-circle prefix"></i>
  						<input id="icon_prefix" type="text"  name="CIN" class="validate">
  						<label for="icon_prefix">num° carte d'identité</label>
  					</div>
  					<div class="input-field col s12">
  						<i class="mdi-action-account-circle prefix"></i>
  						<input id="icon_prefix" type="text" name="num_tel" class="validate">
  						<label for="icon_prefix">num° telephone</label>
  					</div>
  					<div class="input-field col s12">
  						<i class="mdi-action-account-circle prefix"></i>
  						<input id="icon_prefix" type="text"  name="username" class="validate">
  						<label for="icon_prefix">Username</label>
  					</div>
  					<div class="input-field col s12">
  						<i class="mdi-action-lock prefix"></i>
  						<input id="icon_password" type="password"  name="password" class="validate">
  						<label for="icon_password">Password</label>
  					</div>
  					<div>
  						<center><input id="signup" type="submit" class="btn pink darken-3" value="Sign Up"></center>
					</div>
  				</div>
  			</form>
  		</div>
  	</section>

  	<footer class="page-footer blue-grey darken-3">
        <div class="container">
            <div class="row">
                <div class="col l4 white-text">
                	<h5 class="white-text">Main Navigation</h5>
                <ul id="footer-nav" class="left">
				    <li><a class="active" href="#home" data="home">Home</a></li>
				    <li><a class="" href="#produits" data ="produits">Produits</a></li>
				    <li><a class="" href="#services" data="services">Service</a></li>
				    <li><a class="" href="#about" data="about">About</a></li>
				    <li><a class="" href="#contact" data="contact">Contact</a></li>
			    </ul>
                </div>
                <div class="col l4">
                	<h5 class="white-text">Site Links</h5>
                <ul id="site-links" class="left">
                	<li><a href="#">Terms of service</a></li>
                	<li><a href="#">Privacy policy</a></li>
                	<li><a href="#">+216 xx xx xx xx</a></li>
                </ul>

                </div>
            	<div class="col l4">
                	<h5 class="white-text">Social</h5>
                	
                  	<div class="row social">
                  		<div class="col l2">
                  			<a href="#"><i class="ion-social-twitter large"></i></a>
                  		</div>
                  		<div class="col l2">
                  			<a href="#"><i class="ion-social-facebook large"></i></a>
                  		</div>
                  		<div class="col l2">
                  			<a href="#"><i class="ion-social-rss large"></i></a>
                  		</div>
                  	</div>
            	</div>
            </div>
         </div>
        <div class="footer-copyright">
            <div class="container">
            	© 2015 Copyright Team Unicorns
            	
            </div>
        </div>
    </footer>

</body>
</html>
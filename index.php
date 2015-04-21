<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/td/html4/strict.">
<?php
require 'phpmailer/PHPMailerAutoload.php';
?>

<html>
<head>
	<title>Title!</title>
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
				    <li><a class="active" href="#home" data="home">Home</a></li>
				    <li><a class="" href="#produits" data ="produits">Produits</a></li>
				    <li><a class="" href="#services" data="services">Service</a></li>
				    <li><a class="" href="#about" data="about">About</a></li>
				    <li><a class="" href="#contact" data="contact">Contact</a></li>
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


  	<!-- Modal Structure -->
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
  						<a href="user_signup.php"> 
				    		<input id="signup" type="button" class="btn pink darken-3" value="Sign Up">
				    	</a>
  					</div>
  					</center>
  				</div>
  			</form>
  		</div>
  	</div>
  	<!--END Modal Structure-->

  	<section id="home">
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
	  		<h3>PRODUCTS</h3>
	  		<h4>Browse all our products</h4>
  		</div>
  		<div class="container">

			<div class="row">
				<div class="col s4">
					<div class="center guitar blue-grey darken-3">
						<div class="featured-image view">
							<div class="mask">  
							    <h2>string instruments</h2>  
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
							    <h2>Wind instruments</h2>  
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

  	<section id="services">
  		<br><br><br>
  		<div class="title">
	  		<h3>SERVICES</h3>
	  		<h4>Check here for any help and more.</h4>
  		</div>
	  		<div class="container">
	  			<div class="row">
	            <div class="col s4 view">
	              <div class="promo promo-example">
	                <i class="mdi-action-assignment-late"></i>
	                <p class="icone-titre">Claim</p>
	                <p class="icone-texte">Check this page to submit your claim.</p>
	              </div>
	            </div>
	            <div class="col s4 view">
	              <div class="promo promo-example">
	                <i class="mdi-action-question-answer"></i>
	                <p class="icone-titre">Forum</p>
	                <p class="icone-texte">Get in touch with other customers and share your experience.</p>
	              </div>
	            </div>
	            <div class="col s4 view">
	              <div class="promo promo-example">
	                <i class="mdi-communication-live-help"></i>
	                <p class="icone-titre">FAQ</p>
	                <p class="icone-texte">Frequently asked questions.</p>
	              </div>
	            </div>
	        </div>
  		</div>
  	</section>


  	<section id="about">
  		<br><br><br>
  		<div class="title">
	  		<h3>ABOUT</h3>
  		</div>
  		<!-- <div class="container"> -->
	  		<div class="row">
	  			<div class="col m2 offset-m1">
	  				<div class="view">  
	  					<img src="images/bob.png" alt="" class="circle responsive-img">  
	  					<div class="mask circle">  
	  						<h2>Mohamed El Fadhel El Hachemi</h2>  
	  						<p>Your Text</p>  
	  						<a href="#" class="info">Read More</a>  
	  					</div>  
	  				</div>  
				</div>
	  			<div class="col m2">
	  				<div class="view">  
	  					<img src="images/seif.png" alt="" class="circle responsive-img">  
	  					<div class="mask circle">  
	  						<h2>Seif Oueslati</h2>  
	  						<p>Your Text</p>  
	  						<a href="#" class="info">Read More</a>  
	  					</div>  
	  				</div>
	  			</div>
	  			<div class="col m2">
	  				<div class="view">  
	  					<img src="images/bacem.png" alt="" class="circle responsive-img">  
	  					<div class="mask circle">  
	  						<h2>Bacem Ben Achour</h2>  
	  						<p>Your Text</p>  
	  						<a href="#" class="info">Read More</a>  
	  					</div>  
	  				</div>
  				</div>
  				<div class="col m2">
  					<div class="view">  
	  					<img src="images/alaa.png" alt="" class="circle responsive-img">  
	  					<div class="mask circle">  
	  						<h2>Alaa Ksontini</h2>  
	  						<p>Your Text</p>  
	  						<a href="#" class="info">Read More</a>  
	  					</div>  
	  				</div>
  				</div>
  				<div class="col m2">
  					<div class="view">  
	  					<img src="images/ilyes.png" alt="" class="circle responsive-img">  
	  					<div class="mask circle">  
	  						<h2>Ilyes Lefi</h2>  
	  						<p>Your Text</p>  
	  						<a href="#" class="info">Read More</a>  
	  					</div>  
	  				</div>
  				</div>
  			</div>
  		<!-- </div> -->
  			<div class="container text">
  				<p>This website was conceived under ESPRIT student license. 
  				It is in no way a commercial site.
  				This website serves as proof of concept, to showcase HTML, CSS, JavaScript and PHP learned skills.</p>
  			</div>
  	</section>

  	<section id="contact">
  		<br><br><br>
  		<div class="title">
	  		<h3>CONTACT</h3>
	  	</div>
	  	<div class="container">
	  		<br>
                        <form action="index.php" method="POST">
	  			<div class="row">
				     <div class="col s12">
					        <div class="input-field col s4 offset-s1">
					          <i class="mdi-action-account-circle prefix"></i>
					          <input id="icon_prefix" type="text" class="validate" name="nom">
					          <label for="icon_prefix">Name</label>
					        </div>
					        <div class="input-field col s6 offset-s1">
					          <i class="mdi-communication-email prefix"></i>
					          <input id="icon_prefix" type="email" class="validate" name="mail">
					          <label for="icon_prefix">E-Mail</label>
					        </div>
				    </div>
				</div>
				<br>
				<div class="row">
				    <div class="col s12">
				      <div class="row">
				        <div class="input-field col s12">
				        	<i class="mdi-editor-mode-edit prefix"></i>
				          	<textarea id="message" class="materialize-textarea" name="msg"></textarea>
				          	<label for="message">Message</label>
				        </div>
				      </div>
				    </div>
				    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
					    <i class="mdi-content-send right"></i>
					 </button>
			  	</div>
			</form>
                        <?php
                            if(isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['msg']))
                            {
                                
                                sendMail($_POST['nom'], $_POST['mail'], $_POST['msg']);
                                
                            }
                        ?>
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
    <?php
        function sendMail($name,$maill,$message)
        {
            $mail = new PHPMailer;
            $msg = wordwrap($message,70);
            //$mail->SMTPDebug = 2; 
            $mail->Debugoutput = 'html';
// Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'unicornsesprit@gmail.com';                 // SMTP username
            $mail->Password = 'unicorns_esprit';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->From = $maill;
            $mail->FromName = $name;    
            $mail->addAddress('unicornsesprit@gmail.com');               // Name is optional
                                 // Set email format to HTML

            $mail->Subject = 'Contact form';
            $mail->Body    = $message;
            if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }
            

        }
    ?> 
</body>
</html>
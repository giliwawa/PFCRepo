<?php include 'header.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/td/html4/strict.">
<title>Title!</title>
<script type="text/javascript" src="js/loadproduit.js"></script>
</head>

<body>
	
	<?php include 'navbar.php' ?>
    


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
        <!-- Modal Structure -->

<section id="index_produit">
  <div class="row">
    <div class="col s2 sidebar-container">
        <ul class="collection ">
            <li class="collection-item avatar ">
                <a onclick="loadproduct_cat('string')">
                <img src="images/guitarthion.jpg" alt="" class="circle">
                <span class="title">String Instruments</span>
                <p>guitars <br>
                   violins
                </p>
                </a>
            </li>
            
            <li class="collection-item avatar ">
               <a onclick="loadproduct_cat('percussion')">
                <img src="images/percuthion.jpg" alt="" class="circle">
                <span class="title">Percussions</span>
                <p>Drums <br>
                   Bongos
                </p>
               </a>
            </li>
            
            <li class="collection-item avatar ">
                <a onclick="loadproduct_cat('wind')">
                <img src="images/naf5ethion.jpg" alt="" class="circle">
                <span class="title">Wind Instruments</span>
                <p>Trumpets <br>
                   Saxophones
                </p>
                </a>
            </li>
            
            <li class="collection-item avatar ">
                <a onclick="loadproduct_cat('electronic')">
                <img src="images/moogothion.png" alt="" class="circle">
                <span class="title">Electronic Instruments</span>
                <p>Moogs <br>
                   Theramines
                </p>
                </a>
            </li>
            
            <li class="collection-item avatar ">
                <a onclick="loadproduct_cat('accessory')">
                <img src="images/accesoirs.png" alt="" class="circle">
                <span class="title">Acceesories</span>
                <p>Amplifiers <br>
                   Pedals
                </p>
                </a>
            </li>
        </ul>        
    </div>
    <div class="col s9 content-container">
      <div id="show">

      </div>
    </div>
  </div>
</section>
        
   <?php
    include 'footer.php';
    ?>     
</body>

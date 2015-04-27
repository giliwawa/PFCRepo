<?php session_start(); 
  if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    ?>
    <div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper blue-grey darken-3">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a class="active" href="index.php#home" data="home">Home</a></li>
                <li><a class="" href="index.php#produits" data ="produits">Produits</a></li>
                <li><a class="" href="index.php#services" data="services">Service</a></li>
                <li><a class="" href="index.php#about" data="about">About</a></li>
                <li><a class="" href="index.php#contact" data="contact">Contact</a></li>
            </ul>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li>
                    <!-- Dropdown Trigger -->
                    <a class='dropdown-button' href='#' data-activates='dropdown1' data='user'><?php echo $username ?></a>
                    <ul id='dropdown1' class='dropdown-content navigation'>
                        <li><a href="">Profile</a></li>
                        <li><a href="../controller/LogoutController.php">LogOut</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
<?php
  }
  else{
?>
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper blue-grey darken-3">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
          		<li><a class="active" href="index.php#home" data="home">Home</a></li>
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
<!-- Modal Structure -->
  	<div id="modal1" class="modal modal-fixed-footer">
  		<div class="modal-content">
  			<h4>Sign In</h4>
  			<br>
  			<form action="controller/loginController.php" method="POST">
  				<div class="row">
            <div class="col s12" id="error">
                <i class="mdi-action-info prefix"></i>
            </div>
            <div class="input-field col s12">
                    <i class="mdi-action-account-circle prefix"></i>
                    <input id="icon_prefix" type="text" name="username" class="validate">
                    <label for="icon_prefix">Pseudo</label>
            </div>
            <div class="input-field col s12">
                <i class="mdi-action-lock prefix"></i>
                <input id="icon_password" type="password" name="password" class="validate">
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
  <!--                                            input id="login" type="submit"  class="btn cyan darken-2" value="Sign In">-->
                <a href="#" class="btn" onclick="testCreds();">SIGN IN</a>
              </div>
    					<div class="col s6">
                <a href="user_signup.php" class=" btn pink darken-3">SIGN UP</a>
    					</div>
  					</center>
  				</div>
  			</form>
  		</div>
  	</div>
  	<!--END Modal Structure-->
<?php
  }
?>

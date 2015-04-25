<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/td/html4/strict.">

<?php include 'header.php'; ?>
	<title>User</title>
</head>
<body>  
        <?php include 'navbar.php'; ?>
  	<section id="user_signup">
  	<div class="container">
            <br>
            <h4>Sign Up</h4>
            <br>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-perm-identity prefix"></i>
                            <input id="icon_prefix" type="text" class="validate" name="username">
                            <label for="icon_prefix">Username</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-vpn-key prefix"></i>
                            <input id="icon_prefix" type="text" class="validate" name="password">
                            <label for="icon_prefix">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix"></i>
                            <input id="icon_prefix" type="text" class="validate" name="prenom">
                            <label for="icon_prefix">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix"></i>
                            <input id="icon_prefix" type="text" class="validate" name="nom">
                            <label for="icon_prefix">Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-social-cake prefix"></i>
                            <input id="icon_prefix" type="date" class="datepicker" name="date_naissance">
                            <label for="icon_prefix">Birth Day</label>
                        </div>
                        <div class="input-field col s6 Gender">
                            <i class="mdi-action-accessibility prefix"></i>
                            <input name="sexe" type="radio" id="male" value="male"/>
                            <label for="male">Male</label>
                            <input name="sexe" type="radio" id="female" value="female"/>
                            <label for="female">Female</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <a href="#" class="pink darken-3 btn">SIGN UP</a>
                        </div>
                    </div>
                    
                    
                    
                </form>
            </div>
        </div>
  	</section>

<?php include 'footer.php' ;?>
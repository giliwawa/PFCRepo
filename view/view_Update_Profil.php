<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/td/html4/strict.">

<?php 
	include 'header.php';
?>
	<title>Profil</title>
</head>
<body>
<?php 
	include 'navbar.php';
?>

<?php
	require_once '../model/UserModel.php';
	$userModel = new UserModel();
	$user = new user();
	if (isset($_SESSION['id_user'])) {
	$user=$userModel->getUserId($_SESSION['id_user']);
	$listeU=$userModel->recherche_user_id($_SESSION['id_user']);
	}

foreach ($listeU as $user) :
?>


<section id="update">
	<div class="container">
						<div class="row">
                        <div class="input-field col s6">
                            <input id="username" type="text" class="validate" value="<?php echo $user->getUsername() ;?>" name="username">
                            <label for="icon_prefix">Username</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="password" type="text" class="password" value="" name="password">
                            <label for="icon_prefix">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="prenom" type="text" class="validate" value="<?php echo $user->getPrenom() ;?>" name="prenom">
                            <label for="icon_prefix">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="nom" type="text" class="validate" value="<?php echo $user->getNom() ;?>" name="nom">
                            <label for="icon_prefix">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="date-naissance" type="date" class="datepicker" value="<?php echo $user->getDate_naissance() ;?>" name="date_naissance">
                            <label for="icon_prefix">Birth day</label>
                        </div>
                        <div class="input-field col s6 Gender" >
                            <input name="sexe" type="radio" id="sexe" value="<?php echo $user->getSexe() ;?>"/>
                            <label for="male">Male</label>
                            <input name="sexe" type="radio" id="sexe" value="<?php echo $user->getSexe() ;?>"/>
                            <label for="female">Female</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="adresse" type="text" class="validate" value="<?php echo $user->getAdresse() ;?>" name="adresse">
                            <label for="icon_prefix">Adress</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="CIN" type="text" class="validate" value="<?php echo $user->getCIN() ;?>" name="CIN">
                            <label for="icon_prefix">CIN</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="num_tel" type="text" class="validate" value="<?php echo $user->getNum_tel() ;?>" name="num_tel">
                            <label for="icon_prefix">Cell Number</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="email" type="text" class="validate" value="<?php echo $user->getEmail() ;?>" name="email">
                            <label for="icon_prefix">E-mail</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                             <button class="btn waves-effect waves-light blue-grey darken-3" type="button" onclick="loadupdateUser_User(<?php echo $user->getid_user() ;?>);" id="update">Confirm
						    <i class="mdi-editor-mode-edit left"></i>
						</button>
                        </div>
                    </div>

		<?php
		    endforeach;

		?>
    </div>
</section>

<?php
    include 'footer.php';
?>
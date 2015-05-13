<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/td/html4/strict.">

<?php 
	include 'header.php';
?>
	<title>Profil</title>
	<script type="text/javascript" src="js/loadOrders.js"></script>
</head>
<body>
	<?php 
	include 'navbar.php';
	require_once '../model/UserModel.php';
	require_once '../model/produitModel.php';
	$produitModel = new produitModel();
	$userModel = new UserModel();
	$produit = new produit();
	$user = new user();
	if (isset($_SESSION['id_user'])) {
	$user=$userModel->getUserId($_SESSION['id_user']);
	$listeP = $produitModel->getFavorisById($_SESSION['id_user']);
	?>
	<section id="profil">
		<div class="container">
			<div class="row">
				<div class="col s4 img">
					<img src="<?php echo $user->getimage();?>">
				</div>
				<div class="col s7 titre">
					<center><h4><?php echo ucfirst($_SESSION['username'])?></h4></center>
					<br>
					<p>Nom : <?php echo $user->getnom();?></p>
					<p>Prenom : <?php echo $user->getprenom();?></p>
					<p>Date de Naissance : <?php echo $user->getdate_naissance();?></p>
					<p><b><?php echo $user->getnbr_point();?> SIpoints</b></p>
					<a class="waves-effect waves-light btn blue-grey darken-3">
						<i class="mdi-editor-mode-edit left"></i>Update
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col s3 produit">
					<center><h4>Favorite</h4></center>
<?php
					foreach ($listeP as $pr) :
?>
					<br>
					<br>
					<img class="resize_img" src="<?php echo $pr->getimage(); ?>">
					<br>
					<a><?php echo $pr->getreference(); ?></a>
<?php
					endforeach;
?>
				</div>
				<div class="col s8 suggestion">
					<h4>Orders</h4>
					<br>
					<div id="show_order">
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
    include 'footer.php';
}
?>
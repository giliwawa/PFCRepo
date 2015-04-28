<?php
session_start();
if (isset($_SESSION['id_user'])) {
	require_once('../model/favorisModel.php');
	require_once('../model/produitModel.php');
	$favoris = new favoris();
	$favorisModel= new favorisModel();
	$produitModel= new produitModel();
	$pr= new produit();

	$id_produit=htmlspecialchars($_GET['id_produit']);
	$pr= $produitModel->searchId($id_produit);
	$favoris->setid_user($_SESSION['id_user']);
	$favoris->setid_produit($id_produit);
	$favorisModel->addFavoris($favoris);
	?>
<a onclick='deleteFav(<?php echo $pr->getid_produit(); ?>)'><i class="mdi-action-star-rate fav"></i></a>
<?php
}
?>

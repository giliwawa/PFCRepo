<?php

require_once('../model/favorisModel.php');
require_once('../model/produitModel.php');
$favoris = new favoris();
$favorisModel= new favorisModel();
$produitModel= new produitModel();
$pr= new produit();
session_start();

$id_produit=htmlspecialchars($_GET['id_produit']);
$pr= $produitModel->searchId($id_produit);
$favoris->setid_user($_SESSION['id_user']);
$favoris->setid_produit($id_produit);
$favorisModel->deleteFavoris($favoris);
?>	
<a onclick='addFav(<?php echo $pr->getid_produit(); ?>)'><i class="mdi-action-star-rate"></i></a>

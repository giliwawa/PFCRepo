<?php
require_once'../model/produit.php';
require_once'../model/produitModel.php';
$productmodel = new ProduitModel();
$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "../view/images/Resources/Produit/".$_FILES['file']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath) ;
$product = new produit();
if (isset($_POST['name'])) {
	$product->setnom($_POST['name']);
}
if (isset($_POST['reference'])) {
	$product->setreference($_POST['reference']);
}
if (isset($_POST['categorie'])) {
	$product->setcategorie($_POST['categorie']);
}
if (isset($_POST['quantite'])) {
	$product->setquantite($_POST['quantite']);
}
if (isset($_POST['prix'])) {
	$product->setprix($_POST['prix']);
}

	$product->setimage($targetPath);

if (isset($_POST['description'])) {
	$product->setdescription($_POST['description']);
}
$productmodel->ajouterproduit($product);

	$url = "../admin/admin.php";
	header('location:'.$url);


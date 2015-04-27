<?php 
require_once'../model/produit.php';
require_once'../model/produitModel.php';
$product= new produit();
$sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a variable
$targetPath = "http://localhost/Project/PFCRepo/view/images/Resources/Produit/".$_FILES['file']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath) ;    // Moving Uploaded file
$name = $_POST["name"];
$reference = $_POST["reference"];
$categorie = $_POST["categorie"];
$quantite = $_POST["quantite"];
$prix = $_POST["prix"];
$description = $_POST["description"];

$product->setnom($name);
$product->setreference($reference);
$product->setcategorie($categorie);
$product->setquantite($quantite);
$product->setprix($prix);
$product->setimage($targetPath)
$product->setdescription($description);

$productModel = new productModel();
$productModel->ajouterproduit($product);

?>
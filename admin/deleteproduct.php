<?php

require_once("../model/produitModel.php");
$id_produit = htmlspecialchars($_GET["id_produit"]);
$productmodel = new produitModel();
$c=$productmodel->deleteproduct($id_produit);

?>
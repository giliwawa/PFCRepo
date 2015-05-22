<?php 
require_once '../model/produit.php';
require_once '../model/favorisModel.php';
require_once '../model/produitModel.php';
$produitModel = new ProduitModel();
$FavorisModel = new favorisModel();
$listef = $FavorisModel->favoris_slider();
$slider = array();
$i = 1;
foreach ($listef as $key) {
 foreach ($key as $value) {
  $pr= new produit();
  $id_produit = $value;
  $pr= $produitModel->searchId($id_produit);
 array_push($slider, $pr);

 }
}
?>
<div id="slideshow" class="container">
<?php
	for ($i=0; $i <4 ; $i++) { 
?>
    <div>
    	<div class="title">
    		<span class="name"><h4><b><?php echo ucfirst($slider[$i]->getnom()); ?></b></h4></span>
    		<span class="price"><h4><b>Price : </b><?php echo $slider[$i]->getprix(); ?> TND</h4></span>
    	</div>
    	<img class="image_slide" src="<?php echo $slider[$i]->getimage(); ?>">
    </div>
      

<?php
	$i++;
	}
?>
</div>
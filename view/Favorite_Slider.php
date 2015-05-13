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
}?>
<div id="slideshow" class="container">
<?php while ($i<4) { ?>
    <div>
    <img class="image_slide" src="<?php echo $slider[$i]->getimage(); ?>">
    </div>
      

<?php
$i++;
}
?>
</div> -->
<?php 
require_once '../model/produitModel.php';
$productModel = new ProduitModel();
$listecat = $productModel->loadcategories();
$n = count($listecat);
?>
<form>
	<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="name" type="text" class="validate">
          <label for="first_name">Name</label>
        </div>
        <div class="input-field col s6">
          <input id="refrence" type="text" class="validate">
          <label for="reference">Reference</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
		    <select class="browser-default">
		      <option value="" disabled selected>Catégorie</option>
		      <?php 
		      foreach ($listecat as $cat ):
		      	foreach ($cat as $key => $value) { ?>
		      	<option value="1"><?php echo $value ?></option>
				<?php
					}
				endforeach;
				 ?>
		    </select>
  		</div>
      <div class="input-field col s3">
          <input id="quantite" type="text" class="validate">
          <label for="quantite">Quantité</label>
        </div>
        <div class="input-field col s3">
          <input id="prix" type="text" class="validate">
          <label for="prix">Prix</label>
        </div>
      </div>
      <div class="row">
        <div class="file-field input-field">
          <input class="file-path validate" type="text"/>
          <div class="btn">
            <span>File</span>
            <input type="file" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="description" class="materialize-textarea"></textarea>
          <label for="description">Description</label>
        </div>
      </div>
      
    </form>
  </div>
</form>
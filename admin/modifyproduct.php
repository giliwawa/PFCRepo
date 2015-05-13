<?php

require_once("../model/produitModel.php");
$id_produit = htmlspecialchars($_GET["id_produit"]);
$produit = new produit();
$productmodel = new produitModel();
$listecat = $productmodel->loadcategories();
$produit=$productmodel->searchId($id_produit);
?>
<script type="text/javascript" src="../view/js/addproduct.js"></script>
<div class="row">
    <form class="col s12" method="POST" enctype="multipart/form-data" id="updateproduct" action="../controller/addproduct.php">
      <div class="row">
        <div class="input-field col s6">
          <input id="name" type="text" class="validate" name="name" value="<?php echo $produit->getnom() ?>" autofocus>
          <label for="first_name"></label>
        </div>
        <div class="input-field col s6">
          <input id="reference" type="text" class="validate" name="reference" value="<?php echo $produit->getreference() ?>" >
          <label for="reference"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
		    <select class="browser-default" name="categorie">
		      <option value="" disabled selected>Categorie</option>
		      <?php 
		      foreach ($listecat as $cat ):
		      	foreach ($cat as $key => $value) { ?>
		      	<option value="<?php echo $value ?>"><?php echo $value ?></option>
				<?php
					}
				endforeach;
				 ?>
		    </select>
  		</div>
      <div class="input-field col s3">
          <input id="quantite" type="text" class="validate" name="quantite" value="<?php echo $produit->getquantite() ?>">
          <label for="quantite"></label>
        </div>
        <div class="input-field col s3">
          <input id="prix" type="text" class="validate" name="prix" value="<?php echo $produit->getprix() ?>">
          <label for="prix"></label>
        </div>
      </div>
      <div class="row">
        <div class="file-field input-field">
          <input class="file-path validate" type="text"/>
          <div class="btn">
            <span>File</span>
            <input type="file"  name="file" id="file-select"/>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="description" class="materialize-textarea" name="description" ><?php echo $produit->getdescription() ?></textarea>
          <label for="description"></label>
        </div>
      </div>
      <input type="submit" title="Add Product to the Database" value="Update Product" class="waves-effect waves-light btn submit" onclick="formsubmit()"/>
      
    </form>
  </div>
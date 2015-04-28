<?php 
require_once '../model/produitModel.php';
$productModel = new ProduitModel();
$listecat = $productModel->loadcategories();
$n = count($listecat);
?>

</head>

	<div class="row">
    <form class="col s12" method="POST" enctype="multipart/form-data" id="addproduct" action="../controller/addproduct.php">
      <div class="row">
        <div class="input-field col s6">
          <input id="name" type="text" class="validate" name="name">
          <label for="first_name">Name</label>
        </div>
        <div class="input-field col s6">
          <input id="reference" type="text" class="validate" name="reference">
          <label for="reference">Reference</label>
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
          <input id="quantite" type="text" class="validate" name="quantite">
          <label for="quantite">Quantité</label>
        </div>
        <div class="input-field col s3">
          <input id="prix" type="text" class="validate" name="prix">
          <label for="prix">Prix</label>
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
          <textarea id="description" class="materialize-textarea" name="description"></textarea>
          <label for="description">Description</label>
        </div>
      </div>
      <input type="submit" title="Add Product to the Database" value="Add Product" class="waves-effect waves-light btn submit" onclick="formsubmit()"/>
      
    </form>
  </div>
  <script type="text/javascript" src="../view/js/addproduct.js"></script>

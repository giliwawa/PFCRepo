<?php 
require_once '../model/produitModel.php';
$productModel = new ProduitModel();
$listecat = $productModel->loadcategories();
$n = count($listecat);
?>
<div class="form">
	<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="name" type="text" class="validate">
          <label for="first_name">Name</label>
        </div>
        <div class="input-field col s6">
          <input id="refrence" type="text" class="validate">
          <label for="last_name">reference</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
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
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
    </form>
  </div>
</div>
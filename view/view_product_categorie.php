<?php
require_once '../model/produitModel.php';
$categorie = htmlspecialchars($_GET["categorie"]);
$ProduitModel = new ProduitModel();
$listeT = $ProduitModel->afficher_categorie($categorie);
$n = $ProduitModel->Count($categorie);
      $x = 0;
      foreach ($listeT as $pr):
      $x++; 
      ?>
  		<?php
        if($x == 1):
        ?>

        	<div class="row">
        	 <div class ="col s3">
              <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="<?php echo $pr->getimage(); ?>">
                  </div>

                  <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4"><?php echo $pr->getnom(); ?> - <?php echo $pr->getprix(); ?>$<i class="mdi-navigation-more-vert right"></i></span>
                      <p>
                        <a onclick='addToCart(<?php echo $pr->getid_produit(); ?>)'>Add to Cart !</a>
                        <span id="<?php echo $pr->getid_produit(); ?>"><a onclick='addFav(<?php echo $pr->getid_produit(); ?>)'><i class="mdi-action-star-rate"></i></a></span>
                      </p>
                      <div class="hide">
                          <select>
                            <option value="">Choose your option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                          </select>
                          <label>Materialize Select</label>
                        </div>

                  </div>

                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><?php echo $pr->getnom(); ?><i class="mdi-navigation-close right"></i></span>
                    <ul>
                      <li><span class="bold">Prix:</span> <?php echo $pr->getprix(); ?>$</li>
                      <li><span class="bold">Reference:</span> <?php echo $pr->getreference(); ?></li>
                      <li><span class="bold">Categorie:</span> <?php echo $pr->getcategorie(); ?></li>
                      <li><span class="bold">Quantité:</span> <?php echo $pr->getquantite(); ?></li>
                      <li><span class="bold">Description:</span> <?php echo $pr->getdescription(); ?></li>
                    </ul>
                  </div>
              </div>
          </div>
        
        <?php 
        endif
        ?>

        <?php
        if($x == 2):
        ?>
        	 <div class ="col s3">
              <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="<?php echo $pr->getimage(); ?>">
                  </div>

                  <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4"><?php echo $pr->getnom(); ?> - <?php echo $pr->getprix(); ?>$<i class="mdi-navigation-more-vert right"></i></span>
                      <p>
                        <a onclick='addToCart(<?php echo $pr->getid_produit(); ?>)'>Add to Cart !</a>
                        <span id="<?php echo $pr->getid_produit(); ?>"><a onclick='addFav(<?php echo $pr->getid_produit(); ?>)'><i class="mdi-action-star-rate"></i></a></span>
                      </p>
                  </div>

                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><?php echo $pr->getnom(); ?><i class="mdi-navigation-close right"></i></span>
                    <ul>
                      <li><span class="bold">Prix:</span> <?php echo $pr->getprix(); ?>$</li>
                      <li><span class="bold">Reference:</span> <?php echo $pr->getreference(); ?></li>
                      <li><span class="bold">Categorie:</span> <?php echo $pr->getcategorie(); ?></li>
                      <li><span class="bold">Quantité:</span> <?php echo $pr->getquantite(); ?></li>
                      <li><span class="bold">Description:</span> <?php echo $pr->getdescription(); ?></li>
                    </ul>
                  </div>
              </div>
          </div>
        
        <?php 
        endif
        ?>
        <?php
        if($x == 3):
        ?>
        	 <div class ="col s3">
              <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="<?php echo $pr->getimage(); ?>">
                  </div>

                  <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4"><?php echo $pr->getnom(); ?> - <?php echo $pr->getprix(); ?>$<i class="mdi-navigation-more-vert right"></i></span>
                      <p>
                        <a href="#">Add to Cart !</a>
                        <span id="<?php echo $pr->getid_produit(); ?>"><a onclick='addFav(<?php echo $pr->getid_produit(); ?>)'><i class="mdi-action-star-rate"></i></a></span>
                      </p>
                  </div>

                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><?php echo $pr->getnom(); ?><i class="mdi-navigation-close right"></i></span>
                    <ul>
                      <li><span class="bold">Prix:</span> <?php echo $pr->getprix(); ?>$</li>
                      <li><span class="bold">Reference:</span> <?php echo $pr->getreference(); ?></li>
                      <li><span class="bold">Categorie:</span> <?php echo $pr->getcategorie(); ?></li>
                      <li><span class="bold">Quantité:</span> <?php echo $pr->getquantite(); ?></li>
                      <li><span class="bold">Description:</span> <?php echo $pr->getdescription(); ?></li>
                    </ul>
                  </div>
              </div>
          </div>
        
        <?php 
        endif
        ?>

        <?php
        if($x == 4):
        ?>
        	<div class="col s3">
              <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="<?php echo $pr->getimage(); ?>">
                  </div>

                  <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4"><?php echo $pr->getnom(); ?> - <?php echo $pr->getprix(); ?>$<i class="mdi-navigation-more-vert right"></i></span>
                      <p>
                        <a href="#">Add to Cart !</a>
                        <span id="<?php echo $pr->getid_produit(); ?>"><a onclick='addFav(<?php echo $pr->getid_produit(); ?>)'><i class="mdi-action-star-rate"></i></a></span>
                      </p>
                  </div>

                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><?php echo $pr->getnom(); ?><i class="mdi-navigation-close right"></i></span>
                    <ul>
                      <li><span class="bold">Prix:</span> <?php echo $pr->getprix(); ?>$</li>
                      <li><span class="bold">Reference:</span> <?php echo $pr->getreference(); ?></li>
                      <li><span class="bold">Categorie:</span> <?php echo $pr->getcategorie(); ?></li>
                      <li><span class="bold">Quantité:</span> <?php echo $pr->getquantite(); ?></li>
                      <li><span class="bold">Description:</span> <?php echo $pr->getdescription(); ?></li>
                    </ul>
                  </div>
              </div>
          </div>
        	</div>
        
        <?php 
        $x = 0;
        endif
     	 ?>
    

    <?php 
      endforeach;
    ?>
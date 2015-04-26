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
                      <p><a href="#">Buy It Now !</a></p>
                  </div>

                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><?php echo $pr->getnom(); ?><i class="mdi-navigation-close right"></i></span>
                    <ul>
                      <li>Prix:<?php echo $pr->getprix(); ?></li>
                      <li>Reference:<?php echo $pr->getreference(); ?></li>
                      <li>Categorie:<?php echo $pr->getcategorie(); ?></li>
                      <li>Quantité:<?php echo $pr->getquantite(); ?></li>
                      <li>Description:<?php echo $pr->getdescription(); ?></li>
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
                      <p><a href="#">Buy It Now !</a></p>
                  </div>

                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><?php echo $pr->getnom(); ?><i class="mdi-navigation-close right"></i></span>
                    <ul>
                      <li>Prix:<?php echo $pr->getprix(); ?>$</li>
                      <li>Reference:<?php echo $pr->getreference(); ?></li>
                      <li>Categorie:<?php echo $pr->getcategorie(); ?></li>
                      <li>Quantité:<?php echo $pr->getquantite(); ?></li>
                      <li>Description:<?php echo $pr->getdescription(); ?></li>
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
                      <p><a href="#">Buy It Now !</a></p>
                  </div>

                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><?php echo $pr->getnom(); ?><i class="mdi-navigation-close right"></i></span>
                    <ul>
                      <li>Prix:<?php echo $pr->getprix(); ?>$</li>
                      <li>Reference:<?php echo $pr->getreference(); ?></li>
                      <li>Categorie:<?php echo $pr->getcategorie(); ?></li>
                      <li>Quantité:<?php echo $pr->getquantite(); ?></li>
                      <li>Description:<?php echo $pr->getdescription(); ?></li>
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
                      <p><a href="#">Buy It Now !</a></p>
                  </div>

                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><?php echo $pr->getnom(); ?><i class="mdi-navigation-close right"></i></span>
                    <ul>
                      <li>Prix:<?php echo $pr->getprix(); ?>$</li>
                      <li>Reference:<?php echo $pr->getreference(); ?></li>
                      <li>Categorie:<?php echo $pr->getcategorie(); ?></li>
                      <li>Quantité:<?php echo $pr->getquantite(); ?></li>
                      <li>Description:<?php echo $pr->getdescription(); ?></li>
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
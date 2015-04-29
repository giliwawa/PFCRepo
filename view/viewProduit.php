<?php include 'header.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/td/html4/strict.">
<title>Title!</title>
<script type="text/javascript" src="js/loadproduit.js"></script>
<script type="text/javascript" src="js/addFav.js"></script>
<script type="text/javascript" src="js/panier.js"></script>
</head>

<body>
	
	<?php include 'navbar.php' ?>

<section id="index_produit">
  <div class="row">
    <div class="col s2 sidebar-container">
        <ul class="collection ">
            <li class="collection-item avatar ">
                <a onclick="loadproduct_cat('string')">
                <img src="images/guitarthion.jpg" alt="" class="circle">
                <span class="title">String Instruments</span>
                <p>guitars <br>
                   violins
                </p>
                </a>
            </li>
            
            <li class="collection-item avatar ">
               <a onclick="loadproduct_cat('percussion')">
                <img src="images/percuthion.jpg" alt="" class="circle">
                <span class="title">Percussions</span>
                <p>Drums <br>
                   Bongos
                </p>
               </a>
            </li>
            
            <li class="collection-item avatar ">
                <a onclick="loadproduct_cat('wind')">
                <img src="images/naf5ethion.jpg" alt="" class="circle">
                <span class="title">Wind Instruments</span>
                <p>Trumpets <br>
                   Saxophones
                </p>
                </a>
            </li>
            
            <li class="collection-item avatar ">
                <a onclick="loadproduct_cat('electronic')">
                <img src="images/moogothion.png" alt="" class="circle">
                <span class="title">Electronic Instruments</span>
                <p>Moogs <br>
                   Theramines
                </p>
                </a>
            </li>
            
            <li class="collection-item avatar ">
                <a onclick="loadproduct_cat('accessory')">
                <img src="images/accesoirs.png" alt="" class="circle">
                <span class="title">Acceesories</span>
                <p>Amplifiers <br>
                   Pedals
                </p>
                </a>
            </li>
        </ul>        
    </div>
    <div class="col s9 content-container">
      <div id="show">

      </div>
    </div>
  </div>
</section>
        
   <?php
    include 'footer.php';
    ?>     
</body>

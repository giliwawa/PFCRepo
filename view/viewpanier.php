<?php
include_once 'header.php';
require_once '../Configuration.php';
require_once '../model/produitModel.php';

$model = new ProduitModel();
?>
<script type="text/javascript" src="js/cart.js"></script>
</head>
<body>
<?php
include_once 'navbar.php';


if(isset($_SESSION['id_produit'])){
?>
    <div class="container white" >
        <center><h1>My cart</h1></center>
        <table>
            <thead>
                <tr>
                    <td>Designation</td>
                    <td>Quantity</td>
                    <td>Price/unit(DT)</td>
                </tr>
            </thead>
            <tbody>
<?php
    if(!empty($_SESSION['id_produit'])){
        $panier = array();
        $panier = $_SESSION['id_produit'];
        foreach ($panier as $elt){
            foreach ($elt as $key => $value){
                $Pr = new produit();
                $Pr = $model->searchId($value);
                ?>
                <tr>
                    <td><?php echo $Pr->getNom() ?></td>
                    <td><input class="qte" value="1" type="text"></td>
                    <td><?php echo $Pr->getPrix()?></td>
                </tr>
                <?php
            }
        }
?>
    
                
            </tbody>
        </table>
        <div class="row">
            <div class="col s6">
                <a href="#" class="btn" id
            </div>
            <div class="col s5 ">
                <h3>Total:<span id="total"></span></h3>
                
            </div>
        </div>
    </div>
<?php
    }
}
?>
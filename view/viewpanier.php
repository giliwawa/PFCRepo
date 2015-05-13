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
$login = '98632147';
$trans_id = '1';
$passwrd = 'alborosie123';
$passKey = 'a2a44b899bbe91850bcb33fce1b598fb';
$Merchant_hashed_pass = md5($passwrd.$passKey);
$transaction_desc = 'For more Details, see your cart.';
$Merchant_checksum = md5($login.$Merchant_hashed_pass.'1000'.$trans_id.$passKey); 

if(isset($_SESSION['id_produit'])){
?>
    <div class="container white" >
        <center><h1>My cart</h1></center>
        <form action="http://196.203.219.49:8181/PHPMerchantAPIGateway/creova.php?" method="POST">
            <INPUT type=hidden name=merchant_login value="<?php echo $login ?>">
            <INPUT type=hidden name=merchant_hashed_pass value="<?php echo $Merchant_hashed_pass ?>">
            <INPUT type=hidden name=amount value="1">
            <INPUT type=hidden name=transaction_id value="<?php echo $trans_id ?>">
            <INPUT type=hidden name=transaction_desc value="<?php echo URLEncode($transaction_desc) ?>">
            <INPUT type=hidden name=merchant_checksum value="<?php echo $Merchant_checksum ?>">
            <INPUT type=hidden name=command value=validate_merchant_source>
        <table>
            <thead>
                <tr>
                    <td>Designation</td>
                    <td>Quantity</td>
                    <td>Price/unit(DT)</td>
                    <td>Remove</td>
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
                    <td><input class="qte" data="shown" value="1" type="text"></td>
                    <td><?php echo $Pr->getPrix()?></td>
                    <td><a id="rmv" onclick="removeProduit(<?php echo $Pr->getId_produit();?>)"><i class="Small mdi-action-delete"></i></a></td>
                    
                </tr>
                <?php
            }
        }
?>
    
                
            </tbody>
        </table>
        <div class="row">
            <div class="col s6">
                <input type="submit" class="btn" id="submit" >Confirm</a>
            </div>
            <div class="col s5 ">
                <h3>Total:<span id="total"></span></h3>
                
            </div>
        </div>
        </form>
    </div>
<?php
    }
}
?>
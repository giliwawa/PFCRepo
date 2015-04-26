<?php
require_once '../model/produitModel.php';
//include_once '../view/header.php';
$productModel=new ProduitModel();
$listeT = $productModel->afficher();

?>
<table>
	<thead>
		<tr>
			<th>iD</th>
			<th>Name</th>
			<th>Reference</th>
			<th>Categorie</th>
			<th>Qunatité</th>
			<th>Prix</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
<?php
    foreach ($listeT as $Tick) :
?>
    <tr>
        <td><?php echo $Tick->getid_produit() ;?></td>
        <td><?php echo $Tick->getnom() ;?></td>
        <td><?php echo $Tick->getreference() ;?></td>
        <td><?php echo $Tick->getcategorie() ;?></td>
        <td><?php echo $Tick->getquantite() ;?></td>
        <td><?php echo $Tick->getprix() ;?></td>
        <td><?php echo $Tick->getdescription() ;?></td>
    </tr>

<?php
    endforeach;

?>
    
</tbody>
</table>

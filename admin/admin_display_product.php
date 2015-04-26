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
    foreach ($listeT as $pr) :
?>
    <tr>
        <td><?php echo $pr->getid_produit() ;?></td>
        <td><?php echo $pr->getnom() ;?></td>
        <td><?php echo $pr->getreference() ;?></td>
        <td><?php echo $pr->getcategorie() ;?></td>
        <td><?php echo $pr->getquantite() ;?></td>
        <td><?php echo $pr->getprix() ;?></td>
        <td><?php echo $pr->getdescription() ;?></td>
    </tr>

<?php
    endforeach;

?>
    
</tbody>
</table>

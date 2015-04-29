<?php
require '../model/HotFixCommandeModel.php';
$commandeModel = new HotFixCommandeModel();
session_start();
$listeC = $commandeModel->getAllDaStuff($_SESSION['id_user']);
$lastid='';
?>
<table>
	<thead>
		<tr>
			<th>Date</th>
			<th>Designation</th>
			<th>Quantity</th>
		</tr>
	</thead>
<?php
	foreach ($listeC as $Inception) :
		if ($lastid!=$Inception['id_commande']) {
?>
				<h5>Commande : <?php echo $Inception['id_commande']; ?></h5>
				<tr>
<?php
			$lastid=$Inception['id_commande'];
		}
		foreach ($Inception as $data => $val) :
			if ($data != 'id_commande') :			
?>
				<td><?php echo $val ;?></td>
<?php
			endif;
		endforeach;
?>
				</tr>		
<?php
	endforeach;
?>
</table>
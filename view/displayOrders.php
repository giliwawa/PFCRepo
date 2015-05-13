<?php
require '../model/HotFixCommandeModel.php';
$commandeModel = new HotFixCommandeModel();
session_start();
$listeC = $commandeModel->getAllDaStuff($_SESSION['id_user']);
$lastid='';
$i=0;
?>

<?php
	foreach ($listeC as $key=>$Inception) :
		if ($lastid!=$Inception['id_commande']) {
			if ($i!=0) {
				echo "</table>";
			}
			$i++;
?>
				<h5>Commande : <?php echo $Inception['id_commande']; ?></h5>
				<table>
					<thead>
						<tr>
							<th>Date</th>
							<th>Designation</th>
							<th>Quantity</th>
						</tr>
					</thead>
<?php
			$lastid=$Inception['id_commande'];
		}
		
		foreach ($Inception as $data => $val) :
			if ($data != 'id_commande') {	
				if ($data=='Date') {
					echo "<tr>";
				}		
?>
				<td><?php echo $val ;?></td>

<?php
				if($data == 'quantite'){
					echo '</tr>';
				}
			}
			
		endforeach;
		
	endforeach;
?>

<?php
require_once '../model/ticketModel.php';
$ticketModel=new ticketModel();
$listeT = $ticketModel->displayTicket(1);
include_once '../view/header.php';
?>
<table>
	<thead>
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Email</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php
	foreach ($listeT as $Tick) :
?>
		<tr>
			<td><?php echo $Tick->getid_ticket() ;?></td>
			<td><?php echo $Tick->getname() ;?></td>
			<td><?php echo $Tick->getemail() ;?></td>
			<td><?php echo'<a class="waves-effect waves-teal btn" onclick="loadTicketConsulter('. $Tick->getid_ticket().' )">View</a></td>';?>
		</tr>
<?php
	endforeach;
?>
	</tbody>
</table>
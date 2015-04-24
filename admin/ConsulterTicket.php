<?php

require_once("../model/ticketModel.php");
$id_ticket = htmlspecialchars($_GET["IdTicket"]);
$ticket = new ticket();
$ticketModel = new ticketModel();
$ticket=$ticketModel->afficherTicket($id_ticket);
?>
<html>
<head>
	<title>Consulter Ticket</title>
</head>
<body>
	<table>
		<tr>
			<td>ID</td>
			<td><?php echo $ticket->getid_ticket(); ?></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?php echo $ticket->getname();?></td>
		</tr>
		<tr>
			<td>EMail</td>
			<td><?php echo $ticket->getemail();?></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><?php echo $ticket->gettext();?></td>
		</tr>
	</table>

</body>
</html>
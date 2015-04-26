<?php
require_once '../model/ticketModel.php';
//include_once '../view/header.php';
$ticketModel=new ticketModel();
$listeT = $ticketModel->displayTicket(1);
echo count($listeT);
if(isset($_POST['action']))
{
    
   
}

else
{
$i=0;
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
            $i++;
?>
    <tr>
        <td><?php echo $Tick->getid_ticket() ;?></td>
        <td><?php echo $Tick->getname() ;?></td>
        <td><?php echo $Tick->getemail() ;?></td>
        <td><?php echo'<a class="waves-effect waves-teal btn" onclick="loadTicketConsulter('. $Tick->getid_ticket().' )">View</a></td>';?>
    </tr>

<?php
    endforeach;
}
?>
    <tr id="nb_ligne"><?php echo 'Unread Tickets : '.$i;?></tr>
</tbody>
</table>

<?php
require_once '../model/ticketModel.php';
$ticketModel=new ticketModel();
$listeT = $ticketModel->displayTicket(1);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/td/html4/strict.">

<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="../css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="../Style/Style.css">
  <link rel="stylesheet" type="text/css" href="../Style/Animation.css">
  <link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/Smooth_scroll.js"></script>
  <script type="text/javascript" src="../js/slideshow.js"></script>
  <script src="../js/materialize.min.js"></script>
  <script type="text/javascript" src="../js/modals.js"></script>	
</head>
<body id="bg_admin">

<section id="admin">
	<div class="container ">
			<div class="row">
				<div class="col s3 sidebar">
					<h4>administration interface</h4>
					<center><h6>Ticket</h6></center>
					<ul class="collapsible" data-collapsible="accordion">
					    <li>
					      <div class="collapsible-header"><i class="mdi-action-account-child"></i><a href="admin_index.php">Users</a></div>
					    </li>
					    <li>
					      <div class="collapsible-header"><i class="mdi-action-shopping-cart"></i>Products</div>
					      <div class="collapsible-body">
					      	<div class="collapsible-header"><i class="mdi-social-whatshot"></i>Guitar</div>
					      	<div class="collapsible-header"><i class="mdi-social-whatshot"></i>Percution</div>
					      	<div class="collapsible-header"><i class="mdi-social-whatshot"></i>A vent</div>
					      	<div class="collapsible-header"><i class="mdi-social-whatshot"></i>Electronique</div>
					      	<div class="collapsible-header"><i class="mdi-social-whatshot"></i>accessoir</div>
					      </div>
					    </li>
					    <li>
					      <div class="collapsible-header"><i class="mdi-action-description"></i><a href="admin_ticket.php">Ticket</a></div>
					    </li>
					    <li>
					      <div class="collapsible-header"><i class="mdi-communication-forum"></i><a href="admin_forum.php">Forum</a></div>
					    </li>
			  		</ul>
				</div>
				<div class="col s9">
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
									<td><a href="ConsulterTicket.php?IdTicket=<?php echo $Tick->getid_ticket(); ?>">View</a></td>
							</tr>
							<?php
								endforeach;
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>

</body>
</html>
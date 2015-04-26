<?php
	include 'header.php';
	include 'navbar.php';
	require_once '../model/ticketModel.php';
	$ticketModel=new ticketModel();
	$ListeT = $ticketModel->displayTicket(1);

?>
	<title>Support</title>
</head>
<body style="background-image:none; background-color:#dddddd;">
	<div id="claim">
		<div class="content">
			<h4>Submit a ticket</h4>
			<form action="../controller/addTicketController.php" method="POST">
				<label>Name : </label>
				<input type="text" name="name" required>
				<br>
				<label>Email : </label>
				<input type="email" name="email" required>
				<br>
				<label>Sujet : </label>
				<input type="text" name="sujet">
				<br>
				<label>Message : </label>
				<textarea name="text" class="materialize-textarea" required></textarea>
				<br>
				<br>
				<div class="row">
					<div class="offset-s1 col s10">
						<div class="card cyan darken-4">
							<div class="card-content white-text">
								<span class="card-title">Please Note</span>
								<p>Make sure to check our FAQ before submitting your Ticket</p>
								<p>You'll be notified via email when our staff answers your request.</p>
							</div>
								<div class="card-action">
								<input class="btn" type="submit" value="submit">
								<a href='#' target="_blank" class="btn">FAQ</a>
							</div>
						</div>
					</div>
				</div>
			</form>
			<br>
			<h4>Your Tickets</h4>
			<table>
				<thead>
					<tr>
						<td>ID</td>
						<td>Status</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($ListeT as $Tick) :
						if ($Tick->getstate()==1) {
									$state="processing";
						}
						elseif ($Tick->getstate==0) {
									$state="resolved";
						}		
					?>
					<tr>
						<td><?php echo $Tick->getid_ticket() ;?></td>
				        <td><?php echo $state; ?></td>
				        <td><a>delete</a></td>
					</tr>
					<?php
					    endforeach;
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
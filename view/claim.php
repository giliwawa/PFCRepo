<?php
	include 'header.php';
	include 'navbar.php';
	require_once '../model/ticketModel.php';
	$ticketModel=new ticketModel();
	if (isset($_SESSION['id_user'])) {
		$ListeT= $ticketModel->displayTicketId_user($_SESSION['id_user']);	
	}

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
				<input type="hidden" name="user_id" value="<?php echo $_SESSION['id_user'];?>">
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
			<div class="affiTicket">
				<h4>Your Tickets</h4>
				<table class="bordered hoverable">
					<thead>
						<tr>
							<td>ID</td>
							<td>Status</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						<?php
						if (isset($_SESSION['id_user'])){
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
					        <td><a href="../controller/deleteTicketController.php?id=<?php echo $Tick->getid_ticket() ;?>">delete</a></td>
						</tr>
						<?php
						    endforeach;
						}
						else {
						?>
					</tbody>
				</table>
				you have to be conntected.
				<?php }?>
			</div>
			
		</div>
	</div>
</body>
</html>
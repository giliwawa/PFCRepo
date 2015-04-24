<?php
	include_once 'ticket.php';
	require '../configuration.php';

	class ticketModel{
		public function __construct()
		{
		}

		public function afficherTicket($id)
		{
			$bdd = new Db();
			$query = "SELECT * FROM ticket WHERE id_ticket=".$id;
			$result = $bdd->query($query);
			$data = $result -> fetch_assoc();	
			$Tc = new ticket($data);
			return $Tc;
			
		}

		public function displayTicket($state)
		{
			$bdd = new Db();
			$tableau = array();
			$query = "SELECT * FROM ticket WHERE state=".$state;
			$result = $bdd->query($query);
			$i = 0 ;
			while ($data = $result -> fetch_assoc()) {
				$Tc = new ticket($data);
				$tableau[$i] = $Tc;
				$i++;
			}
			return $tableau;
		}

		public function ajouterTicket($ticket)
		{
			$bdd = new Db();
			$requete="INSERT INTO ticket (name, email, text, state) VALUES ('".$ticket->getname()."','".$ticket->getemail()."','".$ticket->gettext()."',1)";
			$bdd->query($requete);
		}
	}

?>
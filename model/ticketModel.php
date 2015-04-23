<?php
	include_once 'ticket.php';
	require '../configuration.php';

	class TicketModel{
		public function __construct()
		{
			$bdd = new Configuration();
			$bdd->connexion();
		}

		public function afficherTicket($id)
		{
			$query = "SELECT * FROM ticket WHERE id_ticket=".$id;
			$result = mysql_query($query) or die("Erreur" .mysql_error());
			$Tc = new ticket($result);
			return $Tc;
			
		}

		public function displayTicket($state)
		{
			$tableau = array();
			$query = "SELECT * FROM ticket WHERE state=".$state;
			$result = mysql_query($query) or die("Erreur ".mysql_error());
			$i = 0 ;
			while ($data = mysql_fetch_array($result)) {
				$Tc = new ticket($data);
				$tableau[$i] = $Tc;
				$i++;
			}
			return $tableau;
		}
	}

?>
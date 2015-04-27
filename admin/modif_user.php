<?php
require_once '../model/UserModel.php';

$search = htmlspecialchars($_GET["reche"]);
$user= new user();
$userModel = new UserModel();
$listeU =$userModel->rechercheuser($search);

?>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Prenom</th>
			<th>Name</th>
			<th>Sexe</th>
			<th>Date de naissance</th>
			<th>Adresse</th>
			<th>CIN</th>
			<th>Num° telephone</th>
			<th>Points</th>
			<th>Email</th>
			<th>Privilege</th>
			<th>Username</th>
			<th>Password</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php
    foreach ($listeU as $user) :
?>
    <tr>
        <td><?php echo $user->getid_user() ;?></td>
        <td><?php echo $user->getPrenom() ;?></td>
        <td><?php echo $user->getNom() ;?></td>
        <td><?php echo $user->getSexe() ;?></td>
        <td><?php echo $user->getDate_naissance() ;?></td>
        <td><?php echo $user->getAdresse() ;?></td>
        <td><?php echo $user->getCIN() ;?></td>
        <td><?php echo $user->getNum_tel() ;?></td>
        <td><?php echo $user->getNbr_point() ;?></td>
        <td><?php echo $user->getEmail() ;?></td>
        <td><?php echo $user->getPrivilege() ;?></td>
        <td><?php echo $user->getUsername() ;?></td>
        <td><?php echo $user->getPassword() ;?></td>
        <td><a onclick="loadmodify(<?php echo $user->getid_user() ;?>)">Modify</a></td>
    </tr>

<?php
    endforeach;

?>
    
</tbody>
</table>
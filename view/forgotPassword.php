<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/td/html4/strict.">

<?php 
	include 'header.php';
?>
	<title>Forgot Your Password ?</title>
</head>
<body>
<?php
	include 'navbar.php';

	function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
	$pass1=generateRandomString();

	$text="Here is your new Password : ".$pass1;
	$pass=md5($pass1);
?>

	<section id="forgot">
		<div class="container">
			<p>Please provide your e-mail adress.</p>
			<p>A Temporary Random Password will be sent</p>
			<form action="../controller/forgetpass.php" method="POST">
				<label>Username</label>
				<input type="email" name="mail" required>
				<input type="hidden" name="sujet" value="Recovery Email">
				<input type="hidden" name="msg" value="<?php echo $text?>">
				<input type="hidden" name="passw" value="<?php echo $pass?>">
				<input type="submit" class="btn" value="Send Temporary Password">
			</form>
		</div>
	</section>


<?php
	include 'footer.php';
?>
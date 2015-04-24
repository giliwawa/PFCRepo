<html>
<head>
	<title>claim</title>
</head>
<body>
	<div id="claim">
		<form action="../controller/addTicketController.php" method="POST">
			<input type="text" name="name">
			<br>
			<input type="text" name="email">
			<br>
			<input type="text" name="sujet">
			<br>
			<textarea name="text"></textarea>
			<br>
			<input type="submit" value="submit">
		</form>
	</div>
</body>
</html>
<html>
<head>
	<title>Admin Interface</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="../view/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/adminStyle.css">
	<link rel="stylesheet" type="text/css" href="../view/css/ionicons.min.css">
	
	<script type="text/javascript" src="../view/js/jquery.js"></script>
	<script type="text/javascript" src="../view/js/materialize.min.js"></script>
        <script type="text/javascript" src="js/adminLogin.js"></script>
	

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12 red lighten-2">
                <h4 >Administration Panel</h4>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="mdi-action-account-circle prefix"></i>
                <input id="login" type="text" class="validate">
                <label for="login">Username</label>
            </div>
            <div class="input-field col s12">
                <i class="mdi-action-account-circle prefix"></i>
                <input id="pwrd" type="password" class="validate">
                <label for="pwrd">Password</label>
            </div>
            <div class="col s12">
                <a href="#" class="btn" onclick="adminLogin()">LogIn</a>
            </div>
        </div>
    </div>
</body>
</html>
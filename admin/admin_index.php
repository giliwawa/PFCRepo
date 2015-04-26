<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/td/html4/strict.">

<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
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
        <div class="container">
            <div class="row">
                <div class="col s3 sidebar">
                    <h4>administration interface</h4>
                    <center><h6>User</h6></center>
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
                <div class="col s9 tabs">
                    <ul class="tabs">
                        <li class="tab col s3"><a href="#test1">Test 1</a></li>
                        <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
                        <li class="tab col s3"><a href="#test3">Test 3</a></li>
                        <li class="tab col s3"><a href="#test4">Test 4</a></li>
                    </ul>
                    <div id="test1" class="col s12">Test 1</div>
                    <div id="test2" class="col s12">Test 2</div>
                    <div id="test3" class="col s12">Test 3</div>
                    <div id="test4" class="col s12">Test 4</div>
                </div>
            </div>
        </div>
    </section>
        
</body>
</html>
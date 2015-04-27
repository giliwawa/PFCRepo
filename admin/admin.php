<html>
<head>
	<title>Admin Interface</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="../view/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../view/Style/Style_admin.css">
	<link rel="stylesheet" type="text/css" href="../view/css/ionicons.min.css">
	
	<script type="text/javascript" src="../view/js/jquery.js"></script>
	<script type="text/javascript" src="../view/js/materialize.min.js"></script>
	<script type="text/javascript" src="../view/js/modals.js"></script>
	<script type="text/javascript" src="../view/js/sidenav.js"></script>
	<script type="text/javascript" src="../view/js/loadTicket.js"></script>
	<script type="text/javascript" src="../view/js/loadproduit.js"></script>
	<script type="text/javascript" src="../view/js/loadUser.js"></script>

</head>
<body>
	<div class="navigation_bars">
		<nav class="top-nav">
	        <div class="container">
	          <div class="nav-wrapper">
	          	<a class="page-title">Administrator Platform</a>
	          </div>
	        </div>
	    </nav>
	  	<ul id="nav-mobil" class="side-nav fixed left">
		    <li class="bold"><a href="" class="waves-effect waves-teal">Home</a></li>
		    <li class="no-padding bold">
		      <ul class="collapsible collapsible-accordion">
		            <li><a class="collapsible-header waves-effect waves-teal">Users</a>
		              <div class="collapsible-body">
		                <ul>
		                  <li><a onclick="loadUser();">Display Users</a></li>
		                  <li><a onclick="loadadminUser();">Add Users</a></li>
		                  <li><a href="">Modify Users</a></li>
		                  <li><a href="">Delete Users</a></li>
		                </ul>
		              </div>
		            </li>
		            <li><a class="collapsible-header waves-effect waves-teal">Products</a>
		              <div class="collapsible-body">
		                <ul>
		                  <li><a onclick="loadproduit();">Display Products</a></li>
		                  <li><a href="">Add Products</a></li>
		                  <li><a href="">Modify Products</a></li>
		                  <li><a href="">Delete Products</a></li>
		                  <li><a href="">Add Discount</a></li>
		                </ul>
		              </div>
		            </li>   
		        </ul>
		    </li>
                    <li class="bold"><a class="waves-effect waves-teal" onclick="loadTicket();" >Tickets<span id="tick"></span></a></li>
		    <li class="bold"><a href="" class="waves-effect waves-teal">Statistics</a></li>

		</ul>
	  <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
	</div>
	<div id="show">
		<br>
		<br>
		<br>
	</div>


</body>
</html>
<?php 
session_start();
if (isset($_SESSION['myemail']) || isset($_COOKIE['myemail'])) 
{
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>MyFiles | User Manager</title>
		<link rel="icon" href="../Admin/images/favicon.ico">
		<link rel="shortcut icon" href="../Admin/images/favicon.ico" />
		<link rel="stylesheet" href="../Admin/css/stylemin.css">
		
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
        
       
        	<!-- jQuery and jQuery UI (REQUIRED) -->
		<link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

		<!-- elFinder CSS (REQUIRED) -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/elfinder.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/theme.css">

		<!-- elFinder JS (REQUIRED) -->
		<script type="text/javascript" src="js/elfinder.min.js"></script>

		<!-- elFinder translation (OPTIONAL) -->
		<script type="text/javascript" src="js/i18n/elfinder.ru.js"></script>
		
		<!-- elFinder initialization (REQUIRED) -->
        
	</head>
	<body class="">
<!--==============================header=================================-->
	<h2>Hi <span style="color:#00ffff" > <?php echo $_SESSION['myemail']; ?> </span> | <a href="../controller/checkLogout.php">Logout</a></h2>
		<header class="page1">
			<div class="container_12">
				<div class="grid_12">
					<h1><a href="" ><img src="../Admin/images/logo.png"></a></h1>
				</div>
				<div class="clear"></div>
				<h1>| User upgrade</h1>
			</div>
		</header>
		<section>
			<div id="content1">
				<h3>Choose your plan to get started</h3>
				<div class="box">
					<h4>Basic</h4>
					<img src="../Admin/images/free_items_gray.png" width="278" height="230">
					<h5>Starting at 10GB (up to 50GB)</h5>
					<h4><b>FREE</b></h4>
					<button>Current Plan</button>
				</div>
				<div class="box">
					<h4>Pro</h4>
					<img src="../Admin/images/rucksack.png" width="278">
					<h5>Starting at 100GB</h5>
					<h4><b>$2.49/month</b></h4>
					<button>Upgrade</button>
				</div>
				<div class="box">
					<h4>Business</h4>
					<img src="../Admin/images/briefcase.png" width="278">
					<h5>Starting at 1TB</h5>
					<h4><b>$24.99/month</b></h4>
					<button>Learn more</button>
				</div>
			</div>
		</section>
		
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="copy">
						<a href=""><img src="../Admin/images/footer_logo.png" alt=""></a>  &copy; 2013. <br>Website designed by Group 11.<br>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>

	</body>
</html>
<?php
}
else
	header('Location: ../index.php');
?>

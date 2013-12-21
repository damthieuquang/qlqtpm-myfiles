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
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/stylemin.css">
		
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
					<h1><a href="" ><img src="images/logo.png"></a></h1>
				</div>
				<div class="clear"></div>
				<h1>| User manager</h1>
			</div>
		</header>
		<section>
			<div id="content">
				<table>
					<tr>
						<td width="6%" class="td1"><b>STT</b></td>
						<td width="12%" class="td1"><b>ACCOUT_ID</b></td>
						<td width="28%" class="td2"><b>EMAIL</b></td>
						<td width="10%" class="td1"><b>ACCOUTTYPE_ID</b></td>
						<td width="14%" class="td2"><b>TOTAL</b></td>
						<td width="20%" class="td2"><b>STATUS</b></td>
					</tr>
					<?php
						include_once("../controller/DataProvider.php");
						$query = "SELECT * FROM ACCOUNT";
						$result = DataProvider::ExecuteQuery($query);
						$dem = 1;
						while($row = mysql_fetch_array($result,MYSQL_ASSOC))
						{
							?>
					<tr>
						<td class="td1"><?php echo $dem;?></td>
						<td class="td1"><?php echo $row["account_id"];?></td>
						<td class="td2"><?php echo $row["email"];?></td>
						<td class="td1"><?php echo $row["accounttype_id"];?></td>
						<td class="td2"><?php echo $row["total"];?></td>
						<td class="td2"><?php echo $row["status"];?></td>
					</tr>
							<?php
							$dem++;
						}
					?>
				</table>
			</div>
		</section>
		
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="copy">
						<a href=""><img src="images/footer_logo.png" alt=""></a>  &copy; 2013. <br>Website designed by Group 11.<br>
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

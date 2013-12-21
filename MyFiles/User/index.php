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
					<h1><a href="../Files/" ><img src="../Admin/images/logo.png"></a></h1>
				</div>
				<div class="clear"></div>
				<h1>| User profile</h1>
			</div>
		</header>
		<section>
			<h3>Your information account</h3>
			<div id="content2">
				<table>
					<tr>
						<td width="25%" class="td1"><b>Total Storage Used</b></td>
						<td width="25%" class="td1"><b>Total Downloads Served</b></td>
						<td width="25%" class="td1"><b>Est. Bandwidth Served</b></td>
						<td class="td1"><b>Upgrade your Account</b></td>
					</tr>
					<?php
						include_once("../controller/DataProvider.php");
						$query = "SELECT * FROM ACCOUNT WHERE ACCOUNT_ID = ".$_SESSION["fileid"];
						$result = DataProvider::ExecuteQuery($query);
						$re = mysql_fetch_array($result,MYSQL_ASSOC);
						$sum_size = "SELECT * FROM FILE WHERE ACCOUNT_ID = ".$_SESSION["fileid"];
						$re_sum = DataProvider::ExecuteQuery($sum_size);
						$re_sum_size = 0;
						$dem = 0;
						while($row_sum = mysql_fetch_array($re_sum)){
							$re_sum_size += $row_sum["size"];
							$dem++;
						}
					?>
					<tr>
						<td class="td1"><h4><?php echo round($re_sum_size/(1024*1024),4); ?> MB</h4><h5>From <?php echo $dem;?> total files</h5></td>
						<td class="td1"><h4>17</h4><h5>Since August 09, 2011</h5></td>
						<td class="td1"><h4>984.76 MB</h4><h5>From Currently Hosted Files</h5></td>
						<td class="td1"><h4>Need more?</h4><h5><button>Upgrade Now!</button></h5></td>
					</tr>
				</table><br/>
				<h3>Account details</h3>
				<div class="box1">
					<table>
						<tr>
							<td>Email Address:</td>
							<td><?php echo $re["email"];?></td>
						</tr>
						<tr>
							<td>Password::</td>
							<td><?php echo $re["password"];?></td>
						</tr>
						<tr>
							<td>Account Created:</td>
							<td>August 09, 2011</td>
						</tr>
						<tr>
							<td>Time Zone:</td>
							<td>(GMT+07:00) Bangkok, Hanoi, Jakarta</td>
						</tr>
					</table>
				</div><br/>
				<h3>Personal Information</h3>
				<div class="box1">
					<table>
						<tr>
							<td>Gender:</td>
							<td>male</td>
						</tr>
						<tr>
							<td>Primary Usage:</td>
							<td>Prefer not to answer</td>
						</tr>
					</table>
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

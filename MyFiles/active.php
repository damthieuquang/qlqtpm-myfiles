<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>MyFiles</title>
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/form.css">
        <script src="js/jquery.js"></script>
        <script src="js/confirm.js"></script>
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
	</head>
	<body class="">
<!--==============================header=================================-->
		<header class="page1">
			<div class="container_12">
				<div class="grid_12">
					<h1><a href=""><img src="images/logo.png" alt="Gerald Harris attorney at law"></a></h1>
					
				</div>
				<div class="clear"></div>
			</div>
		</header>
<!--=======content================================-->	
			<div id="page5" class="content">
			<div class="container_12" style="margin-top:-100px;">
            <?php
			include_once("controller/DataProviderRoot.php");
			if(isset($_REQUEST["id"]))
			{
				$email = "";
				$sql = "select * from `account` where `account_id` = " . $_REQUEST["id"];
				$res = DataProvider::ExecuteQuery($sql);		
				if (mysql_num_rows($res) == 1)
				{
					$row = mysql_fetch_array($res,MYSQL_ASSOC);
					$email = $row["email"];
				}

			?>
				<div class="grid_12">
					<div class="slogan">
						<h3>Confirm your account</h3>
					</div>
				</div>
				<div class="clear"></div>
				<div class="map">
					<div class="grid_5 prefix_1">
						Please enter your password to comfirm your account. 
						<form id="form">

						<fieldset>
						<label class="message"> Email:
						<input type="text" id="email" value="<?php echo $email; ?>">
						<br class="clear">
						</label>
						<label class="message">Password:
						<input type="text" id="password" value="">
						<br class="clear">
						</label>
						<div class="clear"></div>
						<div class="btns"><a data-type="submit" id="sub-confirm" class="link1">Comfirm your account</a>
						<div class="clear"></div>
						</div></fieldset></form>
					</div>
					<div class="clear"></div>
				</div>
            <?php
			}
			?>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="copy">
						<a href=""><img src="images/footer_logo.png" alt=""></a>  &copy; 2013.<br> Website designed by Group 11<br>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
	</body>
</html>


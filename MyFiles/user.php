<?php 
session_start();
if (isset($_SESSION['myemail']) || isset($_COOKIE['myemail'])) 
{
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>MyFiles</title>
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/login.css">
        <script src="js/jquery.js"></script>
        <script src="js/myfiles.js"></script>
        
        <style>	
		 div div.box1 {
			width:94%;
			padding:10px 3%;
			color:#725575;
			background:#dde4eb;
			border:1px solid #F90;
		}
		
		 div div.box1 table {
			border:none;
			width:100%;
		}
		
		 div div.box1 td {
			border:none;
			padding:2px;
			text-align:left;
			vertical-align:middle;
		}
		
		</style>
	
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
					<h1><a href="Files" onClick="goToByScroll('page1'); return false;"><img src="images/logo.png" alt="Gerald Harris attorney at law"></a></h1>
				<div style=" position:absolute; top:10px; right:10px;">Hi <span style="color:#00ffff" > <?php echo $_SESSION['myemail']; ?> </span> | <a href="controller/checkLogout.php">Logout</a></div>
				</div>
				<div class="clear"></div>
			</div>
		</header>
<!--=======content================================-->
            <?php
				include_once("controller/DataProviderRoot.php");
				$query = "SELECT * FROM `account` WHERE `account_id` = ".$_SESSION["fileid"];
				$result = DataProvider::ExecuteQuery($query);
				$re = mysql_fetch_array($result,MYSQL_ASSOC);
				
				$query = "SELECT `name` FROM `accounttype` WHERE `accounttype_id` = " . $re["accounttype_id"];
				$result = DataProvider::ExecuteQuery($query);
				$name = mysql_fetch_array($result,MYSQL_ASSOC);
			?>
            <input type="hidden" id="account-id" value="<?php echo $_SESSION['fileid']; ?>">
		<div id="page3" class="content" style="background:#334960">
        
			<div class="container_12" style="margin-top:-100px;">
            <h3>Account Information</h3>
            <div class="box1">
			<table>
				<tr>
					<td>Email Address:</td>
					<td><?php echo $re["email"];?></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><button id="btnChange"> Change password</button></td>
				</tr>
                <tr>
						<td>Type:</td>
						<td><?php echo $name["name"]; ?></td>
				</tr>
				<tr>
						<td>Total Storage Used:</td>
						<td>August 09, 2011</td>
				</tr>
				</table>
			</div>
            
				<h3>Upgrade</h3><br>
				<div class="grid_3" >
					<div class="box maxheight1" style="height:300px;">
						<img src="images/free.png" alt="">
						<div class="text1"><a href="#">Lite</a></div>
						FREE<br>
						Share files up to 250MB<br>
						2 GB of storage<br>&nbsp <br>
                        <?php if ($re["accounttype_id"] == 1 ) echo "<b style='color:red'>Current<b>"; else echo "&nbsp"; ?>
					</div>
				</div>
				<div class="grid_3">
					<div class="box maxheight1" style="height:300px;">
						<img src="images/pro.png" alt="">
						<div class="text1"><a href="#">Professional</a></div>
						$15.99/month<br>
						Send large files (2GB)<br>
						Unlimited storage<br>&nbsp <br>
                        <?php 
							if ($re["accounttype_id"] == 2 ) 
								echo "<b style='color:red; font-size:13px;'>Current<b>"; 
							else
							{
								if($re["accounttype_id"] < 2)
								{
									echo "<button id='ugProfessional'> Upgrade</button>"; 
								}
								else
								{
									echo "&nbsp"; 
								}
							}
						?>
					</div>
				</div>
				<div class="grid_3">
					<div class="box maxheight1" style="height:300px;">
						<img src="images/team.png" alt="">
						<div class="text1"><a href="#">Teams</a></div>
						$24.99/month<br>
						Send large files (10GB)<br>
						Unlimited storage<br>&nbsp <br>
                        <?php 
							if ($re["accounttype_id"] == 3 ) 
								echo "<b style='color:red'>Current<b>"; 
							else
							{
								if($re["accounttype_id"] < 3)
								{
									echo "<button id='ugTeams'> Upgrade</button>"; 
								}
								else
								{
									echo "&nbsp"; 
								}
							}
						?>
					</div>
				</div>
				<div class="grid_3">
					<div class="box maxheight1" style="height:300px;">
						<img src="images/enterprise.png" alt="">
						<div class="text1"><a href="#">Enterprise</a></div>
						Call 1-866-558-7363<br>
						Customized sharing storage and support options to meet your business need<br>
                        <?php if ($re["accounttype_id"] == 4 ) echo "<b style='color:red'>Current<b>"; else echo "&nbsp"; ?>
					</div>
				</div>
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
        
 <div class="dialog" id="changepass-form">
    <div id="container" >
		<div class="btnclose" id="changepass-close"></div>
		<form id="frmChangepass" onSubmit="return false;">
		
		<label for="username">New Password:</label>
		
		<input type="password" name="newPass" id="newPass" minlength="6" class="required"><br/>
		
        <label for="username">Re-New password:</label>
		
		<input type="password" name="reNewPass" id="reNewPass" minlength="6" class="required"><br/>
		
		<div id="lower">
		<input type="submit" value="Change" id="changePass-submit">
		</div>
		</form>
		<div class="success" style="display:none;">Nơi hiển thị kết quả</div>
	</div>   
</div>  
	</body>
</html>
<?php
}
else
	header('Location: login.php');
?>
